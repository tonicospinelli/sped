<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Compra;

/**
 * Informação do pedido

 * @name XPed
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class XPed extends \Sped\Components\Xml\Element  {
    const NAME = 'xPed';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}