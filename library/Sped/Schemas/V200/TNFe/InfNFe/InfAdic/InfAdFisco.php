<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic;

/**
 * Informações adicionais de interesse do Fisco (v2.0)
 * @name InfAdFisco
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class InfAdFisco extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}