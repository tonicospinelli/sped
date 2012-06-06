<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Schemas\V200\TNFe;

use Sped\Schemas\V200\TNFe\InfNFe\Avulsa,
    Sped\Schemas\V200\TNFe\InfNFe\Cana,
    Sped\Schemas\V200\TNFe\InfNFe\Cobr,
    Sped\Schemas\V200\TNFe\InfNFe\Compra,
    Sped\Schemas\V200\TNFe\InfNFe\Dest,
    Sped\Schemas\V200\TNFe\InfNFe\Det,
    Sped\Schemas\V200\TNFe\InfNFe\Emit,
    Sped\Schemas\V200\TNFe\InfNFe\Entrega,
    Sped\Schemas\V200\TNFe\InfNFe\Exporta,
    Sped\Schemas\V200\TNFe\InfNFe\Ide,
    Sped\Schemas\V200\TNFe\InfNFe\InfAdic,
    Sped\Schemas\V200\TNFe\InfNFe\Retirada,
    Sped\Schemas\V200\TNFe\InfNFe\Total,
    Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class InfNFe extends \Sped\Components\Xml\Element {

    const NAME = 'infNFe';

    public function __construct() {
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function loadDefaults() {
        $this->addIde();
        $this->addEmit();
        $this->addDest();
        $this->addTotal();
        $this->addTransp();
    }

    public function getVersao() {
        return $this->getAttribute('versao');
    }

    public function setVersao($versao) {
        $this->setAttribute('versao', $versao);
        return $this;
    }

    public function getId() {
        return $this->getAttribute('Id');
    }

    public function setId($chaveNFe) {
        $this->setAttribute('Id', 'NFe' . $chaveNFe);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide
     */
    public function getIde() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide');
        return $this->getElementsByTagName(Ide::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide
     */
    public function addIde() {
        return $this->appendChild(new Ide(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide $paramIde
     * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
     */
    public function setIde($paramIde) {
        $this->appendChild($paramIde, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function getEmit() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit');
        return $this->getElementsByTagName(Emit::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function addEmit() {
        return $this->appendChild(new Emit(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit $paramEmit
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEmit($paramEmit) {
        $this->appendChild($paramEmit, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function getAvulsa() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa');
        return $this->getElementsByTagName(Avulsa::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function addAvulsa() {
        return $this->insertBefore(new Avulsa(), $this->getDest());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa $paramAvulsa
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setAvulsa($paramAvulsa) {
        $avulsa = $this->getAvulsa();
        if ($avulsa == null) {
            $this->insertBefore($paramAvulsa, $this->getDest());
        }
        else
            $this->replaceChild($paramAvulsa, $avulsa);

        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetAvulsa() {
        return $this->getAvulsa() !== null;
    }

    public function removeAvulsa() {
        $avulsa = $this->getAvulsa();
        if ($avulsa !== null)
            $this->removeChild($avulsa);
        return true;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest
     */
    public function getDest() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest');
        return $this->getElementsByTagName('dest')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function addDest() {
        return $this->appendChild(new Dest(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest $paramDest
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest
     */
    public function setDest($paramDest) {
        $this->appendChild($paramDest, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Retirada
     */
    public function getRetirada() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Retirada');
        return $this->getElementsByTagName('retirada')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Retirada
     */
    public function addRetirada() {
        return $this->appendChild(new Retirada(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Retirada $paramRetirada
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setRetirada($paramRetirada) {
        $this->appendChild($paramRetirada, true);
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetRetirada() {
        return $this->getRetirada() !== null;
    }

    public function removeRetirada() {
        $retirada = $this->getRetirada();
        if ($retirada !== NULL)
            $this->removeChild($retirada);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Entrega 
     */
    public function getEntrega() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Entrega');
        return $this->getElementsByTagName(Entrega::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Entrega 
     */
    public function addEntrega() {
        return $this->appendChild(new Entrega(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Entrega $paramEntrega
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEntrega($paramEntrega) {
        $this->appendChild($paramEntrega, true);
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetEntrega() {
        return $this->getEntrega() !== null;
    }

    public function removeEntrega() {
        $entrega = $this->getEntrega();
        if ($entrega !== NULL)
            $this->removeChild($entrega);
    }

    /**
     * 
     * @return \DOMNodeList
     */
    public function getDets() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det');
        return $this->getElementsByTagName(Det::NAME);
    }

    /**
     *
     * @param int $index
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det
     */
    public function getDet($index) {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det');
        $det = $this->getDets()->item($index);
        return $det;
    }

    /**
     *
     * @param int $index
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det
     */
    public function addDet() {
        $det = $this->insertBefore(new Det(), $this->getTotal());
        $det->setNItem($this->getDets()->length);
        return $det;
    }

    /**
     * 
     * @param array|\DOMNodeList $paramDet
     * @param int $index
     * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
     */
    public function setDets($paramDets) {
        $this->removeDets();
        foreach ($paramDets as $paramDet) {
            $this->setDet($paramDet);
        }
        return $this;
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det $paramDet
     * @param int $index
     * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
     */
    public function setDet($paramDet, $index = null) {
        if ($index !== null) {
            $det = $this->getDet($index);
        }

        if ($det == null) {
            $paramDet->setNItem($this->getDets()->length);
            $this->insertBefore($paramDet, $this->getTotal());
        } else {
            $this->replaceChild($paramDet, $det);
            $paramDet->setNItem($det->getNItem());
        }

        return $this;
    }

    /**
     *
     * @param int $index
     * @return bool
     */
    public function isSetDet($index = null) {
        if ($index === null)
            return $this->getDets()->length > 0;
        else
            return ($this->getDet($index) !== null);
    }

    public function organizeDets() {
        $dets = $this->getDets();
        $i = 1;
        foreach ($dets as $det) {
            $det->setNItem($i++);
        }
    }

    /**
     *
     * @param int $index
     * @return boolean 
     */
    public function removeDet($index) {
        $det = $this->getDet($index);
        if ($det !== null)
            $this->removeChild($det);
        return true;
    }

    /**
     *
     * @return boolean 
     */
    public function removeDets() {
        $dets = $this->getDets();
        foreach ($dets as $det)
            $this->removeChild($det);
        return true;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function getTotal() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total');
        return $this->getElementsByTagName(Total::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function addTotal() {
        return $this->appendChild(new Total(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total $paramTotal
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTotal($paramTotal) {
        $this->appendChild($paramTotal, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp
     */
    public function getTransp() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp');
        return $this->getElementsByTagName(Transp::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp
     */
    public function addTransp() {
        return $this->appendChild(new Transp(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp $paramTransp
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTransp($paramTransp) {
        $this->appendChild($paramTransp, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function getCobr() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr');
        return $this->getElementsByTagName(Cobr::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function addCobr() {
        return $this->appendChild(new Cobr(), true);
    }

    public function setCobr($paramCobr) {
        $this->appendChild($paramCobr, true);
        return $this;
    }

    public function isSetCobr() {
        return $this->getCobr() !== null;
    }

    public function removeCobr() {
        $cobr = $this->getCobr();
        if ($cobr !== null)
            $this->removeChild($cobr);
    }

    public function getInfAdic() {
        $this->ownerDocument->registerNodeClass('\DOMElement', 'Sped\Schemas\V200\TNFe\InfNFe\InfAdic');
        return $this->getElementsByTagName(InfAdic::NAME)->item(0);
    }

    public function addInfAdic() {
        return $this->appendChild(new InfAdic(), true);
    }

    public function setInfAdic($paramInfAdic) {
        $this->appendChild($paramInfAdic, true);
        return $this;
    }

    public function isSetInfAdic() {
        return $this->getInfAdic() !== null;
    }

    public function removeInfAdic() {
        $infAdic = $this->getInfAdic();
        if ($infAdic !== null)
            $this->removeChild($infAdic);
    }

    public function getExporta() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Exporta');
        return $this->getElementsByTagName(Exporta::NAME)->item(0);
    }

    public function addExporta() {
        return $this->appendChild(new Exporta(), true);
    }

    public function setExporta($paramExporta) {
        $this->appendChild($paramExporta, true);
        return $this;
    }

    public function isSetExporta() {
        return $this->getExporta() !== null;
    }

    public function removeExporta() {
        $exporta = $this->getInfAdic();
        if ($exporta !== null)
            $this->removeChild($exporta);
    }

    public function getCompra() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra');
        return $this->getElementsByTagName(Compra::NAME)->item(0);
    }

    public function addCompra() {
        return $this->appendChild(new Compra(), true);
    }

    public function setCompra($paramCompra) {
        $this->appendChild($paramCompra, true);
        return $this;
    }

    public function isSetCompra() {
        return $this->getCompra() !== null;
    }

    public function removeCompra() {
        $compra = $this->getInfAdic();
        if ($compra !== null)
            $this->removeChild($compra);
    }

    public function getCana() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana');
        return $this->getElementsByTagName(Cana::NAME)->item(0);
    }

    public function addCana() {
        return $this->appendChild(new Cana(), true);
    }

    public function setCana($paramCana) {
        $this->appendChild($paramCana, true);
        return $this;
    }

    public function isSetCana() {
        return $this->getCana() !== null;
    }

    public function removeCana() {
        $cana = $this->getInfAdic();
        if ($cana !== null)
            $this->removeChild($cana);
    }

}