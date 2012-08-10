<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI;

/**
 * Código da Situação Tributária do IPI:<br />
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
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name IPINT
 * @package Sped
 */
class IPINT extends \Sped\Components\Xml\Element 
{

    const CST = 'CST';

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
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
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
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
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
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

}