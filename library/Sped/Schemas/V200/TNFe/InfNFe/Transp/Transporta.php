<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Dados do transportador
 * @name Transporta
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Transporta extends \Sped\Components\Xml\Element  {

    const CNPJ = 'CNPJ';

    const CPF = 'CPF';

    const XNOME = 'xNome';

    const IE = 'IE';

    const XENDER = 'xEnder';

    const XMUN = 'xMun';

    const UF = 'UF';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJ(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJ(){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJ 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setCNPJ(\Sped\Schemas\V200\TCnpj $paramCNPJ){
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setCPF(\Sped\Schemas\V200\TCpf $paramCPF){
        $this->removeElementsByTagName(self::CPF);
        $this->appendChild($paramCPF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome 
     * @param int $index 
     */
    public function getXNome(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome');
        return $this->getElementsByTagName(self::XNOME)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome 
     */
    public function addXNome(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome $paramXNome 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setXNome(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome $paramXNome){
        $this->removeElementsByTagName(self::XNOME);
        $this->appendChild($paramXNome, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TIeDest 
     * @param int $index 
     */
    public function getIE(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeDest');
        return $this->getElementsByTagName(self::IE)->item($index);
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setIE(\Sped\Schemas\V200\TIeDest $paramIE){
        $this->removeElementsByTagName(self::IE);
        $this->appendChild($paramIE, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder 
     * @param int $index 
     */
    public function getXEnder(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder');
        return $this->getElementsByTagName(self::XENDER)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder 
     */
    public function addXEnder(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder $paramXEnder 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setXEnder(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder $paramXEnder){
        $this->removeElementsByTagName(self::XENDER);
        $this->appendChild($paramXEnder, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun 
     * @param int $index 
     */
    public function getXMun(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun');
        return $this->getElementsByTagName(self::XMUN)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun 
     */
    public function addXMun(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun $paramXMun 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setXMun(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun $paramXMun){
        $this->removeElementsByTagName(self::XMUN);
        $this->appendChild($paramXMun, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     * @param int $index 
     */
    public function getUF(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF){
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

}