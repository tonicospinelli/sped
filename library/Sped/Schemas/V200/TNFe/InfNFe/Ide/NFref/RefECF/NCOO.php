<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF;

/**
 * Informar o Número do Contador de Ordem de Operação - COO vinculado à NF-e (v2.0).
 * @name NCOO
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class NCOO extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}