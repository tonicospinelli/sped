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

use Sped\Schemas\V200\TNFe\InfNFe\Ide,
    Sped\Schemas\V200\TNFe\InfNFe\Det,
    Sped\Schemas\V200\TNFe\InfNFe\Emit;

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
        $this->setAttribute('Id', $chaveNFe);
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
        return $this->appendChild(new Ide());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide $paramIde
     * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
     */
    public function setIde($paramIde) {
        $ide = $this->getIde();
        if ($ide == null)
            $this->appendChild($paramIde);
        else
            $this->replaceChild($paramIde, $ide);

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
        return $this->appendChild(new Emit());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit $paramEmit
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEmit($paramEmit) {
        $emit = $this->getIde();
        if ($emit == null)
            $this->appendChild($paramEmit);
        else
            $this->replaceChild($paramEmit, $emit);

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
        return $this->appendChild(new Avulsa());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa $paramAvulsa
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setAvulsa($paramAvulsa) {
        $avulsa = $this->getAvulsa();
        if ($avulsa == null)
            $this->appendChild($paramAvulsa);
        else
            $this->replaceChild($paramAvulsa, $avulsa);

        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetAvulsa() {
        return $this->getElementsByTagName('avulsa')->length > 0;
    }

    public function removeAvulsa() {
        $avulsa = $this->getAvulsa();
        if ($avulsa instanceof \DOMNode)
            $this->removeChild($avulsa);
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
        return $this->appendChild(new Dest());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest $paramDest
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setDest($paramDest) {
        $dest = $this->getDest();
        if ($dest == null)
            $this->appendChild($paramDest);
        else
            $this->replaceChild($paramDest, $dest);

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
        return $this->appendChild(new Retirada());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Retirada $paramRetirada
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setRetirada($paramRetirada) {
        $retirada = $this->getRetirada();
        if ($retirada == null)
            $this->appendChild($paramRetirada);
        else
            $this->replaceChild($paramRetirada, $retirada);

        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetRetirada() {
        return $this->getElementsByTagName('retirada')->length > 0;
    }

    public function removeRetirada() {
        $retirada = $this->getRetirada();
        if ($retirada instanceof \DOMNode)
            $this->removeChild($retirada);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Entrega 
     */
    public function getEntrega() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Entrega');
        return $this->getElementsByTagName('entrega')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Entrega 
     */
    public function addEntrega() {
        return $this->appendChild(new Entrega());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Entrega $paramEntrega
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEntrega($paramEntrega) {
        $entrega = $this->getEntrega();
        if ($entrega == null)
            $this->appendChild($paramEntrega);
        else
            $this->replaceChild($paramEntrega, $entrega);

        return $this;
    }

    /**
     *
     * @return bool
     */
    public function isSetEntrega() {
        return $this->getElementsByTagName('entrega')->length > 0;
    }

    public function removeEntrega() {
        $entrega = $this->getEntrega();
        if ($entrega instanceof \DOMNode)
            $this->removeChild($entrega);
    }

    /**
     * 
     * @return \DOMNodeList
     */
    public function getDets() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det');
        return $this->getElementsByTagName('det');
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
        $det = $this->appendChild(new Det());
        $det->setNItem($this->childNodes->length);
        return $det;
    }

    /**
     * 
     * @param array|\DOMNodeList $paramDet
     * @param int $index
     * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
     */
    public function setDets($paramDets, $index = null) {
        if ($index == null) {
            $this->removeDets();
            $index = 0;
        }
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
            $this->insertDet($paramDet);
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
            return $this->getDet($index) instanceof Det;
    }

    public function orderDets() {
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
        if ($det->hasChildNodes())
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
        return $this->getElementsByTagName('total')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function addTotal() {
        return $this->appendChild(new Total());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total $paramTotal
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTotal($paramTotal) {
        $total = $this->getEntrega();
        if ($total == null)
            $this->appendChild($paramTotal);
        else
            $this->replaceChild($paramTotal, $total);

        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp
     */
    public function getTransp() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp');
        return $this->getElementsByTagName('transp')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp
     */
    public function addTransp() {
        return $this->appendChild(new Transp());
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp $paramTransp
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTransp($paramTransp) {
        $transp = $this->getEntrega();
        if ($transp == null)
            $this->appendChild($paramTransp);
        else
            $this->replaceChild($paramTransp, $transp);

        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function getCobr() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr');
        return $this->getElementsByTagName('cobr')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function addCobr() {
        return $this->appendChild('cobr')->item(0);
    }

    public function setCobr($paramCobr) {
        $cobr = $this->getCobr();
        if ($cobr == null)
            $this->appendChild($paramCobr);
        else
            $this->replaceChild($paramCobr, $cobr);

        return $this;
    }

    public function isSetCobr() {
        return $this->getElementsByTagName('entrega')->length > 0;
    }

    public function removeCobr() {
        $cobr = $this->getCobr();
        if ($cobr instanceof \DOMNode)
            $this->removeChild($cobr);
    }

    public function getInfAdic() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Reference\DigestValue');
        return $this->getElementsByTagName('infAdic')->item(0);
    }

    public function setInfAdic($paramInfAdic) {
        $infAdic = $this->getInfAdic();
        if ($infAdic == null)
            $this->appendChild($paramInfAdic);
        else
            $this->replaceChild($paramInfAdic, $infAdic);

        return $this;
    }

    public function isSetInfAdic() {
        return $this->getElementsByTagName('infAdic')->length > 0;
    }

    public function removeInfAdic() {
        $infAdic = $this->getInfAdic();
        if ($infAdic instanceof \DOMNode)
            $this->removeChild($infAdic);
    }

    public function getExporta() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Reference\DigestValue');
        return $this->getElementsByTagName('exporta')->item(0);
    }

    public function setExporta($paramExporta) {
        $exporta = $this->getInfAdic();
        if ($exporta == null)
            $this->appendChild($paramExporta);
        else
            $this->replaceChild($paramExporta, $exporta);

        return $this;
    }

    public function isSetExporta() {
        return $this->getElementsByTagName('exporta')->length > 0;
    }

    public function removeExporta() {
        $exporta = $this->getInfAdic();
        if ($exporta instanceof \DOMNode)
            $this->removeChild($exporta);
    }

    public function getCompra() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Reference\DigestValue');
        return $this->getElementsByTagName('compra')->item(0);
    }

    public function setCompra($paramCompra) {
        $compra = $this->getInfAdic();
        if ($compra == null)
            $this->appendChild($paramCompra);
        else
            $this->replaceChild($paramCompra, $compra);

        return $this;
    }

    public function isSetCompra() {
        return $this->getElementsByTagName('compra')->length > 0;
    }

    public function removeCompra() {
        $compra = $this->getInfAdic();
        if ($compra instanceof \DOMNode)
            $this->removeChild($compra);
    }

    public function getCana() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Reference\DigestValue');
        return $this->getElementsByTagName('cana')->item(0);
    }

    public function setCana($paramCana) {
        $cana = $this->getInfAdic();
        if ($cana == null)
            $this->appendChild($paramCana);
        else
            $this->replaceChild($paramCana, $cana);

        return $this;
    }

    public function isSetCana() {
        return $this->getElementsByTagName('cana')->length > 0;
    }

    public function removeCana() {
        $cana = $this->getInfAdic();
        if ($cana instanceof \DOMNode)
            $this->removeChild($cana);
    }

}