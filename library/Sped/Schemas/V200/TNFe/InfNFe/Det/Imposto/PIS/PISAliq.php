<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS;

/**
 * Código de Situação Tributária do PIS.<br />
 * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
 * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
 * @name PISAliq
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class PISAliq extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    const VBC = 'vBC';

    const PPIS = 'pPIS';

    const VPIS = 'vPIS';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST 
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq\CST $paramCST){
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

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
     */
    public function addVBC(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC){
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPPIS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PPIS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setPPIS(\Sped\Schemas\V200\TDec_0302 $paramPPIS){
        $this->removeElementsByTagName(self::PPIS);
        $this->appendChild($paramPPIS, false);
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
     */
    public function addVPIS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVPIS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function setVPIS(\Sped\Schemas\V200\TDec_1302 $paramVPIS){
        $this->removeElementsByTagName(self::VPIS);
        $this->appendChild($paramVPIS, false);
        return $this;
    }

}