<?php

namespace Sped\Schemas\V200;

/**
 *  Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TEnviNFe
 * @package Sped
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
     * @param type $value 
     * @return \Sped\Schemas\V200\TIdLote 
     */
    public function addIdLote($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TIdLote(self::IDLOTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
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
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function addNFe($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe(self::NFE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
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
     * @param type $value 
     */
    public function setVersao($value){
        $this->setAttribute('versao', $value);
        return $this;
    }

}