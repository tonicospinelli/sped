<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Avulsa;

/**
 * Número do Documento de Arrecadação de Receita

 * @name NDAR
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class NDAR extends \Sped\Components\Xml\Element  {
    const NAME = 'nDAR';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}