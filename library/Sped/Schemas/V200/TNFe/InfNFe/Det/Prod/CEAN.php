<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * GTIN (Global Trade Item Number) do produto, antigo código EAN ou código de barras

 * @name CEAN
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CEAN extends \Sped\Components\Xml\Element  {
    const NAME = 'cEAN';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}