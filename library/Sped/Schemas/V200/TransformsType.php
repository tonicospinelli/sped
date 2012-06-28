<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @name TransformsType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TransformsType extends \Sped\Components\Xml\Element  {
    const NAME = 'ransforms';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TransformType 
     * @param int $index 
     */
    public function getTransform(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TransformType');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TransformType::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TransformType 
     */
    public function addTransform(){
        return $this->appendChild(new \Sped\Schemas\V200\TransformType(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TransformType $paramTransform 
     * @return \Sped\Schemas\V200\TransformsType 
     */
    public function setTransform(\Sped\Schemas\V200\TransformType $paramTransform){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TransformType::NAME);
        $this->appendChild($paramTransform, false);
        return $this;
    }

}