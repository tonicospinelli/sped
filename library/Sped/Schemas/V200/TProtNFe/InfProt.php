<?php

namespace Sped\Schemas\V200\TProtNFe;

/**
 * Dados do protocolo de status
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name InfProt
 * @package Sped
 */
class InfProt extends \Sped\Components\Xml\Element 
{

    const TPAMB = 'tpAmb';

    const VERAPLIC = 'verAplic';

    const CHNFE = 'chNFe';

    const DHRECBTO = 'dhRecbto';

    const NPROT = 'nProt';

    const DIGVAL = 'digVal';

    const CSTAT = 'cStat';

    const XMOTIVO = 'xMotivo';

    /**
     * Retorna Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(self::TPAMB)->item(0);
    }

    /**
     * Adiciona Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @param string $value 
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function addTpAmb($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(self::TPAMB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb)
    {
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * Retorna Versão do Aplicativo que processou a NF-e
     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function getVerAplic()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVerAplic');
        return $this->getElementsByTagName(self::VERAPLIC)->item(0);
    }

    /**
     * Adiciona Versão do Aplicativo que processou a NF-e
     * @param string $value 
     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function addVerAplic($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TVerAplic(self::VERAPLIC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Versão do Aplicativo que processou a NF-e
     * @param \Sped\Schemas\V200\TVerAplic $paramVerAplic 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic)
    {
        $this->removeElementsByTagName(self::VERAPLIC);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**
     * Retorna Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico+DV.
     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function getChNFe()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TChNFe');
        return $this->getElementsByTagName(self::CHNFE)->item(0);
    }

    /**
     * Adiciona Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico+DV.
     * @param string $value 
     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function addChNFe($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TChNFe(self::CHNFE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico+DV.
     * @param \Sped\Schemas\V200\TChNFe $paramChNFe 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setChNFe(\Sped\Schemas\V200\TChNFe $paramChNFe)
    {
        $this->removeElementsByTagName(self::CHNFE);
        $this->appendChild($paramChNFe, false);
        return $this;
    }

    /**
     * Retorna Data e hora de processamento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida com data e hora da gravação no Banco em caso de Confirmação. Em caso de Rejeição, com data e hora do recebimento do Lote de NF-e enviado.
     * @return \Sped\Components\Xml\Element 
     */
    public function getDhRecbto()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Components\Xml\Element');
        return $this->getElementsByTagName(self::DHRECBTO)->item(0);
    }

    /**
     * Adiciona Data e hora de processamento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida com data e hora da gravação no Banco em caso de Confirmação. Em caso de Rejeição, com data e hora do recebimento do Lote de NF-e enviado.
     * @param string $value 
     * @return \Sped\Components\Xml\Element 
     */
    public function addDhRecbto($value = NULL)
    {
        return $this->appendChild(new \Sped\Components\Xml\Element(self::DHRECBTO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Data e hora de processamento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida com data e hora da gravação no Banco em caso de Confirmação. Em caso de Rejeição, com data e hora do recebimento do Lote de NF-e enviado.
     * @param \Sped\Components\Xml\Element $paramDhRecbto 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setDhRecbto(\Sped\Components\Xml\Element $paramDhRecbto)
    {
        $this->removeElementsByTagName(self::DHRECBTO);
        $this->appendChild($paramDhRecbto, false);
        return $this;
    }

    /**
     * Retorna Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda Estadual 2 – Receita Federal); 2 - códiga da UF - 2 posições ano; 10 seqüencial no ano.
     * @return \Sped\Schemas\V200\TProt 
     */
    public function getNProt()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProt');
        return $this->getElementsByTagName(self::NPROT)->item(0);
    }

    /**
     * Adiciona Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda Estadual 2 – Receita Federal); 2 - códiga da UF - 2 posições ano; 10 seqüencial no ano.
     * @param string $value 
     * @return \Sped\Schemas\V200\TProt 
     */
    public function addNProt($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TProt(self::NPROT, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda Estadual 2 – Receita Federal); 2 - códiga da UF - 2 posições ano; 10 seqüencial no ano.
     * @param \Sped\Schemas\V200\TProt $paramNProt 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setNProt(\Sped\Schemas\V200\TProt $paramNProt)
    {
        $this->removeElementsByTagName(self::NPROT);
        $this->appendChild($paramNProt, false);
        return $this;
    }

    /**
     * Retorna Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original.
     * @return \Sped\Schemas\V200\DigestValueType 
     */
    public function getDigVal()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\DigestValueType');
        return $this->getElementsByTagName(self::DIGVAL)->item(0);
    }

    /**
     * Adiciona Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original.
     * @param string $value 
     * @return \Sped\Schemas\V200\DigestValueType 
     */
    public function addDigVal($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\DigestValueType(self::DIGVAL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Digest Value da NF-e processada. Utilizado para conferir a integridade da NF-e original.
     * @param \Sped\Schemas\V200\DigestValueType $paramDigVal 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setDigVal(\Sped\Schemas\V200\DigestValueType $paramDigVal)
    {
        $this->removeElementsByTagName(self::DIGVAL);
        $this->appendChild($paramDigVal, false);
        return $this;
    }

    /**
     * Retorna Código do status da mensagem enviada.
     * @return \Sped\Schemas\V200\TStat 
     */
    public function getCStat()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TStat');
        return $this->getElementsByTagName(self::CSTAT)->item(0);
    }

    /**
     * Adiciona Código do status da mensagem enviada.
     * @param string $value 
     * @return \Sped\Schemas\V200\TStat 
     */
    public function addCStat($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TStat(self::CSTAT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do status da mensagem enviada.
     * @param \Sped\Schemas\V200\TStat $paramCStat 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setCStat(\Sped\Schemas\V200\TStat $paramCStat)
    {
        $this->removeElementsByTagName(self::CSTAT);
        $this->appendChild($paramCStat, false);
        return $this;
    }

    /**
     * Retorna Descrição literal do status do serviço solicitado.
     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function getXMotivo()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMotivo');
        return $this->getElementsByTagName(self::XMOTIVO)->item(0);
    }

    /**
     * Adiciona Descrição literal do status do serviço solicitado.
     * @param string $value 
     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function addXMotivo($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TMotivo(self::XMOTIVO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Descrição literal do status do serviço solicitado.
     * @param \Sped\Schemas\V200\TMotivo $paramXMotivo 
     * @return \Sped\Schemas\V200\TProtNFe\InfProt 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo)
    {
        $this->removeElementsByTagName(self::XMOTIVO);
        $this->appendChild($paramXMotivo, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getId()
    {
        return $this->getAttribute('Id');
    }

    /**
     * 
     * @param type $value 
     */
    public function setId($value)
    {
        $this->setAttribute('Id', $value);
        return $this;
    }

    /**
     * 
     * @return boolean 
     */
    public function isSetId()
    {
        return $this->hasAttribute('Id');
    }

    /**
     * 
     * @return boolean 
     */
    public function unsetId()
    {
        $this->removeAttribute('Id');
        return true;
    }

}