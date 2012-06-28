<?php
namespace Sped\Schemas\V200;

/**
 *  Tipo temp médio em segundos

 * @name TMed
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TMed extends \Sped\Components\Xml\Element  {
    const NAME = 'Med';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2001/XMLSchema');
    }

}