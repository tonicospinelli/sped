<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Identificação do Destinatário  
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Dest
 * @package Sped
 */
class Dest extends \Sped\Components\Xml\Element  {

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XNOME = 'xNome';

    const ENDERDEST = 'enderDest';

    const IE = 'IE';

    const ISUF = 'ISUF';

    const EMAIL = 'email';

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpjOpc');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpjOpc 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpjOpc(self::CNPJ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpjOpc $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpjOpc $paramCNPJ){
        $this->removeElementsByTagName(self::CNPJ);
        $this->appendChild($paramCNPJ, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function getCPF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCpf');
        return $this->getElementsByTagName(self::CPF)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TCpf 
     */
    public function addCPF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCpf $paramCPF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF){
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome 
     */
    public function getXNome(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome');
        return $this->getElementsByTagName(self::XNOME)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome 
     */
    public function addXNome($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome(self::XNOME, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome $paramXNome 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setXNome(\Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome $paramXNome){
        $this->removeElementsByTagName(self::XNOME);
        $this->appendChild($paramXNome, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function getEnderDest(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TEndereco');
        return $this->getElementsByTagName(self::ENDERDEST)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TEndereco 
     */
    public function addEnderDest($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco(self::ENDERDEST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TEndereco $paramEnderDest 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setEnderDest(\Sped\Schemas\V200\TEndereco $paramEnderDest){
        $this->removeElementsByTagName(self::ENDERDEST);
        $this->appendChild($paramEnderDest, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function getIE(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeDest');
        return $this->getElementsByTagName(self::IE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TIeDest 
     */
    public function addIE($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TIeDest(self::IE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TIeDest $paramIE 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setIE(\Sped\Schemas\V200\TIeDest $paramIE){
        $this->removeElementsByTagName(self::IE);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF 
     */
    public function getISUF($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF');
        return $this->getElementsByTagName(self::ISUF)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF 
     */
    public function addISUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF(self::ISUF, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF $paramISUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setISUF(\Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF $paramISUF){
        $this->removeElementsByTagName(self::ISUF);
        $this->appendChild($paramISUF, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email 
     */
    public function getEmail($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\Email');
        return $this->getElementsByTagName(self::EMAIL)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email 
     */
    public function addEmail($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email(self::EMAIL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email $paramEmail 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function setEmail(\Sped\Schemas\V200\TNFe\InfNFe\Dest\Email $paramEmail){
        $this->removeElementsByTagName(self::EMAIL);
        $this->appendChild($paramEmail, false);
        return $this;
    }

}