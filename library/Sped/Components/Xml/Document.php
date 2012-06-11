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

/**
 * @category   Sped
 * @package    Sped\Components\Xml
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Document extends \DOMDocument {

    const ATTRIBUTES = '__ATTRIBUTES__';
    const CONTENT = '__CONTENT__';

    /**
     * Namespace's list.
     * @var array
     */
    protected $namespaces;

    public function __construct() {
        parent::__construct('1.0', 'UTF-8');
        parent::registerNodeClass('\DOMElement', '\Sped\Components\Xml\Element');
    }

    /**
     * Adds new child at the end of the children.
     * @param \DOMNode $newNode The appended child.
     * @param boolean $unique If sets TRUE, search if exists the same node.
     * @return DOMNode The node added or if is unique, returns the node found.
     */
    public function appendChild(\DOMNode $newNode, $unique = false) {
        if ($unique)
            $node = parent::getElementsByTagName($newNode->localName)->item(0);

        if ($node !== null)
            $newNode = parent::replaceChild($newNode, $node);
        else
            $newNode = parent::appendChild($newNode);

        if (method_exists($newNode, 'loadDefaults'))
            $newNode->loadDefaults();

        return $newNode;
    }

    /**
     * (PHP 5)<br/>
     * Adds a new child before a reference node
     * @link http://php.net/manual/en/domnode.insertbefore.php
     * @param DOMNode $newnode <p>
     * The new node.
     * </p>
     * @param DOMNode $refnode [optional] <p>
     * The reference node. If not supplied, <i>newnode</i> is
     * appended to the children.
     * </p>
     * @return DOMNode The inserted node.
     */
    public function insertBefore(DOMNode $newnode, DOMNode $refnode = null) {
        $newNode = parent::insertBefore($newnode, $refnode);

        if (method_exists($newNode, 'loadDefaults'))
            $newNode->loadDefaults();

        return $newNode;
    }

    /**
     * (PHP 5)<br/>
     * Replaces a child
     * @link http://php.net/manual/en/domnode.replacechild.php
     * @param DOMNode $newnode <p>
     * The new node. It must be a member of the target document, i.e.
     * created by one of the DOMDocument->createXXX() methods or imported in
     * the document by .
     * </p>
     * @param DOMNode $oldnode <p>
     * The old node.
     * </p>
     * @return DOMNode The old node or false if an error occur.
     */
    public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode) {
        $newNode = parent::replaceChild($newnode, $oldnode);

        if (method_exists($newNode, 'loadDefaults'))
            $newNode->loadDefaults();

        return $newNode;
    }

    /**
     * (PHP 5)<br/>
     * Removes children by tag name from list of children
     * @link http://php.net/manual/en/domnode.removechild.php
     * @param string $tagName <p>
     * The tagName to remove children.
     * </p>
     * @return boolean If the child could be removed the function returns true.
     */
    public function removeChildrenByTagName($name) {
        $nodes = $this->getElementsByTagName($name);
        foreach ($nodes as $node)
            $this->removeChild($node);
        return true;
    }

    /**
     * Return array of namespaces of the document
     * @return array
     */
    public function getNamespaces() {
        if (is_array($this->namespaces))
            return $this->namespaces;

        $xpath = new \DOMXPath($this);
        $query = "namespace::*";
        $this->namespaces = array();
        $namespaces = $xpath->query($query);
        foreach ($namespaces as $node) {
            if (preg_match("/:/", $node->nodeName)) {
                list ($pref, $key) = explode(":", $node->nodeName);
                if ($key === "xml") {
                    continue;
                }
                $this->namespaces[$key] = $node->nodeValue;
            }
        }
        var_dump($this->namespaces);
        return $this->namespaces;
    }

    /**
     * Return the target namespace this document
     * @return string
     */
    public function getTargetNamespace() {
        $xpath = new \DOMXPath($this);
        $query = "/*/@targetNamespace";
        $this->namespaces = array();
        $targetNS = $xpath->query($query);
        foreach ($targetNS as $node) {
            return $node->nodeValue;
        }
        return NULL;
    }

    /**
     *
     * @param string $qname QName string (fx, ns1:Name)
     * @param boolean $resolveNamespace [optional] Resolve namespace code to full form
     *
     * @return array($namespace, $nodeName)
     */
    public function parseQName($qname, $resolveNamespace = false) {

        if (!$this->isQName($qname))
            throw new \RuntimeException("Given argument is not of QName type: " . $qname);

        list ($ns, $name) = explode(":", $qname);

        if ($resolveNamespace === true)
            $ns = $this->resolveNamespace($ns);

        return array($ns, $name);
    }

    public function isQName($name) {
        if (preg_match('/:/', $name))
            return true;

        return false;
    }

    /**
     * Resolve short namespace to long, or return the same code if not found
     *
     * @param string $shortNs
     *
     * @return string Long namespace
     */
    public function resolveNamespace($shortNs) {
        $namespaces = $this->getNamespaces();

        if (array_key_exists($shortNs, $namespaces)) {
            return $this->namespaces[$shortNs];
        } else {
            return $shortNs;
        }
    }

    public function getNsCode($longNs, $rt = false) {
        $namespaces = $this->getNamespaces();

        if (array_key_exists($longNs, $namespaces))
            return $namespaces[$longNs];

        $this->namespaces[$longNs] = 'ns' . $this->lastNsKey;
        if ($rt === false) {
            $nsAttr = $this->createAttributeNS($longNs, $this->namespaces[$longNs] . ":" . $this->rootTagName);
        }
        $this->lastNsKey++;
        return $this->namespaces[$longNs];
    }

    /**
     * Create xml document from array
     * @param array $source
     * This source array:
     * <code>
     * Array(
     *  [book] => Array(
     *    [0] => Array(
     *      [author] => Author0
     *      [title] => Title0
     *      [publisher] => Publisher0
     *      [__attributes__] => Array(
     *        [isbn] => 978-3-16-148410-0
     *      )
     *    )
     *    [1] => Array(
     *      [author] => Array(
     *        [0] => Author1
     *        [1] => Author2
     *      )
     *      [title] => Title1
     *      [publisher] => Publisher1
     *    )
     *    [2] => Array(
     *      [__attributes__] => Array(
     *        [isbn] => 978-3-16-148410-0
     *      )
     *      [__content__] => Title2
     *    )
     *  )
     * )
     * </code>
     *
     * will produce this XML:
     *
     * <code>
     * <root>
     *   <book isbn="978-3-16-148410-0">
     *     <author>Author0</author>
     *     <title>Title0</title>
     *     <publisher>Publisher0</publisher>
     *   </book>
     *   <book>
     *     <author>Author1</author>
     *     <author>Author2</author>
     *     <title>Title1</title>
     *     <publisher>Publisher1</publisher>
     *   </book>
     *   <book isbn="978-3-16-148410-0">Title2</book>
     * </root>
     * </code>
     * @param string $rootTagName   
     * @return XmlDocument
     */
    public static function arrayToXml(array $source, $rootTagName = null) {
        $document = new XmlDocument();
        $document->appendChild(self::createDOMElement($source, $document, $rootTagName));
        return $document;
    }

    /**
     * @param array $source
     * @param string $rootTagName
     * @param bool $formatOutput
     * @return string
     */
    public static function arrayToXMLString(array $source, $rootTagName = 'root', $formatOutput = true) {
        $document = self::arrayToDOMDocument($source, $rootTagName);
        $document->formatOutput = $formatOutput;
        return $document->saveXML();
    }

    /**
     * @param \DOMDocument $document
     * @return array
     */
    public static function xmlDocumentToArray(XmlDocument $document) {
        return self::createArray($document->documentElement);
    }

    /**
     * @param string $xmlSource
     * @return array
     */
    public static function xmlSourceToArray($xmlSource) {
        $document = new XmlDocument();
        return $document->loadXML($xmlSource) ? self::domDocumentToArray($document) : array();
    }

    /**
     * @param mixed $source
     * @param \DOMDocument $document
     * @param string $tagName
     * @return \DOMNode
     */
    private static function createDOMElement($source, \DOMDocument $document, $tagName = null) {
        if (!is_array($source)) {
            $element = $document->createElement($tagName);
            $element->appendChild($document->createCDATASection($source));

            return $element;
        }

        $element = is_null($tagName) ? $document->documentElement : $document->createElement($tagName);

        foreach ($source as $key => $value)
            if (is_string($key))
                if ($key == self::ATTRIBUTES)
                    foreach ($value as $attributeName => $attributeValue)
                        $element->setAttribute($attributeName, $attributeValue);
                else if ($key == self::CONTENT)
                    $element->appendChild($document->createCDATASection($value));
                else
                    foreach ((is_array($value) ? $value : array($value)) as $elementKey => $elementValue)
                        $element->appendChild(self::createDOMElement($elementValue, $document, $key));
            else
                $element->appendChild(self::createDOMElement($value, $document, $tagName));

        return $element;
    }

    /**
     * @param \DOMNode $domNode
     * @return array
     */
    private static function createArray(\DOMNode $domNode) {
        $array = array();

        for ($i = 0; $i < $domNode->childNodes->length; $i++) {
            $item = $domNode->childNodes->item($i);

            if ($item->nodeType == XML_ELEMENT_NODE) {
                $arrayElement = array();

                for ($attributeIndex = 0; !is_null($attribute = $item->attributes->item($attributeIndex)); $attributeIndex++)
                    if ($attribute->nodeType == XML_ATTRIBUTE_NODE)
                        $arrayElement[self::ATTRIBUTES][$attribute->nodeName] = $attribute->nodeValue;

                $children = self::createArray($item);

                if (is_array($children))
                    $arrayElement = array_merge($arrayElement, $children);
                else
                    $arrayElement[self::CONTENT] = $children;

                $array[$item->nodeName][] = $arrayElement;
            }
            else if ($item->nodeType == XML_CDATA_SECTION_NODE || ($item->nodeType == XML_TEXT_NODE && trim($item->nodeValue) != ''))
                return $item->nodeValue;
        }

        return $array;
    }

}
