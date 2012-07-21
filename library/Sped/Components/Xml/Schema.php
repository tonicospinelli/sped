<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Components\Xml;

use Sped\Components\Xml\Document;

/**
 * @category   Sped
 * @package    Sped\Components\Xml
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Schema extends Document {

    public $loadedImportFiles = array();
    public $fileName = null;
    protected $parseTree = null;

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
    public function loadXML($source, $options = null, $loadExternals = false) {
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
     * @param \DOMDocument $dom DOM model of the schema.
     * @throws \RuntimeException 
     */
    public function loadExternalFiles($filepath = null, $dom = null) {
        $dom = ($dom instanceof \DOMDocument) ? $dom : $this;

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

                $parent = $entry->parentNode;

                $xsd = new Schema();

                $xsd->loadedImportFiles[] = $xsdFileName;
                if ($xsd->load($xsdFileName, null, true)) {
                    $this->loadedImportFiles = array_merge($this->loadedImportFiles, $xsd->loadedImportFiles);
                }

                $targetNamespace = $xsd->getTargetNamespace();
                $nsPrefix = $xsd->lookupPrefix($targetNamespace);

                foreach ($xsd->documentElement->childNodes as $node) {
                    if (empty($node->prefix) AND !$node instanceof \DOMText)
                        $node->prefix = $nsPrefix;
                    $newNode = $dom->importNode($node, true);
                    $parent->insertBefore($newNode, $entry);
                }
                $parent->removeChild($entry);
            }
        }
    }

    /**
     *
     * @return Sped\Components\Xml\Document
     */
    public function parseXml() {
        $this->parseTree = new Document();
        $node = $this->parseTree->createElement($this->documentElement->localName);
        $this->parseTree->appendChild($node);
        $this->parseSchemaToXml($this->documentElement, $this->parseTree->documentElement);
        return $this->parseTree;
    }

    protected function parseSchemaToXml(\DOMElement $xml, \DOMElement $parent) {
        foreach ($xml->childNodes as $child) {

            if (!$child instanceof \DOMElement)
                continue;

            switch ($child->localName) {
                case 'simpleType':
                case 'complexType':
                    if ($child->hasAttribute('name')) {
                        $newChild = $this->parseTree->createElement($child->getAttribute('name'));
                        if ($child->hasChildNodes())
                            $parent->appendChild($this->parseSchemaToXml($child, $newChild));
                    }
                    elseif ($child->hasChildNodes()) {
                        $newParent = $this->parseSchemaToXml($child, $parent);
                        $this->parseTree->appendChild($newParent);
                    }

                    break;
                case 'element':
                    if ($child->hasAttribute('name')) {
                        $newChild = $this->parseTree->createElement($child->getAttribute('name'));
                        if ($child->getAttribute('type'))
                            $newChild->setAttribute('type', preg_replace("/^.*\:/", '', $child->getAttribute('type')));
                        if ($child->hasChildNodes())
                            $parent->appendChild($this->parseSchemaToXml($child, $newChild));
                        else
                            $parent->appendChild($newChild);
                    }
                    break;
                case 'attribute':
                    if ($child->hasAttribute('name')) {
                        $parent->setAttribute($child->getAttribute('name'), '');
                    }
                    if ($child->hasAttribute('fixed')) {
                        $parent->setAttribute($child->getAttribute('name'), $child->getAttribute('fixed'));
                    } elseif ($child->hasAttribute('type')) {
                        $parent->setAttribute($child->getAttribute('name'), preg_replace("/^.*\:/", '', $child->getAttribute('type')));
                    }
                    break;
                case 'choise':
                case 'sequence':
                case 'annotations':
                case 'restriction':
                    $this->parseTree->appendChild($this->parseSchemaToXml($child, $parent));
                    break;
                case'documentation':
                    $newChild = $this->parseTree->createElement('documentation', $child->nodeValue);
                    if ($child->hasChildNodes())
                        $parent->appendChild($this->parseSchemaToXml($child, $newChild));
                    break;
                case'enumeration':
                    $newChild = $this->parseTree->createElement('enumeration', $child->getAttribute('value'));
                    $parent->appendChild($newChild);
                    break;
            }
        }
        return $parent;
    }

}