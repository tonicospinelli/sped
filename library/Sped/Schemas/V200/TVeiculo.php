<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Veículo
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TVeiculo
 * @package Sped
 */
class TVeiculo extends \Sped\Components\Xml\Element 
{

    const PLACA = 'placa';

    const UF = 'UF';

    const RNTC = 'RNTC';

    /**
     * Retorna Placa do veículo (NT2011/004)
     * @return \Sped\Schemas\V200\TVeiculo\Placa 
     */
    public function getPlaca()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo\Placa');
        return $this->getElementsByTagName(self::PLACA)->item(0);
    }

    /**
     * Adiciona Placa do veículo (NT2011/004)
     * @param string $value 
     * @return \Sped\Schemas\V200\TVeiculo\Placa 
     */
    public function addPlaca($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo\Placa(self::PLACA, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Placa do veículo (NT2011/004)
     * @param \Sped\Schemas\V200\TVeiculo\Placa $paramPlaca 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function setPlaca(\Sped\Schemas\V200\TVeiculo\Placa $paramPlaca)
    {
        $this->removeElementsByTagName(self::PLACA);
        $this->appendChild($paramPlaca, false);
        return $this;
    }

    /**
     * Retorna Sigla da UF
     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(self::UF)->item(0);
    }

    /**
     * Adiciona Sigla da UF
     * @param string $value 
     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TUf(self::UF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Sigla da UF
     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF)
    {
        $this->removeElementsByTagName(self::UF);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**
     * Retorna Registro Nacional de Transportador de Carga (ANTT)
     * @return \Sped\Schemas\V200\TVeiculo\RNTC 
     */
    public function getRNTC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo\RNTC');
        return $this->getElementsByTagName(self::RNTC)->item(0);
    }

    /**
     * Adiciona Registro Nacional de Transportador de Carga (ANTT)
     * @param string $value 
     * @return \Sped\Schemas\V200\TVeiculo\RNTC 
     */
    public function addRNTC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo\RNTC(self::RNTC, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Registro Nacional de Transportador de Carga (ANTT)
     * @param \Sped\Schemas\V200\TVeiculo\RNTC $paramRNTC 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function setRNTC(\Sped\Schemas\V200\TVeiculo\RNTC $paramRNTC)
    {
        $this->removeElementsByTagName(self::RNTC);
        $this->appendChild($paramRNTC, false);
        return $this;
    }

}