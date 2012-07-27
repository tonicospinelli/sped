<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do Imposto de Importação
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name II
 * @package Sped
 */
class II extends \Sped\Components\Xml\Element 
{

    const VBC = 'vBC';

    const VDESPADU = 'vDespAdu';

    const VII = 'vII';

    const VIOF = 'vIOF';

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVDespAdu()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VDESPADU)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVDespAdu($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VDESPADU, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVDespAdu 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function setVDespAdu(\Sped\Schemas\V200\TDec_1302 $paramVDespAdu)
    {
        $this->removeElementsByTagName(self::VDESPADU);
        $this->appendChild($paramVDespAdu, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVII()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VII)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVII($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VII, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVII 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function setVII(\Sped\Schemas\V200\TDec_1302 $paramVII)
    {
        $this->removeElementsByTagName(self::VII);
        $this->appendChild($paramVII, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVIOF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VIOF)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVIOF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VIOF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVIOF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\II 
     */
    public function setVIOF(\Sped\Schemas\V200\TDec_1302 $paramVIOF)
    {
        $this->removeElementsByTagName(self::VIOF);
        $this->appendChild($paramVIOF, false);
        return $this;
    }

}