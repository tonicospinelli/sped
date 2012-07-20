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

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

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
     */
    public function addCNPJ(){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpjOpc(), true);
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
     */
    public function addCPF(){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(), true);
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
     */
    public function addXNome(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\XNome(), true);
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
     */
    public function addEnderDest(){
        return $this->appendChild(new \Sped\Schemas\V200\TEndereco(), true);
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
     */
    public function addIE(){
        return $this->appendChild(new \Sped\Schemas\V200\TIeDest(), true);
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
     * @param int $index 
     */
    public function getISUF(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF');
        return $this->getElementsByTagName(self::ISUF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF 
     */
    public function addISUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\ISUF(), true);
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
     * @param int $index 
     */
    public function getEmail(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest\Email');
        return $this->getElementsByTagName(self::EMAIL)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email 
     */
    public function addEmail(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest\Email(), true);
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