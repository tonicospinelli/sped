<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Pedido de Consulta do Recido do Lote de Notas Fiscais Eletrônicas
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TConsReciNFe
 * @package Sped
 */
class TConsReciNFe extends \Sped\Components\Xml\Element 
{

    const TPAMB = 'tpAmb';

    const NREC = 'nRec';

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
     * @return \Sped\Schemas\V200\TConsReciNFe 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb)
    {
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * Retorna Número do Recibo
     * @return \Sped\Schemas\V200\TRec 
     */
    public function getNRec()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRec');
        return $this->getElementsByTagName(self::NREC)->item(0);
    }

    /**
     * Adiciona Número do Recibo
     * @param string $value 
     * @return \Sped\Schemas\V200\TRec 
     */
    public function addNRec($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TRec(self::NREC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do Recibo
     * @param \Sped\Schemas\V200\TRec $paramNRec 
     * @return \Sped\Schemas\V200\TConsReciNFe 
     */
    public function setNRec(\Sped\Schemas\V200\TRec $paramNRec)
    {
        $this->removeElementsByTagName(self::NREC);
        $this->appendChild($paramNRec, false);
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