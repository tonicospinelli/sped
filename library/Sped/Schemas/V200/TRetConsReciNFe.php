<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Retorno do Pedido de  Consulta do Recido do Lote de Notas Fiscais Eletrônicas
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TRetConsReciNFe
 * @package Sped
 */
class TRetConsReciNFe extends \Sped\Components\Xml\Element 
{

    const TPAMB = 'tpAmb';

    const VERAPLIC = 'verAplic';

    const NREC = 'nRec';

    const CSTAT = 'cStat';

    const XMOTIVO = 'xMotivo';

    const CUF = 'cUF';

    const CMSG = 'cMsg';

    const XMSG = 'xMsg';

    const PROTNFE = 'protNFe';

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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic)
    {
        $this->removeElementsByTagName(self::VERAPLIC);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**
     * Retorna Número do Recibo Consultado
     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(self::NREC)->item(0);
    }

    /**
     * Adiciona Número do Recibo Consultado
     * @param string $value 
     * @return \Sped\Schemas\V200\TRec 
     */
    public function addNRec($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TRec(self::NREC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do Recibo Consultado
     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec)
    {
        $this->removeElementsByTagName(self::NREC);
        $this->appendChild($paramNRec, false);
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
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
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo)
    {
        $this->removeElementsByTagName(self::XMOTIVO);
        $this->appendChild($paramXMotivo, false);
        return $this;
    }

    /**
     * Retorna código da UF de atendimento
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * Adiciona código da UF de atendimento
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define código da UF de atendimento
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF)
    {
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * Retorna Código da Mensagem (v2.0) <br />
     * alterado para tamanho variavel 1-4. (NT2011/004)
     * @return \Sped\Schemas\V200\TRetConsReciNFe\CMsg 
     */
    public function getCMsg()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetConsReciNFe\CMsg');
        return $this->getElementsByTagName(self::CMSG)->item(0);
    }

    /**
     * Adiciona Código da Mensagem (v2.0) <br />
     * alterado para tamanho variavel 1-4. (NT2011/004)
     * @param string $value 
     * @return \Sped\Schemas\V200\TRetConsReciNFe\CMsg 
     */
    public function addCMsg($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TRetConsReciNFe\CMsg(self::CMSG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código da Mensagem (v2.0) <br />
     * alterado para tamanho variavel 1-4. (NT2011/004)
     * @param \Sped\Schemas\V200\TRetConsReciNFe\CMsg $paramCMsg 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setCMsg(\Sped\Schemas\V200\TRetConsReciNFe\CMsg $paramCMsg)
    {
        $this->removeElementsByTagName(self::CMSG);
        $this->appendChild($paramCMsg, false);
        return $this;
    }

    /**
     * Retorna Mensagem da SEFAZ para o emissor. (v2.0)
     * @return \Sped\Schemas\V200\TRetConsReciNFe\XMsg 
     */
    public function getXMsg()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetConsReciNFe\XMsg');
        return $this->getElementsByTagName(self::XMSG)->item(0);
    }

    /**
     * Adiciona Mensagem da SEFAZ para o emissor. (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TRetConsReciNFe\XMsg 
     */
    public function addXMsg($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TRetConsReciNFe\XMsg(self::XMSG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Mensagem da SEFAZ para o emissor. (v2.0)
     * @param \Sped\Schemas\V200\TRetConsReciNFe\XMsg $paramXMsg 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setXMsg(\Sped\Schemas\V200\TRetConsReciNFe\XMsg $paramXMsg)
    {
        $this->removeElementsByTagName(self::XMSG);
        $this->appendChild($paramXMsg, false);
        return $this;
    }

    /**
     * Retorna Protocolo de status resultado do processamento da NF-e
     * @param int $index 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function getProtNFe($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProtNFe');
        return $this->getElementsByTagName(self::PROTNFE)->item($index);
    }

    /**
     * Adiciona Protocolo de status resultado do processamento da NF-e
     * @param string $value 
     * @return \Sped\Schemas\V200\TProtNFe 
     */
    public function addProtNFe($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TProtNFe(self::PROTNFE, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Protocolo de status resultado do processamento da NF-e
     * @param \Sped\Schemas\V200\TProtNFe $paramProtNFe 
     * @return \Sped\Schemas\V200\TRetConsReciNFe 
     */
    public function setProtNFe(\Sped\Schemas\V200\TProtNFe $paramProtNFe)
    {
        $this->removeElementsByTagName(self::PROTNFE);
        $this->appendChild($paramProtNFe, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao()
    {
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param type $value 
     */
    public function setVersao($value)
    {
        $this->setAttribute('versao', $value);
        return $this;
    }

}