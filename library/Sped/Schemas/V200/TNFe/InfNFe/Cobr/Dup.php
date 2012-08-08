<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Cobr;

/**
 * Dados das duplicatas NT 2011/004
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Dup
 * @package Sped
 */
class Dup extends \Sped\Components\Xml\Element 
{

    const NDUP = 'nDup';

    const DVENC = 'dVenc';

    const VDUP = 'vDup';

    /**
     * Retorna Número da duplicata
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup 
     */
    public function getNDup()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup');
        return $this->getElementsByTagName(self::NDUP)->item(0);
    }

    /**
     * Adiciona Número da duplicata
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup 
     */
    public function addNDup($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup(self::NDUP, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Número da duplicata
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup $paramNDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setNDup(\Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup\NDup $paramNDup)
    {
        $this->removeElementsByTagName(self::NDUP);
        $this->appendChild($paramNDup, false);
        return $this;
    }

    /**
     * Retorna Data de vencimento da duplicata (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDVenc()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DVENC)->item(0);
    }

    /**
     * Adiciona Data de vencimento da duplicata (AAAA-MM-DD)
     * @param type $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDVenc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DVENC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Data de vencimento da duplicata (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDVenc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setDVenc(\Sped\Schemas\V200\TData $paramDVenc)
    {
        $this->removeElementsByTagName(self::DVENC);
        $this->appendChild($paramDVenc, false);
        return $this;
    }

    /**
     * Retorna Valor da duplicata
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function getVDup()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302Opc');
        return $this->getElementsByTagName(self::VDUP)->item(0);
    }

    /**
     * Adiciona Valor da duplicata
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1302Opc 
     */
    public function addVDup($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302Opc(self::VDUP, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Valor da duplicata
     * @param \Sped\Schemas\V200\TDec_1302Opc $paramVDup 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr\Dup 
     */
    public function setVDup(\Sped\Schemas\V200\TDec_1302Opc $paramVDup)
    {
        $this->removeElementsByTagName(self::VDUP);
        $this->appendChild($paramVDup, false);
        return $this;
    }

}