<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq;

/**
 * Código de Situação Tributária do PIS.<br />
 * 01 – Operação Tributável - Base de Cálculo = Valor da Operação Alíquota Normal (Cumulativo/Não Cumulativo);<br />
 * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota Diferenciada);
 * @name CST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CST extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}