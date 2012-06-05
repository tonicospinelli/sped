<?php

namespace Sped\Commons\XmlDocument;

use Sped\Commons\XmlDocument;

class Schema extends XmlDocument {

  public $loadedImportFiles = array();
  public $fileName = null;

  /**
   * Load XML from a file.
   * @param string $filename The path to the XML document.
   * @param int|null $options [optional]<br>Bitwise OR of the libxml option constants.
   * @param bool $loadExternals [optional]<br>Includes or imports the file content if is TRUE.
   * @return boolean 
   */
  public function load($filename, $options = null, $loadExternals = false) {
    $options = (($options !== null) ? LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_NOENT | LIBXML_XINCLUDE : $options);
    if (!parent::load($filename, $options))
      return false;

    $this->fileName = realpath($filename);
    if ($loadExternals)
      $this->loadExternalFiles($this->fileName);
    return true;
  }

  /**
   * Load XML from a string.
   * @param string $source The string containing the XML.
   * @param int $options [optional]<br>Bitwise OR of the libxml option constants.
   * @param bool $loadExternals 
   * @return boolean true on success or false on failure. If called statically, returns a DOMDocument or false on failure.
   */
  public function loadXML($source, $options = 0, $loadExternals = false) {
    $options = (($options !== null) ? LIBXML_DTDLOAD | LIBXML_DTDATTR | LIBXML_NOENT | LIBXML_XINCLUDE : $options);
    if (!parent::loadXML($source, $options))
      return false;

    if ($loadExternals)
      $this->loadExternalFiles();
    return true;
  }

  /**
   * Load imports and includes
   *
   * @param string $filepath Full path to first XSD Schema.
   * @param Sped_Xml_Schema_Abstract $dom DOM model of the schema.
   * @param string $namespace
   * @throws DOMException 
   */
  public function loadExternalFiles($filepath = null, $dom = null, $namespace = null) {
    $dom = ($dom instanceof Schema) ? $dom : $this;

    $filepath = realpath(dirname(is_null($filepath) ? $this->fileName : $filepath));

    $xpath = new \DOMXPath($dom);

    $readTags = array('import', 'include');
    foreach ($readTags as $tagName) {
      $query = "//*[local-name()='{$tagName}' and namespace-uri()='http://www.w3.org/2001/XMLSchema']";
      $entries = $xpath->query($query);
      if ($entries->length < 1)
        continue;

      foreach ($entries as $entry) {
        $xsdFileName = realpath($filepath . DIRECTORY_SEPARATOR . $entry->getAttribute("schemaLocation"));
        if (in_array($xsdFileName, $this->loadedImportFiles)) {
          $parent->removeChild($entry);
          continue;
        }

        if (!file_exists($xsdFileName))
          throw new \RuntimeException('File not found');

        $namespace = $entry->getAttribute('namespace');
        $parent = $entry->parentNode;

        $xsd = new Schema($dom->version, $dom->encondig);

        $xsd->loadedImportFiles[] = $xsdFileName;
        if ($xsd->load($xsdFileName, 0, true)) {
          $this->loadedImportFiles = array_merge($this->loadedImportFiles, $xsd->loadedImportFiles);
        }

        foreach ($xsd->documentElement->childNodes as $node) {
          if (in_array($node->localname, $readTags)) {
            $loc = realpath(dirname($xsdFileName) . DIRECTORY_SEPARATOR . $node->getAttribute('schemaLocation'));

            $docNode = new Schema($this->version, $this->enconding);
            $docNode->load($loc, null, true);

            $newNode = $dom->importNode($docNode->documentElement, true);
            $parent->insertBefore($newNode, $entry);
            continue;
          }

          if (!is_null($namespace) AND !empty($namespace)) {
            $newNodeNs = $xsd->createAttribute("namespace");
            $textEl = $xsd->createTextNode($namespace);
            $newNodeNs->appendChild($textEl);
            $node->appendChild($newNodeNs);
          }
          $newNode = $dom->importNode($node, true);
          $parent->insertBefore($newNode, $entry);
        }
        $parent->removeChild($entry);
      }
    }
  }

}