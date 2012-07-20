<?php

namespace Sped\Schemas\V200;

/**
 * Tipo CFOP - Transportes - uso exclusivo na retenção - 31/05/2010<br />
 * Acrescimo dos CFOP de 5931/5932/6931/6932 no CFOP de retTransp
 * @name TCfopTransp
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TCfopTransp extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}