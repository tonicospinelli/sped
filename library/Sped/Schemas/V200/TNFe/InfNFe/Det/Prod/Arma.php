<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Armamentos
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Arma
 * @package Sped
 */
class Arma extends \Sped\Components\Xml\Element 
{

    const TPARMA = 'tpArma';

    const NSERIE = 'nSerie';

    const NCANO = 'nCano';

    const DESCR = 'descr';

    /**
     * Retorna Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\TpArma 
     */
    public function getTpArma()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\TpArma');
        return $this->getElementsByTagName(self::TPARMA)->item(0);
    }

    /**
     * Adiciona Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito)
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\TpArma 
     */
    public function addTpArma($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\TpArma(self::TPARMA, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\TpArma $paramTpArma 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function setTpArma(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\TpArma $paramTpArma)
    {
        $this->removeElementsByTagName(self::TPARMA);
        $this->appendChild($paramTpArma, false);
        return $this;
    }

    /**
     * Retorna Número de série da arma
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NSerie 
     */
    public function getNSerie()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NSerie');
        return $this->getElementsByTagName(self::NSERIE)->item(0);
    }

    /**
     * Adiciona Número de série da arma
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NSerie 
     */
    public function addNSerie($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NSerie(self::NSERIE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número de série da arma
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NSerie $paramNSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function setNSerie(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NSerie $paramNSerie)
    {
        $this->removeElementsByTagName(self::NSERIE);
        $this->appendChild($paramNSerie, false);
        return $this;
    }

    /**
     * Retorna Número de série do cano
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NCano 
     */
    public function getNCano()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NCano');
        return $this->getElementsByTagName(self::NCANO)->item(0);
    }

    /**
     * Adiciona Número de série do cano
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NCano 
     */
    public function addNCano($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NCano(self::NCANO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número de série do cano
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NCano $paramNCano 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function setNCano(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\NCano $paramNCano)
    {
        $this->removeElementsByTagName(self::NCANO);
        $this->appendChild($paramNCano, false);
        return $this;
    }

    /**
     * Retorna Descrição completa da arma, compreendendo: calibre, marca, capacidade, tipo de funcionamento, comprimento e demais elementos que permitam a sua perfeita identificação.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\Descr 
     */
    public function getDescr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\Descr');
        return $this->getElementsByTagName(self::DESCR)->item(0);
    }

    /**
     * Adiciona Descrição completa da arma, compreendendo: calibre, marca, capacidade, tipo de funcionamento, comprimento e demais elementos que permitam a sua perfeita identificação.
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\Descr 
     */
    public function addDescr($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\Descr(self::DESCR, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Descrição completa da arma, compreendendo: calibre, marca, capacidade, tipo de funcionamento, comprimento e demais elementos que permitam a sua perfeita identificação.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\Descr $paramDescr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function setDescr(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma\Descr $paramDescr)
    {
        $this->removeElementsByTagName(self::DESCR);
        $this->appendChild($paramDescr, false);
        return $this;
    }

}