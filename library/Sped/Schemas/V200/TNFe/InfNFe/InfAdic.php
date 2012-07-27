<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * Informações adicionais da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name InfAdic
 * @package Sped
 */
class InfAdic extends \Sped\Components\Xml\Element 
{

    const INFADFISCO = 'infAdFisco';

    const INFCPL = 'infCpl';

    const OBSCONT = 'obsCont';

    const OBSFISCO = 'obsFisco';

    const PROCREF = 'procRef';

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco 
     */
    public function getInfAdFisco($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco');
        return $this->getElementsByTagName(self::INFADFISCO)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco 
     */
    public function addInfAdFisco($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco(self::INFADFISCO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco $paramInfAdFisco 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setInfAdFisco(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco $paramInfAdFisco)
    {
        $this->removeElementsByTagName(self::INFADFISCO);
        $this->appendChild($paramInfAdFisco, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl 
     */
    public function getInfCpl($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl');
        return $this->getElementsByTagName(self::INFCPL)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl 
     */
    public function addInfCpl($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl(self::INFCPL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl $paramInfCpl 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setInfCpl(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl $paramInfCpl)
    {
        $this->removeElementsByTagName(self::INFCPL);
        $this->appendChild($paramInfCpl, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont 
     */
    public function getObsCont($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont');
        return $this->getElementsByTagName(self::OBSCONT)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont 
     */
    public function addObsCont()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont(self::OBSCONT, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont $paramObsCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setObsCont(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont $paramObsCont)
    {
        $this->removeElementsByTagName(self::OBSCONT);
        $this->appendChild($paramObsCont, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function getObsFisco($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco');
        return $this->getElementsByTagName(self::OBSFISCO)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function addObsFisco()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco(self::OBSFISCO, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco $paramObsFisco 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setObsFisco(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco $paramObsFisco)
    {
        $this->removeElementsByTagName(self::OBSFISCO);
        $this->appendChild($paramObsFisco, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function getProcRef($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef');
        return $this->getElementsByTagName(self::PROCREF)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function addProcRef()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef(self::PROCREF, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef $paramProcRef 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function setProcRef(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef $paramProcRef)
    {
        $this->removeElementsByTagName(self::PROCREF);
        $this->appendChild($paramProcRef, false);
        return $this;
    }

}