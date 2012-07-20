<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd;

/**
 * Tipo de combustível - Utilizar Tabela RENAVAM (v2.0)<br />
 * 01-Álcool<br />
 * 02-Gasolina<br />
 * 03-Diesel<br />
 * (...)<br />
 * 16-Álcool/Gasolina<br />
 * 17-Gasolina/Álcool/GNV<br />
 * 18-Gasolina/Elétrico
 * @name TpComb
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TpComb extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}