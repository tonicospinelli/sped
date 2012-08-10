<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do IPI
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name IPI
 * @package Sped
 */
class IPI extends \Sped\Components\Xml\Element 
{

    const CLENQ = 'clEnq';

    const CNPJPROD = 'CNPJProd';

    const CSELO = 'cSelo';

    const QSELO = 'qSelo';

    const CENQ = 'cEnq';

    const IPITRIB = 'IPITrib';

    const IPINT = 'IPINT';

    /**
     * Retorna Classe de Enquadramento do IPI para Cigarros e Bebidas
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq 
     */
    public function getClEnq()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq');
        return $this->getElementsByTagName(self::CLENQ)->item(0);
    }

    /**
     * Adiciona Classe de Enquadramento do IPI para Cigarros e Bebidas
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq 
     */
    public function addClEnq($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq(self::CLENQ, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Classe de Enquadramento do IPI para Cigarros e Bebidas
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq $paramClEnq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setClEnq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\ClEnq $paramClEnq)
    {
        $this->removeElementsByTagName(self::CLENQ);
        $this->appendChild($paramClEnq, false);
        return $this;
    }

    /**
     * Retorna CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os casos de exportação direta ou indireta.
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function getCNPJProd()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCnpj');
        return $this->getElementsByTagName(self::CNPJPROD)->item(0);
    }

    /**
     * Adiciona CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os casos de exportação direta ou indireta.
     * @param string $value 
     * @return \Sped\Schemas\V200\TCnpj 
     */
    public function addCNPJProd($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCnpj(self::CNPJPROD, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os casos de exportação direta ou indireta.
     * @param \Sped\Schemas\V200\TCnpj $paramCNPJProd 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCNPJProd(\Sped\Schemas\V200\TCnpj $paramCNPJProd)
    {
        $this->removeElementsByTagName(self::CNPJPROD);
        $this->appendChild($paramCNPJProd, false);
        return $this;
    }

    /**
     * Retorna Código do selo de controle do IPI 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo 
     */
    public function getCSelo()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo');
        return $this->getElementsByTagName(self::CSELO)->item(0);
    }

    /**
     * Adiciona Código do selo de controle do IPI 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo 
     */
    public function addCSelo($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo(self::CSELO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Código do selo de controle do IPI 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo $paramCSelo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCSelo(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CSelo $paramCSelo)
    {
        $this->removeElementsByTagName(self::CSELO);
        $this->appendChild($paramCSelo, false);
        return $this;
    }

    /**
     * Retorna Quantidade de selo de controle do IPI
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo 
     */
    public function getQSelo()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo');
        return $this->getElementsByTagName(self::QSELO)->item(0);
    }

    /**
     * Adiciona Quantidade de selo de controle do IPI
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo 
     */
    public function addQSelo($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo(self::QSELO, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Quantidade de selo de controle do IPI
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo $paramQSelo 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setQSelo(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\QSelo $paramQSelo)
    {
        $this->removeElementsByTagName(self::QSELO);
        $this->appendChild($paramQSelo, false);
        return $this;
    }

    /**
     * Retorna Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq 
     */
    public function getCEnq()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq');
        return $this->getElementsByTagName(self::CENQ)->item(0);
    }

    /**
     * Adiciona Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq 
     */
    public function addCEnq($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq(self::CENQ, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq $paramCEnq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setCEnq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\CEnq $paramCEnq)
    {
        $this->removeElementsByTagName(self::CENQ);
        $this->appendChild($paramCEnq, false);
        return $this;
    }

    /**
     * Retorna Código da Situação Tributária do IPI:<br />
     * 00-Entrada com recuperação de crédito<br />
     * 49 - Outras entradas<br />
     * 50-Saída tributada<br />
     * 99-Outras saídas
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function getIPITrib()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib');
        return $this->getElementsByTagName(self::IPITRIB)->item(0);
    }

    /**
     * Adiciona Código da Situação Tributária do IPI:<br />
     * 00-Entrada com recuperação de crédito<br />
     * 49 - Outras entradas<br />
     * 50-Saída tributada<br />
     * 99-Outras saídas
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib 
     */
    public function addIPITrib()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib(self::IPITRIB, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código da Situação Tributária do IPI:<br />
     * 00-Entrada com recuperação de crédito<br />
     * 49 - Outras entradas<br />
     * 50-Saída tributada<br />
     * 99-Outras saídas
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib $paramIPITrib 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setIPITrib(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib $paramIPITrib)
    {
        $this->removeElementsByTagName(self::IPITRIB);
        $this->appendChild($paramIPITrib, false);
        return $this;
    }

    /**
     * Retorna Código da Situação Tributária do IPI:<br />
     * 01-Entrada tributada com alíquota zero<br />
     * 02-Entrada isenta<br />
     * 03-Entrada não-tributada<br />
     * 04-Entrada imune<br />
     * 05-Entrada com suspensão<br />
     * 51-Saída tributada com alíquota zero<br />
     * 52-Saída isenta<br />
     * 53-Saída não-tributada<br />
     * 54-Saída imune<br />
     * 55-Saída com suspensão
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function getIPINT()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT');
        return $this->getElementsByTagName(self::IPINT)->item(0);
    }

    /**
     * Adiciona Código da Situação Tributária do IPI:<br />
     * 01-Entrada tributada com alíquota zero<br />
     * 02-Entrada isenta<br />
     * 03-Entrada não-tributada<br />
     * 04-Entrada imune<br />
     * 05-Entrada com suspensão<br />
     * 51-Saída tributada com alíquota zero<br />
     * 52-Saída isenta<br />
     * 53-Saída não-tributada<br />
     * 54-Saída imune<br />
     * 55-Saída com suspensão
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function addIPINT()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT(self::IPINT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código da Situação Tributária do IPI:<br />
     * 01-Entrada tributada com alíquota zero<br />
     * 02-Entrada isenta<br />
     * 03-Entrada não-tributada<br />
     * 04-Entrada imune<br />
     * 05-Entrada com suspensão<br />
     * 51-Saída tributada com alíquota zero<br />
     * 52-Saída isenta<br />
     * 53-Saída não-tributada<br />
     * 54-Saída imune<br />
     * 55-Saída com suspensão
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT $paramIPINT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI 
     */
    public function setIPINT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT $paramIPINT)
    {
        $this->removeElementsByTagName(self::IPINT);
        $this->appendChild($paramIPINT, false);
        return $this;
    }

}