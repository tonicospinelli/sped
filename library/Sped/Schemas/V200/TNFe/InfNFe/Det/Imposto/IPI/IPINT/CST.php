<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPINT;

/**
 * Código da Situação Tributária do IPI:<br />
 * 01-Entrada tributada com alíquota zero<br />
 * 02-Entrada isenta<br />
 * 03-Entrada não-tributada<br />
 * 04-Entrada imune<br />
 * 05-Entrada com suspensão<br />
 * 51-Saída tributada com alíquota zero<br />
 * 52-Saída isenta<br />
 * 53-Saída não-tributada<br />
 * 54-Saída imune<br />
 * 55-Saída com suspensão
 * @name CST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CST extends \Sped\Components\Xml\Element  {
    const NAME = 'CST';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}