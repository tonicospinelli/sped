<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\InfAdic\ProcRef;

/**
 * Indentificador do processo ou ato<br />
 * concessório
 * @name NProc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class NProc extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}