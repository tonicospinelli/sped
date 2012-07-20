<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMSSN102;

/**
 * 102- Tributada pelo Simples Nacional sem permissão de crédito. <br />
 * 103 – Isenção do ICMS  no Simples Nacional para faixa de receita bruta.<br />
 * 300 – Imune.<br />
 * 400 – Não tributda pelo Simples Nacional (v.2.0) (v.2.0)
 * @name CSOSN
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CSOSN extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}