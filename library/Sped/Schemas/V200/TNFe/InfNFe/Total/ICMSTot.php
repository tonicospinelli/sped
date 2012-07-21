<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Total;

/**
 * Totais referentes ao ICMS
 * @name ICMSTot
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ICMSTot extends \Sped\Components\Xml\Element  {

    const VBC = 'vBC';

    const VICMS = 'vICMS';

    const VBCST = 'vBCST';

    const VST = 'vST';

    const VPROD = 'vProd';

    const VFRETE = 'vFrete';

    const VSEG = 'vSeg';

    const VDESC = 'vDesc';

    const VII = 'vII';

    const VIPI = 'vIPI';

    const VPIS = 'vPIS';

    const VCOFINS = 'vCOFINS';

    const VOUTRO = 'vOutro';

    const VNF = 'vNF';

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVBC($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVICMS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS){
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVBCST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST){
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVST($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VST, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVST(\Sped\Schemas\V200\TDec_1302 $paramVST){
        $this->removeElementsByTagName(self::VST);
        $this->appendChild($paramVST, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVProd($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPROD, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVProd(\Sped\Schemas\V200\TDec_1302 $paramVProd){
        $this->removeElementsByTagName(self::VPROD);
        $this->appendChild($paramVProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVFrete(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VFRETE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVFrete($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VFRETE, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVFrete 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVFrete(\Sped\Schemas\V200\TDec_1302 $paramVFrete){
        $this->removeElementsByTagName(self::VFRETE);
        $this->appendChild($paramVFrete, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVSeg(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VSEG)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVSeg($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VSEG, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVSeg 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVSeg(\Sped\Schemas\V200\TDec_1302 $paramVSeg){
        $this->removeElementsByTagName(self::VSEG);
        $this->appendChild($paramVSeg, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDesc(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDESC)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVDesc($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDESC, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302 $paramVDesc){
        $this->removeElementsByTagName(self::VDESC);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVII(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VII)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVII($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VII, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVII 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVII(\Sped\Schemas\V200\TDec_1302 $paramVII){
        $this->removeElementsByTagName(self::VII);
        $this->appendChild($paramVII, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVIPI(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VIPI)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVIPI($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VIPI, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVIPI(\Sped\Schemas\V200\TDec_1302 $paramVIPI){
        $this->removeElementsByTagName(self::VIPI);
        $this->appendChild($paramVIPI, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVPIS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPIS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVPIS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPIS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302 $paramVPIS){
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVCOFINS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VCOFINS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVCOFINS($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VCOFINS, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302 $paramVCOFINS){
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVOutro(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VOUTRO)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVOutro($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VOUTRO, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVOutro 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVOutro(\Sped\Schemas\V200\TDec_1302 $paramVOutro){
        $this->removeElementsByTagName(self::VOUTRO);
        $this->appendChild($paramVOutro, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVNF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VNF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     * @param type $value 
     */
    public function addVNF($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VNF, $value), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total\ICMSTot 
     */
    public function setVNF(\Sped\Schemas\V200\TDec_1302 $paramVNF){
        $this->removeElementsByTagName(self::VNF);
        $this->appendChild($paramVNF, false);
        return $this;
    }

}