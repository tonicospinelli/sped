<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd;

/**
 * Informa-se o veículo tem VIN (chassi) remarcado.<br />
 * R-Remarcado<br />
 * N-NormalVIN 
 * @name VIN
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class VIN extends \Sped\Components\Xml\Element  {
    const NAME = 'VIN';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}