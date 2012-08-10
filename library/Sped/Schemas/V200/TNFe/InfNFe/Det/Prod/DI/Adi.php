<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI;

/**
 * Adições (NT 2011/004)
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Adi
 * @package Sped
 */
class Adi extends \Sped\Components\Xml\Element 
{

    const NADICAO = 'nAdicao';

    const NSEQADIC = 'nSeqAdic';

    const CFABRICANTE = 'cFabricante';

    const VDESCDI = 'vDescDI';

    /**
     * Retorna Número da Adição
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao 
     */
    public function getNAdicao()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao');
        return $this->getElementsByTagName(self::NADICAO)->item(0);
    }

    /**
     * Adiciona Número da Adição
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao 
     */
    public function addNAdicao($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao(self::NADICAO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número da Adição
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao $paramNAdicao 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setNAdicao(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NAdicao $paramNAdicao)
    {
        $this->removeElementsByTagName(self::NADICAO);
        $this->appendChild($paramNAdicao, false);
        return $this;
    }

    /**
     * Retorna Número seqüencial do item dentro da Adição
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic 
     */
    public function getNSeqAdic()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic');
        return $this->getElementsByTagName(self::NSEQADIC)->item(0);
    }

    /**
     * Adiciona Número seqüencial do item dentro da Adição
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic 
     */
    public function addNSeqAdic($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic(self::NSEQADIC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número seqüencial do item dentro da Adição
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic $paramNSeqAdic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setNSeqAdic(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\NSeqAdic $paramNSeqAdic)
    {
        $this->removeElementsByTagName(self::NSEQADIC);
        $this->appendChild($paramNSeqAdic, false);
        return $this;
    }

    /**
     * Retorna Código do fabricante estrangeiro (usado nos sistemas internos de informação do emitente da NF-e)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante 
     */
    public function getCFabricante()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante');
        return $this->getElementsByTagName(self::CFABRICANTE)->item(0);
    }

    /**
     * Adiciona Código do fabricante estrangeiro (usado nos sistemas internos de informação do emitente da NF-e)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante 
     */
    public function addCFabricante($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante(self::CFABRICANTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do fabricante estrangeiro (usado nos sistemas internos de informação do emitente da NF-e)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante $paramCFabricante 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setCFabricante(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi\CFabricante $paramCFabricante)
    {
        $this->removeElementsByTagName(self::CFABRICANTE);
        $this->appendChild($paramCFabricante, false);
        return $this;
    }

    /**
     * Retorna Valor do desconto do item da DI – adição
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVDescDI()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESCDI)->item(0);
    }

    /**
     * Adiciona Valor do desconto do item da DI – adição
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDescDI($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDESCDI, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor do desconto do item da DI – adição
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDescDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI\Adi 
     */
    public function setVDescDI(\Sped\Schemas\V200\TDec_1302Opc $paramVDescDI)
    {
        $this->removeElementsByTagName(self::VDESCDI);
        $this->appendChild($paramVDescDI, false);
        return $this;
    }

}