<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det;

/**
 * Dados dos produtos e serviços da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Prod
 * @package Sped
 */
class Prod extends \Sped\Components\Xml\Element 
{

    const CPROD = 'cProd';

    const CEAN = 'cEAN';

    const XPROD = 'xProd';

    const NCM = 'NCM';

    const EXTIPI = 'EXTIPI';

    const CFOP = 'CFOP';

    const UCOM = 'uCom';

    const QCOM = 'qCom';

    const VUNCOM = 'vUnCom';

    const VPROD = 'vProd';

    const CEANTRIB = 'cEANTrib';

    const UTRIB = 'uTrib';

    const QTRIB = 'qTrib';

    const VUNTRIB = 'vUnTrib';

    const VFRETE = 'vFrete';

    const VSEG = 'vSeg';

    const VDESC = 'vDesc';

    const VOUTRO = 'vOutro';

    const INDTOT = 'indTot';

    const DI = 'DI';

    const XPED = 'xPed';

    const NITEMPED = 'nItemPed';

    const VEICPROD = 'veicProd';

    const MED = 'med';

    const ARMA = 'arma';

    const COMB = 'comb';

    /**
     * Retorna Código do produto ou serviço. Preencher com CFOP caso se trate de itens não relacionados com mercadorias/produto e que o contribuinte não possua codificação própria<br />
     * Formato ”CFOP9999”.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd 
     */
    public function getCProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd');
        return $this->getElementsByTagName(self::CPROD)->item(0);
    }

    /**
     * Adiciona Código do produto ou serviço. Preencher com CFOP caso se trate de itens não relacionados com mercadorias/produto e que o contribuinte não possua codificação própria<br />
     * Formato ”CFOP9999”.
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd 
     */
    public function addCProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd(self::CPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do produto ou serviço. Preencher com CFOP caso se trate de itens não relacionados com mercadorias/produto e que o contribuinte não possua codificação própria<br />
     * Formato ”CFOP9999”.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd $paramCProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CProd $paramCProd)
    {
        $this->removeElementsByTagName(self::CPROD);
        $this->appendChild($paramCProd, false);
        return $this;
    }

    /**
     * Retorna GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN 
     */
    public function getCEAN()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN');
        return $this->getElementsByTagName(self::CEAN)->item(0);
    }

    /**
     * Adiciona GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN 
     */
    public function addCEAN($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN(self::CEAN, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN $paramCEAN 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCEAN(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEAN $paramCEAN)
    {
        $this->removeElementsByTagName(self::CEAN);
        $this->appendChild($paramCEAN, false);
        return $this;
    }

    /**
     * Retorna Descrição do produto ou serviço
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd 
     */
    public function getXProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd');
        return $this->getElementsByTagName(self::XPROD)->item(0);
    }

    /**
     * Adiciona Descrição do produto ou serviço
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd 
     */
    public function addXProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd(self::XPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Descrição do produto ou serviço
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd $paramXProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setXProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XProd $paramXProd)
    {
        $this->removeElementsByTagName(self::XPROD);
        $this->appendChild($paramXProd, false);
        return $this;
    }

    /**
     * Retorna Código NCM (8 posições), será permitida a informação do gênero (posição do capítulo do NCM) quando a operação não for de comércio exterior (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso de item de serviço ou item que não tenham produto (Ex. transferência de crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros) (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM 
     */
    public function getNCM()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM');
        return $this->getElementsByTagName(self::NCM)->item(0);
    }

    /**
     * Adiciona Código NCM (8 posições), será permitida a informação do gênero (posição do capítulo do NCM) quando a operação não for de comércio exterior (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso de item de serviço ou item que não tenham produto (Ex. transferência de crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros) (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM 
     */
    public function addNCM($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM(self::NCM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código NCM (8 posições), será permitida a informação do gênero (posição do capítulo do NCM) quando a operação não for de comércio exterior (importação/exportação) ou o produto não seja tributado pelo IPI. Em caso de item de serviço ou item que não tenham produto (Ex. transferência de crédito, crédito do ativo imobilizado, etc.), informar o código 00 (zeros) (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM $paramNCM 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setNCM(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NCM $paramNCM)
    {
        $this->removeElementsByTagName(self::NCM);
        $this->appendChild($paramNCM, false);
        return $this;
    }

    /**
     * Retorna Código EX TIPI (3 posições)
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI 
     */
    public function getEXTIPI($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI');
        return $this->getElementsByTagName(self::EXTIPI)->item($index);
    }

    /**
     * Adiciona Código EX TIPI (3 posições)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI 
     */
    public function addEXTIPI($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI(self::EXTIPI, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Código EX TIPI (3 posições)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI $paramEXTIPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setEXTIPI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\EXTIPI $paramEXTIPI)
    {
        $this->removeElementsByTagName(self::EXTIPI);
        $this->appendChild($paramEXTIPI, false);
        return $this;
    }

    /**
     * Retorna Código Fiscal de Operações e Prestações
     * @return \Sped\Schemas\V200\TCfop 
     */
    public function getCFOP()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCfop');
        return $this->getElementsByTagName(self::CFOP)->item(0);
    }

    /**
     * Adiciona Código Fiscal de Operações e Prestações
     * @param string $value 
     * @return \Sped\Schemas\V200\TCfop 
     */
    public function addCFOP($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCfop(self::CFOP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código Fiscal de Operações e Prestações
     * @param \Sped\Schemas\V200\TCfop $paramCFOP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCFOP(\Sped\Schemas\V200\TCfop $paramCFOP)
    {
        $this->removeElementsByTagName(self::CFOP);
        $this->appendChild($paramCFOP, false);
        return $this;
    }

    /**
     * Retorna Unidade comercial
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom 
     */
    public function getUCom()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom');
        return $this->getElementsByTagName(self::UCOM)->item(0);
    }

    /**
     * Adiciona Unidade comercial
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom 
     */
    public function addUCom($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom(self::UCOM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Unidade comercial
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom $paramUCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setUCom(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UCom $paramUCom)
    {
        $this->removeElementsByTagName(self::UCOM);
        $this->appendChild($paramUCom, false);
        return $this;
    }

    /**
     * Retorna Quantidade Comercial  do produto, alterado para aceitar de 0 a 4 casas decimais e 11 inteiros. (v2.0)
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getQCom()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::QCOM)->item(0);
    }

    /**
     * Adiciona Quantidade Comercial  do produto, alterado para aceitar de 0 a 4 casas decimais e 11 inteiros. (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function addQCom($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::QCOM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade Comercial  do produto, alterado para aceitar de 0 a 4 casas decimais e 11 inteiros. (v2.0)
     * @param \Sped\Schemas\V200\TDec_1104v $paramQCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setQCom(\Sped\Schemas\V200\TDec_1104v $paramQCom)
    {
        $this->removeElementsByTagName(self::QCOM);
        $this->appendChild($paramQCom, false);
        return $this;
    }

    /**
     * Retorna Valor unitário de comercialização  - alterado para aceitar 0 a 10 casas decimais e 11 inteiros (v2.0)
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getVUnCom()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(self::VUNCOM)->item(0);
    }

    /**
     * Adiciona Valor unitário de comercialização  - alterado para aceitar 0 a 10 casas decimais e 11 inteiros (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addVUnCom($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(self::VUNCOM, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor unitário de comercialização  - alterado para aceitar 0 a 10 casas decimais e 11 inteiros (v2.0)
     * @param \Sped\Schemas\V200\TDec_1110 $paramVUnCom 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVUnCom(\Sped\Schemas\V200\TDec_1110 $paramVUnCom)
    {
        $this->removeElementsByTagName(self::VUNCOM);
        $this->appendChild($paramVUnCom, false);
        return $this;
    }

    /**
     * Retorna Valor bruto do produto ou serviço.
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VPROD)->item(0);
    }

    /**
     * Adiciona Valor bruto do produto ou serviço.
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor bruto do produto ou serviço.
     * @param \Sped\Schemas\V200\TDec_1302 $paramVProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVProd(\Sped\Schemas\V200\TDec_1302 $paramVProd)
    {
        $this->removeElementsByTagName(self::VPROD);
        $this->appendChild($paramVProd, false);
        return $this;
    }

    /**
     * Retorna GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib 
     */
    public function getCEANTrib()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib');
        return $this->getElementsByTagName(self::CEANTRIB)->item(0);
    }

    /**
     * Adiciona GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib 
     */
    public function addCEANTrib($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib(self::CEANTRIB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib $paramCEANTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setCEANTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\CEANTrib $paramCEANTrib)
    {
        $this->removeElementsByTagName(self::CEANTRIB);
        $this->appendChild($paramCEANTrib, false);
        return $this;
    }

    /**
     * Retorna Unidade Tributável
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib 
     */
    public function getUTrib()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib');
        return $this->getElementsByTagName(self::UTRIB)->item(0);
    }

    /**
     * Adiciona Unidade Tributável
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib 
     */
    public function addUTrib($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib(self::UTRIB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Unidade Tributável
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib $paramUTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setUTrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\UTrib $paramUTrib)
    {
        $this->removeElementsByTagName(self::UTRIB);
        $this->appendChild($paramUTrib, false);
        return $this;
    }

    /**
     * Retorna Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11 inteiros (v2.0)
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function getQTrib()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1104v');
        return $this->getElementsByTagName(self::QTRIB)->item(0);
    }

    /**
     * Adiciona Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11 inteiros (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1104v 
     */
    public function addQTrib($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1104v(self::QTRIB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Quantidade Tributável - alterado para aceitar de 0 a 4 casas decimais e 11 inteiros (v2.0)
     * @param \Sped\Schemas\V200\TDec_1104v $paramQTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setQTrib(\Sped\Schemas\V200\TDec_1104v $paramQTrib)
    {
        $this->removeElementsByTagName(self::QTRIB);
        $this->appendChild($paramQTrib, false);
        return $this;
    }

    /**
     * Retorna Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais e 11 inteiros (v2.0)
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getVUnTrib()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(self::VUNTRIB)->item(0);
    }

    /**
     * Adiciona Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais e 11 inteiros (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addVUnTrib($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(self::VUNTRIB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor unitário de tributação - - alterado para aceitar 0 a 10 casas decimais e 11 inteiros (v2.0)
     * @param \Sped\Schemas\V200\TDec_1110 $paramVUnTrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVUnTrib(\Sped\Schemas\V200\TDec_1110 $paramVUnTrib)
    {
        $this->removeElementsByTagName(self::VUNTRIB);
        $this->appendChild($paramVUnTrib, false);
        return $this;
    }

    /**
     * Retorna Valor Total do Frete
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVFrete($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VFRETE)->item($index);
    }

    /**
     * Adiciona Valor Total do Frete
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVFrete($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VFRETE, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor Total do Frete
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVFrete 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVFrete(\Sped\Schemas\V200\TDec_1302Opc $paramVFrete)
    {
        $this->removeElementsByTagName(self::VFRETE);
        $this->appendChild($paramVFrete, false);
        return $this;
    }

    /**
     * Retorna Valor Total do Seguro
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVSeg($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VSEG)->item($index);
    }

    /**
     * Adiciona Valor Total do Seguro
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVSeg($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VSEG, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor Total do Seguro
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVSeg 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVSeg(\Sped\Schemas\V200\TDec_1302Opc $paramVSeg)
    {
        $this->removeElementsByTagName(self::VSEG);
        $this->appendChild($paramVSeg, false);
        return $this;
    }

    /**
     * Retorna Valor do Desconto
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVDesc($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDESC)->item($index);
    }

    /**
     * Adiciona Valor do Desconto
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDesc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDESC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor do Desconto
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDesc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVDesc(\Sped\Schemas\V200\TDec_1302Opc $paramVDesc)
    {
        $this->removeElementsByTagName(self::VDESC);
        $this->appendChild($paramVDesc, false);
        return $this;
    }

    /**
     * Retorna Outras despesas acessórias - (v2.0)
     * @param int $index 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVOutro($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VOUTRO)->item($index);
    }

    /**
     * Adiciona Outras despesas acessórias - (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVOutro($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VOUTRO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Outras despesas acessórias - (v2.0)
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVOutro 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVOutro(\Sped\Schemas\V200\TDec_1302Opc $paramVOutro)
    {
        $this->removeElementsByTagName(self::VOUTRO);
        $this->appendChild($paramVOutro, false);
        return $this;
    }

    /**
     * Retorna Este campo deverá ser preenchido com:<br />
     * 0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)<br />
     * 1  – o valor do item (vProd) compõe o valor total da NF-e (vProd)<br />
     * (v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot 
     */
    public function getIndTot()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot');
        return $this->getElementsByTagName(self::INDTOT)->item(0);
    }

    /**
     * Adiciona Este campo deverá ser preenchido com:<br />
     * 0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)<br />
     * 1  – o valor do item (vProd) compõe o valor total da NF-e (vProd)<br />
     * (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot 
     */
    public function addIndTot($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot(self::INDTOT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Este campo deverá ser preenchido com:<br />
     * 0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)<br />
     * 1  – o valor do item (vProd) compõe o valor total da NF-e (vProd)<br />
     * (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot $paramIndTot 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setIndTot(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\IndTot $paramIndTot)
    {
        $this->removeElementsByTagName(self::INDTOT);
        $this->appendChild($paramIndTot, false);
        return $this;
    }

    /**
     * Retorna Delcaração de Importação<br />
     * (NT 2011/004)
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function getDI($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI');
        return $this->getElementsByTagName(self::DI)->item($index);
    }

    /**
     * Adiciona Delcaração de Importação<br />
     * (NT 2011/004)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI 
     */
    public function addDI()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI(self::DI, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Delcaração de Importação<br />
     * (NT 2011/004)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI $paramDI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setDI(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\DI $paramDI)
    {
        $this->removeElementsByTagName(self::DI);
        $this->appendChild($paramDI, false);
        return $this;
    }

    /**
     * Retorna pedido de compra - Informação de interesse do emissor para controle do B2B. (v2.0)
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed 
     */
    public function getXPed($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed');
        return $this->getElementsByTagName(self::XPED)->item($index);
    }

    /**
     * Adiciona pedido de compra - Informação de interesse do emissor para controle do B2B. (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed 
     */
    public function addXPed($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed(self::XPED, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define pedido de compra - Informação de interesse do emissor para controle do B2B. (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed $paramXPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setXPed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\XPed $paramXPed)
    {
        $this->removeElementsByTagName(self::XPED);
        $this->appendChild($paramXPed, false);
        return $this;
    }

    /**
     * Retorna Número do Item do Pedido de Compra - Identificação do número do item do pedido de Compra (v2.0)
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed 
     */
    public function getNItemPed($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed');
        return $this->getElementsByTagName(self::NITEMPED)->item($index);
    }

    /**
     * Adiciona Número do Item do Pedido de Compra - Identificação do número do item do pedido de Compra (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed 
     */
    public function addNItemPed($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed(self::NITEMPED, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Número do Item do Pedido de Compra - Identificação do número do item do pedido de Compra (v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed $paramNItemPed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setNItemPed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\NItemPed $paramNItemPed)
    {
        $this->removeElementsByTagName(self::NITEMPED);
        $this->appendChild($paramNItemPed, false);
        return $this;
    }

    /**
     * Retorna Veículos novos
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function getVeicProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd');
        return $this->getElementsByTagName(self::VEICPROD)->item(0);
    }

    /**
     * Adiciona Veículos novos
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd 
     */
    public function addVeicProd()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd(self::VEICPROD, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Veículos novos
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd $paramVeicProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setVeicProd(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd $paramVeicProd)
    {
        $this->removeElementsByTagName(self::VEICPROD);
        $this->appendChild($paramVeicProd, false);
        return $this;
    }

    /**
     * Retorna grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function getMed($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med');
        return $this->getElementsByTagName(self::MED)->item($index);
    }

    /**
     * Adiciona grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med 
     */
    public function addMed()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med(self::MED, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define grupo do detalhamento de Medicamentos e de matérias-primas farmacêuticas
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med $paramMed 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setMed(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Med $paramMed)
    {
        $this->removeElementsByTagName(self::MED);
        $this->appendChild($paramMed, false);
        return $this;
    }

    /**
     * Retorna Armamentos
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function getArma($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma');
        return $this->getElementsByTagName(self::ARMA)->item($index);
    }

    /**
     * Adiciona Armamentos
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma 
     */
    public function addArma()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma(self::ARMA, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Armamentos
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma $paramArma 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setArma(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma $paramArma)
    {
        $this->removeElementsByTagName(self::ARMA);
        $this->appendChild($paramArma, false);
        return $this;
    }

    /**
     * Retorna Informar apenas para operações<br />
     * com combustíveis líquidos
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function getComb()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb');
        return $this->getElementsByTagName(self::COMB)->item(0);
    }

    /**
     * Adiciona Informar apenas para operações<br />
     * com combustíveis líquidos
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb 
     */
    public function addComb()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb(self::COMB, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar apenas para operações<br />
     * com combustíveis líquidos
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb $paramComb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Prod 
     */
    public function setComb(\Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb $paramComb)
    {
        $this->removeElementsByTagName(self::COMB);
        $this->appendChild($paramComb, false);
        return $this;
    }

}