<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @name TransformType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TransformType extends \Sped\Components\Xml\Element  {
    const NAME = 'ransform';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\String 
     */
    public function getXPath(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\String');
        return $this->getElementsByTagName(\Sped\Schemas\V200\String::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\String 
     */
    public function addXPath(){
        return $this->appendChild(new \Sped\Schemas\V200\String(), true);
    }

    /**

     * @param \Sped\Schemas\V200\String $paramXPath 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function setXPath(\Sped\Schemas\V200\String $paramXPath){
        $this->removeElementsByTagName(\Sped\Schemas\V200\String::NAME);
        $this->appendChild($paramXPath, false);
        return $this;
    }

    /**

     * @return string 
     */
    public function getAlgorithm(){
        return $this->getAttribute('Algorithm');
    }

    /**

     * @param string $value 
     * @return \Sped\Schemas\V200\TransformType 
     */
    public function setAlgorithm(string $value){
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}