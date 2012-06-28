<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Ide;

/**
 * Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e. (tamanho reduzido para 8 dígitos v2.0)

 * @name CNF
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CNF extends \Sped\Components\Xml\Element  {
    const NAME = 'cNF';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}