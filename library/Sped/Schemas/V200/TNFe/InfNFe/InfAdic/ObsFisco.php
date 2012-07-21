<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic;

/**
 * Campo de uso exclusivo do Fisco<br />
 * informar o nome do campo no atributo xCampo<br />
 * e o conteúdo do campo no xTexto
 * @name ObsFisco
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ObsFisco extends \Sped\Components\Xml\Element  {

    const XTEXTO = 'xTexto';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto 
     */
    public function getXTexto(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto');
        return $this->getElementsByTagName(self::XTEXTO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto 
     * @param type $value 
     */
    public function addXTexto($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto(self::XTEXTO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto $paramXTexto 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function setXTexto(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto $paramXTexto){
        $this->removeElementsByTagName(self::XTEXTO);
        $this->appendChild($paramXTexto, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getXCampo(){
        return $this->getAttribute('xCampo');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function setXCampo(string $value){
        $this->setAttribute('xCampo', $value);
        return $this;
    }

}