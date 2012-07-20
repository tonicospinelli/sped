<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Modalidade do frete<br />
 * 0- Por conta do emitente;<br />
 * 1- Por conta do destinatário/remetente;<br />
 * 2- Por conta de terceiros;<br />
 * 9- Sem frete (v2.0)
 * @name ModFrete
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ModFrete extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}