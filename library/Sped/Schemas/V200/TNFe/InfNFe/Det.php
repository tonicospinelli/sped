<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * //TODO: adicionar descrição da classe Det
 * @name Det
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 04/06/2012
 */
class Det extends \DOMElement {

  public function __construct() {
    parent::__construct('det', null, 'http://www.portalfiscal.inf.br/nfe');
  }

  public function setNItem($index) {
    $this->setAttribute('nItem', $index);
  }

  public function getNItem() {
    return $this->getAttribute('nItem');
  }

}