<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSPart;

/**
 * Modalidade de determinação da BC do ICMS: <br />
 * 0 - Margem Valor Agregado (%);<br />
 * 1 - Pauta (valor);<br />
 * 2 - Preço Tabelado Máximo (valor);<br />
 * 3 - Valor da Operação. (v2.0)
 * @name ModBC
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ModBC extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}