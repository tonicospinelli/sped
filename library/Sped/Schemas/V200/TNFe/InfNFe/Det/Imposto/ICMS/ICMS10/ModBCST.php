<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS10;

/**
 * Modalidade de determinação da BC do ICMS ST:<br />
 * 0 – Preço tabelado ou máximo  sugerido;<br />
 * 1 - Lista Negativa (valor);<br />
 * 2 - Lista Positiva (valor);<br />
 * 3 - Lista Neutra (valor);<br />
 * 4 - Margem Valor Agregado (%);<br />
 * 5 - Pauta (valor);
 * @name ModBCST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ModBCST extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}