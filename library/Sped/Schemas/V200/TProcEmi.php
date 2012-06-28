<?php
namespace Sped\Schemas\V200;

/**
 * Tipo processo de emissão da NF-e

 * @name TProcEmi
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TProcEmi extends \Sped\Components\Xml\Element  {
    const NAME = 'ProcEmi';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}