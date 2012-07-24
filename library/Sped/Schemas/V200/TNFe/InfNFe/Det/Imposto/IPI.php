<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do IPI
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name IPI
 * @package Sped
 */
class IPI extends \Sped\Components\Xml\Element  {

    const CLENQ = 'clEnq';

    const CNPJPROD = 'CNPJProd';

    const CSELO = 'cSelo';

    const QSELO = 'qSelo';

    const CENQ = 'cEnq';

    const IPITRIB = 'IPITrib';

    const IPINT = 'IPINT';

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq 
     */
    public function getClEnq($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq');
        return $this->getElementsByTagName(self::CLENQ)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq 
     */
    public function addClEnq($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq(self::CLENQ, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq $paramClEnq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setClEnq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq $paramClEnq){
        $this->removeElementsByTagName(self::CLENQ);
        $this->appendChild($paramClEnq, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJProd($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJPROD)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCNPJProd(\Sped\Schemas\V200\TCnpj $paramCNPJProd){
        $this->removeElementsByTagName(self::CNPJPROD);
        $this->appendChild($paramCNPJProd, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo 
     */
    public function getCSelo($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo');
        return $this->getElementsByTagName(self::CSELO)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo 
     */
    public function addCSelo($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo(self::CSELO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo $paramCSelo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCSelo(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo $paramCSelo){
        $this->removeElementsByTagName(self::CSELO);
        $this->appendChild($paramCSelo, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo 
     */
    public function getQSelo($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo');
        return $this->getElementsByTagName(self::QSELO)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo 
     */
    public function addQSelo($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo(self::QSELO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo $paramQSelo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setQSelo(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo $paramQSelo){
        $this->removeElementsByTagName(self::QSELO);
        $this->appendChild($paramQSelo, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq 
     */
    public function getCEnq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq');
        return $this->getElementsByTagName(self::CENQ)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq 
     */
    public function addCEnq($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq(self::CENQ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq $paramCEnq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCEnq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq $paramCEnq){
        $this->removeElementsByTagName(self::CENQ);
        $this->appendChild($paramCEnq, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function getIPITrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib');
        return $this->getElementsByTagName(self::IPITRIB)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function addIPITrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib(self::IPITRIB, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib $paramIPITrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setIPITrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib $paramIPITrib){
        $this->removeElementsByTagName(self::IPITRIB);
        $this->appendChild($paramIPITrib, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function getIPINT(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT');
        return $this->getElementsByTagName(self::IPINT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function addIPINT(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT(self::IPINT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT $paramIPINT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setIPINT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT $paramIPINT){
        $this->removeElementsByTagName(self::IPINT);
        $this->appendChild($paramIPINT, false);
        return $this;
    }

}