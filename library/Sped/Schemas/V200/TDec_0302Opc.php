<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Decimal com 5 dígitos, sendo 3 de corpo e 2 decimais, utilizado em tags opcionais
 * @name TDec_0302Opc
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TDec_0302Opc extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}