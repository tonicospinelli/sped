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
     * Retorna Informações adicionais de interesse do Fisco (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco 
     */
    public function getInfAdFisco()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco');
        return $this->getElementsByTagName(self::INFADFISCO)->item(0);
    }

    /**
     * Adiciona Informações adicionais de interesse do Fisco (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco 
     */
    public function addInfAdFisco($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfAdFisco(self::INFADFISCO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Informações adicionais de interesse do Fisco (v2.0)
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
     * Retorna Informações complementares de interesse do Contribuinte
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl 
     */
    public function getInfCpl()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl');
        return $this->getElementsByTagName(self::INFCPL)->item(0);
    }

    /**
     * Adiciona Informações complementares de interesse do Contribuinte
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl 
     */
    public function addInfCpl($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\InfCpl(self::INFCPL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Informações complementares de interesse do Contribuinte
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
     * Retorna Campo de uso livre do contribuinte<br />
     * informar o nome do campo no atributo xCampo<br />
     * e o conteúdo do campo no xTexto
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont 
     */
    public function getObsCont()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont');
        return $this->getElementsByTagName(self::OBSCONT)->item(0);
    }

    /**
     * Adiciona Campo de uso livre do contribuinte<br />
     * informar o nome do campo no atributo xCampo<br />
     * e o conteúdo do campo no xTexto
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont 
     */
    public function addObsCont()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsCont(self::OBSCONT, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Campo de uso livre do contribuinte<br />
     * informar o nome do campo no atributo xCampo<br />
     * e o conteúdo do campo no xTexto
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
     * Retorna Campo de uso exclusivo do Fisco<br />
     * informar o nome do campo no atributo xCampo<br />
     * e o conteúdo do campo no xTexto
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function getObsFisco()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco');
        return $this->getElementsByTagName(self::OBSFISCO)->item(0);
    }

    /**
     * Adiciona Campo de uso exclusivo do Fisco<br />
     * informar o nome do campo no atributo xCampo<br />
     * e o conteúdo do campo no xTexto
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco 
     */
    public function addObsFisco()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ObsFisco(self::OBSFISCO, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Campo de uso exclusivo do Fisco<br />
     * informar o nome do campo no atributo xCampo<br />
     * e o conteúdo do campo no xTexto
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
     * Retorna Grupo de informações do  processo referenciado
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function getProcRef()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef');
        return $this->getElementsByTagName(self::PROCREF)->item(0);
    }

    /**
     * Adiciona Grupo de informações do  processo referenciado
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function addProcRef()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef(self::PROCREF, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Grupo de informações do  processo referenciado
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