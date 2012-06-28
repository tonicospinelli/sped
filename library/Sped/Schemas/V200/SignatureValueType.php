<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @name SignatureValueType
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class SignatureValueType extends \Sped\Components\Xml\Element  {
    const NAME = 'SignatureValue';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

}