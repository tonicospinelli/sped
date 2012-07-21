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
     * @param type $value 
     */
    public function addCNPJ($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJ, $value), true);
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
     * @param type $value 
     */
    public function addCPF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCpf(self::CPF, $value), true);
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
     * @param type $index 
     */
    public function getXNome($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome');
        return $this->getElementsByTagName(self::XNOME)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome 
     * @param type $value 
     */
    public function addXNome($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XNome(self::XNOME, $value), true);
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
     * @param type $index 
     */
    public function getIE($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TIeDest');
        return $this->getElementsByTagName(self::IE)->item($index);
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
     * @param type $index 
     */
    public function getXEnder($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder');
        return $this->getElementsByTagName(self::XENDER)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder 
     * @param type $value 
     */
    public function addXEnder($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XEnder(self::XENDER, $value), true);
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
     * @param type $index 
     */
    public function getXMun($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun');
        return $this->getElementsByTagName(self::XMUN)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun 
     * @param type $value 
     */
    public function addXMun($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Transporta\XMun(self::XMUN, $value), true);
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
     * @param type $index 
     */
    public function getUF($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TUf 
     * @param type $value 
     */
    public function addUF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UF, $value), true);
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