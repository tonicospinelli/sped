<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\Comb;

/**
 * Código de produto da ANP. Utilizar a codificação de produtos do Sistema de Informações de Movimentação de produtos - SIMP(http://www.anp.gov.br/simp/index.h<br />
 * tm), somente informar 999999999 quando não se tratar  de produtos não regulados pela ANP -<br />
 * Agência Nacional do Petróleo.
 * @name CProdANP
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CProdANP extends \Sped\Components\Xml\Element  {
    const NAME = 'cProdANP';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}