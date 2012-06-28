<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\IPI\IPITrib;

/**
 * Código da Situação Tributária do IPI:<br />
 * 00-Entrada com recuperação de crédito<br />
 * 49 - Outras entradas<br />
 * 50-Saída tributada<br />
 * 99-Outras saídas
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