<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide;

/**
 * Tipo de Operação.
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe\Ide
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class TpNf extends \Sped\Components\Xml\Element {

    const NAME = 'tpNF';
    const ENTRADA = 0;
    const SAIDA = 1;

    /**
     * Tipo de Operação.
     * @param null|int $tipo Use as constantes TpNf::ENTRADA ou TpNf::SAIDA para definir a operação.
     */
    public function __construct($tipo = null) {

        parent::__construct(self::NAME, $tipo, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function setEntrada() {
        $this->nodeValue = self::ENTRADA;
    }

    public function isEntrada() {
        return $this->nodeValue === self::ENTRADA;
    }

    public function setSaida() {
        $this->nodeValue = self::SAIDA;
    }

    public function isSaida() {
        return $this->nodeValue === self::SAIDA;
    }

}