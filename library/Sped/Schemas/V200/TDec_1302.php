<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Decimal com 15 dígitos, sendo 13 de corpo e 2 decimais

 * @name TDec_1302
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TDec_1302 extends \Sped\Components\Xml\Element  {
    const NAME = 'Dec_1302';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}