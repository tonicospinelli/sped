<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Identificação do Destinatário  
 * @name Dest
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
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
     * @return \Sped\Schemas\V200\TCnpjOpc 
     * @param type $value 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpjOpc(self::CNPJ, $value), true);
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
     * @return \Sped\Schemas\V200\TCpf 
     * @param type $value 
     */
    public function addCPF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value), true);
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome 
     * @param type $value 
     */
    public function addXNome($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome(self::XNOME, $value), true);
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
     * @return \Sped\Schemas\V200\TEndereco 
     * @param type $value 
     */
    public function addEnderDest($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco(self::ENDERDEST, $value), true);
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
     * @return \Sped\Schemas\V200\TIeDest 
     * @param type $value 
     */
    public function addIE($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TIeDest(self::IE, $value), true);
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF 
     * @param type $index 
     */
    public function getISUF($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF');
        return $this->getElementsByTagName(self::ISUF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF 
     * @param type $value 
     */
    public function addISUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF(self::ISUF, $value), true);
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email 
     * @param type $index 
     */
    public function getEmail($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\Email');
        return $this->getElementsByTagName(self::EMAIL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email 
     * @param type $value 
     */
    public function addEmail($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email(self::EMAIL, $value), true);
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