<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF;

/**
 * Informar o número de ordem seqüencial do ECF que emitiu o Cupom Fiscal vinculado à NF-e (v2.0).
 * @name NECF
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class NECF extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}