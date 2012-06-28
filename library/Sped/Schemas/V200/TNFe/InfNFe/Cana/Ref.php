<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Cana;

/**
 * Mês e Ano de Referência, formato: MM/AAAA // 2.0

 * @name Ref
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Ref extends \Sped\Components\Xml\Element  {
    const NAME = 'ref';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}