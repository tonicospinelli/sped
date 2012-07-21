<?php

namespace Sped\Schemas\V200;

/**
 *  Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * @name TEnviNFe
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TEnviNFe extends \Sped\Components\Xml\Element  {

    const IDLOTE = 'idLote';

    const NFE = 'NFe';

    /**
     * 
     * @return \Sped\Schemas\V200\TIdLote 
     */
    public function getIdLote(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIdLote');
        return $this->getElementsByTagName(self::IDLOTE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIdLote 
     * @param type $value 
     */
    public function addIdLote($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TIdLote(self::IDLOTE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TIdLote $paramIdLote 
     * @return \Sped\Schemas\V200\TEnviNFe 
     */
    public function setIdLote(\Sped\Schemas\V200\TIdLote $paramIdLote){
        $this->removeElementsByTagName(self::IDLOTE);
        $this->appendChild($paramIdLote, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function getNFe(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe');
        return $this->getElementsByTagName(self::NFE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe 
     * @param type $value 
     */
    public function addNFe($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe(self::NFE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe $paramNFe 
     * @return \Sped\Schemas\V200\TEnviNFe 
     */
    public function setNFe(\Sped\Schemas\V200\TNFe $paramNFe){
        $this->removeElementsByTagName(self::NFE);
        $this->appendChild($paramNFe, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao(){
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param string $value 
     * @return \Sped\Schemas\V200\TEnviNFe 
     */
    public function setVersao(string $value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}