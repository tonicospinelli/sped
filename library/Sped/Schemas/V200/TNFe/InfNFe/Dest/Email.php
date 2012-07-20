<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Dest;

/**
 * Informar o e-mail do destinatário. O campo pode ser utilizado para informar o e-mail<br />
 * de recepção da NF-e indicada pelo destinatário (v2.0)
 * @name Email
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Email extends \Sped\Components\Xml\Element  {

    /**
     * 
     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}