<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * //TODO: adicionar descrição da classe Emit
 * @name Emit
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 04/06/2012
 */
class Emit extends \DOMElement {

  public function __construct() {
    parent::__construct('emit', null, 'http://www.portalfiscal.inf.br/nfe');
  }

}