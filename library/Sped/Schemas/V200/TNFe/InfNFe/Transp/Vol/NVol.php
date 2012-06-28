<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol;

/**
 * Numeração dos volumes transportados

 * @name NVol
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class NVol extends \Sped\Components\Xml\Element  {
    const NAME = 'nVol';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}