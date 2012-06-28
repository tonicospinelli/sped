<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do IPI

 * @name IPI
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class IPI extends \Sped\Components\Xml\Element  {
    const NAME = 'IPI';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq 
     * @param int $index 
     */
    public function getClEnq(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq 
     */
    public function addClEnq(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq $paramClEnq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setClEnq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq $paramClEnq){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq::NAME);
        $this->appendChild($paramClEnq, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TCnpj 
     * @param int $index 
     */
    public function getCNPJProd(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TCnpj::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TCnpj $paramCNPJProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCNPJProd(\Sped\Schemas\V200\TCnpj $paramCNPJProd){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TCnpj::NAME);
        $this->appendChild($paramCNPJProd, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo 
     * @param int $index 
     */
    public function getCSelo(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo 
     */
    public function addCSelo(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo $paramCSelo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCSelo(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo $paramCSelo){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo::NAME);
        $this->appendChild($paramCSelo, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo 
     * @param int $index 
     */
    public function getQSelo(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo 
     */
    public function addQSelo(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo $paramQSelo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setQSelo(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo $paramQSelo){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo::NAME);
        $this->appendChild($paramQSelo, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq 
     */
    public function getCEnq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq 
     */
    public function addCEnq(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq $paramCEnq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCEnq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq $paramCEnq){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq::NAME);
        $this->appendChild($paramCEnq, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function getIPITrib(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function addIPITrib(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib $paramIPITrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setIPITrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib $paramIPITrib){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib::NAME);
        $this->appendChild($paramIPITrib, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function getIPINT(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function addIPINT(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT $paramIPINT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setIPINT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT $paramIPINT){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT::NAME);
        $this->appendChild($paramIPINT, false);
        return $this;
    }

}