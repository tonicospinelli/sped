<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP;

/**
 * Código do modelo do Documento Fiscal - utilizar 04 para NF de produtor  ou 01 para NF Avulsa(v2.0)

 * @name Mod
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Mod extends \Sped\Components\Xml\Element  {
    const NAME = 'mod';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}