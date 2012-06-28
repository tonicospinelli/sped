<?php
namespace Sped\Schemas\V200\TVeiculo;

/**
 * Placa do veículo (NT2011/004)

 * @name Placa
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Placa extends \Sped\Components\Xml\Element  {
    const NAME = 'placa';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}