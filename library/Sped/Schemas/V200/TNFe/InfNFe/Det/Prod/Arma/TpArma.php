<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Arma;

/**
 * Indicador do tipo de arma de fogo (0 - Uso permitido; 1 - Uso restrito)

 * @name TpArma
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TpArma extends \Sped\Components\Xml\Element  {
    const NAME = 'tpArma';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}