<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT;

/**
 * Código de Situação Tributária do PIS.<br />
 * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);<br />
 * 06 - Operação Tributável - Alíquota Zero;<br />
 * 07 - Operação Isenta da contribuição;<br />
 * 08 - Operação Sem Incidência da contribuição;<br />
 * 09 - Operação com suspensão da contribuição;
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