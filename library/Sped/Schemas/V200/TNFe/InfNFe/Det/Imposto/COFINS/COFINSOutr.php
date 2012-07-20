<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS;

/**
 * Código de Situação Tributária do COFINS:<br />
 * 49 - Outras Operações de Saída<br />
 * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
 * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno<br />
 * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação<br />
 * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
 * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
 * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
 * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
 * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
 * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno<br />
 * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação<br />
 * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
 * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
 * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
 * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
 * 67 - Crédito Presumido - Outras Operações<br />
 * 70 - Operação de Aquisição sem Direito a Crédito<br />
 * 71 - Operação de Aquisição com Isenção<br />
 * 72 - Operação de Aquisição com Suspensão<br />
 * 73 - Operação de Aquisição a Alíquota Zero<br />
 * 74 - Operação de Aquisição sem Incidência da Contribuição<br />
 * 75 - Operação de Aquisição por Substituição Tributária<br />
 * 98 - Outras Operações de Entrada<br />
 * 99 - Outras Operações.
 * @name COFINSOutr
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class COFINSOutr extends \Sped\Components\Xml\Element  {

    const CST = 'CST';

    const VBC = 'vBC';

    const PCOFINS = 'pCOFINS';

    const QBCPROD = 'qBCProd';

    const VALIQPROD = 'vAliqProd';

    const VCOFINS = 'vCOFINS';

    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST 
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr\CST $paramCST){
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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
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
    public function getPCOFINS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PCOFINS)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_0302 $paramPCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function setPCOFINS(\Sped\Schemas\V200\TDec_0302 $paramPCOFINS){
        $this->removeElementsByTagName(self::PCOFINS);
        $this->appendChild($paramPCOFINS, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function getQBCProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1204');
        return $this->getElementsByTagName(self::QBCPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1204 
     */
    public function addQBCProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1204(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1204 $paramQBCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function setQBCProd(\Sped\Schemas\V200\TDec_1204 $paramQBCProd){
        $this->removeElementsByTagName(self::QBCPROD);
        $this->appendChild($paramQBCProd, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getVAliqProd(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::VALIQPROD)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function addVAliqProd(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1104v $paramVAliqProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function setVAliqProd(\Sped\Schemas\V200\TDec_1104v $paramVAliqProd){
        $this->removeElementsByTagName(self::VALIQPROD);
        $this->appendChild($paramVAliqProd, false);
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
     */
    public function addVCOFINS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1302 $paramVCOFINS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function setVCOFINS(\Sped\Schemas\V200\TDec_1302 $paramVCOFINS){
        $this->removeElementsByTagName(self::VCOFINS);
        $this->appendChild($paramVCOFINS, false);
        return $this;
    }

}