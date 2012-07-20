<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Este campo deverá ser preenchido com:<br />
 * 0 – o valor do item (vProd) não compõe o valor total da NF-e (vProd)<br />
 * 1  – o valor do item (vProd) compõe o valor total da NF-e (vProd)<br />
 * (v2.0)
 * @name IndTot
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class IndTot extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}