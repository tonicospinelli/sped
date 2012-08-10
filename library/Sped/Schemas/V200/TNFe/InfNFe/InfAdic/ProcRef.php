<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic;

/**
 * Grupo de informações do  processo referenciado
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ProcRef
 * @package Sped
 */
class ProcRef extends \Sped\Components\Xml\Element 
{

    const NPROC = 'nProc';

    const INDPROC = 'indProc';

    /**
     * Retorna Indentificador do processo ou ato<br />
     * concessório
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc 
     */
    public function getNProc()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc');
        return $this->getElementsByTagName(self::NPROC)->item(0);
    }

    /**
     * Adiciona Indentificador do processo ou ato<br />
     * concessório
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc 
     */
    public function addNProc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc(self::NPROC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Indentificador do processo ou ato<br />
     * concessório
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc $paramNProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function setNProc(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\NProc $paramNProc)
    {
        $this->removeElementsByTagName(self::NPROC);
        $this->appendChild($paramNProc, false);
        return $this;
    }

    /**
     * Retorna Origem do processo, informar com:<br />
     * 0 - SEFAZ;<br />
     * 1 - Justiça Federal;<br />
     * 2 - Justiça Estadual;<br />
     * 3 - Secex/RFB;<br />
     * 9 - Outros
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc 
     */
    public function getIndProc()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc');
        return $this->getElementsByTagName(self::INDPROC)->item(0);
    }

    /**
     * Adiciona Origem do processo, informar com:<br />
     * 0 - SEFAZ;<br />
     * 1 - Justiça Federal;<br />
     * 2 - Justiça Estadual;<br />
     * 3 - Secex/RFB;<br />
     * 9 - Outros
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc 
     */
    public function addIndProc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc(self::INDPROC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Origem do processo, informar com:<br />
     * 0 - SEFAZ;<br />
     * 1 - Justiça Federal;<br />
     * 2 - Justiça Estadual;<br />
     * 3 - Secex/RFB;<br />
     * 9 - Outros
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc $paramIndProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef 
     */
    public function setIndProc(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef\IndProc $paramIndProc)
    {
        $this->removeElementsByTagName(self::INDPROC);
        $this->appendChild($paramIndProc, false);
        return $this;
    }

}