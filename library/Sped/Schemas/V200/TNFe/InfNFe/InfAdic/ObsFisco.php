<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic;

/**
 * Campo de uso exclusivo do Fisco<br />
 * informar o nome do campo no atributo xCampo<br />
 * e o conteúdo do campo no xTexto
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ObsFisco
 * @package Sped
 */
class ObsFisco extends \Sped\Components\Xml\Element 
{

    const XTEXTO = 'xTexto';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto 
     */
    public function getXTexto()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto');
        return $this->getElementsByTagName(self::XTEXTO)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto 
     */
    public function addXTexto($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto(self::XTEXTO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto $paramXTexto 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function setXTexto(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco\XTexto $paramXTexto)
    {
        $this->removeElementsByTagName(self::XTEXTO);
        $this->appendChild($paramXTexto, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getXCampo()
    {
        return $this->getAttribute('xCampo');
    }

    /**
     * 
     * @param type $value 
     */
    public function setXCampo($value)
    {
        $this->setAttribute('xCampo', $value);
        return $this;
    }

}