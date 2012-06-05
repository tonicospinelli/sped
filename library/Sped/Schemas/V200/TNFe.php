<?php

namespace Sped\Schemas\V200;

use Sped\Schemas\V200\TNFe\InfNFe;
use Sped\Schemas\V200\TNFe\Signature;

/**
 * //TODO: adicionar descrição da classe TNFe
 * @name TNFe
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 04/06/2012
 */
class TNFe extends \DOMElement {

  public function __construct() {
    parent::__construct('NFe', null, 'http://www.portalfiscal.inf.br/nfe');
  }

  /**
   * 
   * @return InfNFe
   */
  public function getInfNFe() {
    return $this->getElementsByTagName('infNFe')->item(0);
  }

  /**
   * 
   * @param InfNFe $paramInfNFe
   * @return TNFe 
   */
  public function setInfNFe($paramInfNFe) {
    $infNFe = $this->getInfNFe();
    if ($infNFe == null)
      $this->appendChild($paramInfNFe);
    else
      $this->replaceChild($paramInfNFe, $infNFe);
    return $this;
  }

  /**
   *
   * @return Signature
   */
  public function getSignature() {
    return $this->getElementsByTagName('Signature')->item(0);
  }

  /**
   * 
   * @param TNFe\Signature $paramSignature
   * @return TNFe 
   */
  public function setSignature($paramSignature) {
    $signature = $this->getSignature();
    if ($signature == null)
      $this->appendChild($paramSignature);
    else
      $this->replaceChild($paramSignature, $signature);
    return $this;
  }

}