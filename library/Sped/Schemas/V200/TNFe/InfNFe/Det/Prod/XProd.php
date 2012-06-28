<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod;

/**
 * Descrição do produto ou serviço

 * @name XProd
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class XProd extends \Sped\Components\Xml\Element  {
    const NAME = 'xProd';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}