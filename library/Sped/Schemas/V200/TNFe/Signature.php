<?php

namespace Sped\Schemas\V200\TNFe;

/**
 * //TODO: adicionar descrição da classe Signature
 * @name Signature
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 04/06/2012
 */
class Signature extends \DOMElement {

  public function __construct() {
    parent::__construct('Signature', null, 'http://www.portalfiscal.inf.br/nfe');
  }

}