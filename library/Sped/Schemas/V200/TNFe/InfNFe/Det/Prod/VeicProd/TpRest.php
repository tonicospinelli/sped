<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Prod\VeicProd;

/**
 * Restrição<br />
 * 0 - Não há;<br />
 * 1 - Alienação Fiduciária;<br />
 * 2 - Arrendamento Mercantil;<br />
 * 3 - Reserva de Domínio;<br />
 * 4 - Penhor de Veículos;<br />
 * 9 - outras. (v2.0)
 * @name TpRest
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TpRest extends \Sped\Components\Xml\Element  {
    const NAME = 'tpRest';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}