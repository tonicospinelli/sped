<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref;

/**
 * Grupo do Cupom Fiscal vinculado à NF-e (v2.0).
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name RefECF
 * @package Sped
 */
class RefECF extends \Sped\Components\Xml\Element 
{

    const MOD = 'mod';

    const NECF = 'nECF';

    const NCOO = 'nCOO';

    /**
     * Retorna Código do modelo do Documento Fiscal <br />
     * Preencher com "2B", quando se tratar de Cupom Fiscal emitido por máquina registradora (não ECF), com "2C", quando se tratar de Cupom Fiscal PDV, ou "2D", quando se tratar de Cupom Fiscal (emitido por ECF) (v2.0).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod 
     */
    public function getMod()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * Adiciona Código do modelo do Documento Fiscal <br />
     * Preencher com "2B", quando se tratar de Cupom Fiscal emitido por máquina registradora (não ECF), com "2C", quando se tratar de Cupom Fiscal PDV, ou "2D", quando se tratar de Cupom Fiscal (emitido por ECF) (v2.0).
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod 
     */
    public function addMod($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod(self::MOD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do modelo do Documento Fiscal <br />
     * Preencher com "2B", quando se tratar de Cupom Fiscal emitido por máquina registradora (não ECF), com "2C", quando se tratar de Cupom Fiscal PDV, ou "2D", quando se tratar de Cupom Fiscal (emitido por ECF) (v2.0).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function setMod(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\Mod $paramMod)
    {
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * Retorna Informar o número de ordem seqüencial do ECF que emitiu o Cupom Fiscal vinculado à NF-e (v2.0).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF 
     */
    public function getNECF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF');
        return $this->getElementsByTagName(self::NECF)->item(0);
    }

    /**
     * Adiciona Informar o número de ordem seqüencial do ECF que emitiu o Cupom Fiscal vinculado à NF-e (v2.0).
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF 
     */
    public function addNECF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF(self::NECF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar o número de ordem seqüencial do ECF que emitiu o Cupom Fiscal vinculado à NF-e (v2.0).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF $paramNECF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function setNECF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NECF $paramNECF)
    {
        $this->removeElementsByTagName(self::NECF);
        $this->appendChild($paramNECF, false);
        return $this;
    }

    /**
     * Retorna Informar o Número do Contador de Ordem de Operação - COO vinculado à NF-e (v2.0).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO 
     */
    public function getNCOO()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO');
        return $this->getElementsByTagName(self::NCOO)->item(0);
    }

    /**
     * Adiciona Informar o Número do Contador de Ordem de Operação - COO vinculado à NF-e (v2.0).
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO 
     */
    public function addNCOO($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO(self::NCOO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar o Número do Contador de Ordem de Operação - COO vinculado à NF-e (v2.0).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO $paramNCOO 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function setNCOO(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF\NCOO $paramNCOO)
    {
        $this->removeElementsByTagName(self::NCOO);
        $this->appendChild($paramNCOO, false);
        return $this;
    }

}