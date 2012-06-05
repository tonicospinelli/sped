<?php

namespace Sped\Schemas\V200\TNFe;

use Sped\Schemas\V200\TNFe\InfNFe\Ide;
use Sped\Schemas\V200\TNFe\InfNFe\Det;

/**
 * //TODO: adicionar descrição da classe InfNFe
 * @name InfNFe
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 */
class InfNFe extends \DOMElement {

  public function __construct() {
    parent::__construct('infNFe', null, 'http://www.portalfiscal.inf.br/nfe');
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
   * @return InfNFe\Ide
   */
  public function getIde() {
    return $this->getElementsByTagName('ide')->item(0);
  }

  /**
   *
   * @param InfNFe\Ide $paramIde
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

  public function getEmit() {
    return $this->getElementsByTagName('emit')->item(0);
  }

  public function setEmit($paramEmit) {
    $emit = $this->getIde();
    if ($emit == null)
      $this->appendChild($paramEmit);
    else
      $this->replaceChild($paramEmit, $emit);

    return $this;
  }

  public function getAvulsa() {
    return $this->getElementsByTagName('avulsa')->item(0);
  }

  public function setAvulsa($paramAvulsa) {
    $avulsa = $this->getAvulsa();
    if ($avulsa == null)
      $this->appendChild($paramAvulsa);
    else
      $this->replaceChild($paramAvulsa, $avulsa);

    return $this;
  }

  public function isSetAvulsa() {
    return $this->getElementsByTagName('avulsa')->length > 0;
  }

  public function removeAvulsa() {
    $avulsa = $this->getAvulsa();
    if ($avulsa instanceof \DOMNode)
      $this->removeChild($avulsa);
  }

  public function getDest() {
    return $this->getElementsByTagName('dest')->item(0);
  }

  public function setDest($paramDest) {
    $dest = $this->getDest();
    if ($dest == null)
      $this->appendChild($paramDest);
    else
      $this->replaceChild($paramDest, $dest);

    return $this;
  }

  public function getRetirada() {
    return $this->getElementsByTagName('retirada')->item(0);
  }

  public function setRetirada($paramRetirada) {
    $retirada = $this->getRetirada();
    if ($retirada == null)
      $this->appendChild($paramRetirada);
    else
      $this->replaceChild($paramRetirada, $retirada);

    return $this;
  }

  public function isSetRetirada() {
    return $this->getElementsByTagName('retirada')->length > 0;
  }

  public function removeRetirada() {
    $retirada = $this->getRetirada();
    if ($retirada instanceof \DOMNode)
      $this->removeChild($retirada);
  }

  public function getEntrega() {
    return $this->getElementsByTagName('entrega')->item(0);
  }

  public function setEntrega($paramEntrega) {
    $entrega = $this->getEntrega();
    if ($entrega == null)
      $this->appendChild($paramEntrega);
    else
      $this->replaceChild($paramEntrega, $entrega);

    return $this;
  }

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
   *
   * @param  $index
   * @return \DOMNodeList
   */
  public function getDets() {
    return $this->getElementsByTagName('det');
  }

  /**
   *
   * @param type $index
   * @return InfNFe\Det
   */
  public function getDet($index) {
    $det = $this->getDets()->item($index);
    return $det;
  }

  /**
   * 
   * @param InfNFe\Det $paramDet
   * @param int $index
   * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
   */
  public function setDets(array $paramDets, $index = null) {
    if ($index == null) {
      $this->removeDets();
      $index = 0;
    }
    foreach ($paramDets as $paramDet) {
      $this->setDet($paramDet, $index++);
    }
    return $this;
  }

  /**
   * 
   * @param InfNFe\Det $paramDet
   * @param int $index
   * @return \Sped\Schemas\V200\NFeDocument\TNFe\InfNFe 
   */
  public function setDet($paramDet, $index = null) {
    if ($index !== null) {
      $det = $this->getDet($index);
    }

    if ($det == null) {
      $this->insertDet($paramDet);
    }
    else {
      $this->replaceChild($paramDet, $det);
      $paramDet->setNItem($det->getNItem());
    }

    return $this;
  }

  public function isSetDet($index = null) {
    if ($index === null)
      return $this->getDets()->length > 0;
    else
      return $this->getDet($index) instanceof Det;
  }

  public function insertDet($paramDet) {
    $this->appendChild($paramDet);
    $paramDet->setNItem($this->getDets()->length);
  }

  public function orderDets() {
    $dets = $this->getDets();
    $i = 1;
    foreach ($dets as $det) {
      $det = $this->removeChild($det);
      $det->setNItem($i++);
      $this->appendChild($det);
    }
  }

  public function removeDet($index) {
    $det = $this->getDet($index);
    if ($det->hasChildNodes())
      $this->removeChild($det);
  }

  public function removeDets() {
    $dets = $this->getDets();
    foreach ($dets as $det)
      $this->removeChild($det);
  }

  public function getTotal() {
    return $this->getElementsByTagName('total')->item(0);
  }

  public function setTotal($paramTotal) {
    $total = $this->getEntrega();
    if ($total == null)
      $this->appendChild($paramTotal);
    else
      $this->replaceChild($paramTotal, $total);

    return $this;
  }

  public function getTransp() {
    return $this->getElementsByTagName('transp')->item(0);
  }

  public function setTransp($paramTransp) {
    $transp = $this->getEntrega();
    if ($transp == null)
      $this->appendChild($paramTransp);
    else
      $this->replaceChild($paramTransp, $transp);

    return $this;
  }

  public function getCobr() {
    return $this->getElementsByTagName('cobr')->item(0);
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