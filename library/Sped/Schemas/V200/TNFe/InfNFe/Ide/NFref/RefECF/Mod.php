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

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide\NFRef\RefECF;

/**
 * Modelo do Documento Fiscal.<br>
 * Informar um dos códigos:
 * <ul>
 * <li><b>2B</b>: Cupom Fiscal emitido por máquina registradora (não ECF)</li>
 * <li><b>2C</b>: Cupom Fiscal PDV</li> 
 * <li><b>2D</b>: Cupom Fiscal (emitido por ECF)</li> 
 * </ul>
 * 
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe\Ide\NFRef\RefECF
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Mod extends \Sped\Components\Xml\Element {

    /**
     * Nome do elemento 
     */
    const NAME = 'mod';
    /**
     * Cupom Fiscal emitido por máquina registradora (não ECF).
     */
    const MAQUINA = '2B';
    /**
     * Cupom Fiscal PDV 
     */
    const PDV = '2C';
    /**
     * Cupom Fiscal (emitido por ECF) 
     */
    const ECF = '2D';

    /**
     *
     * @param int $value Use Mod::MAQUINA ou Mod::PDV ou Mod::ECF
     */
    public function __construct($value = null) {

        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function setMarquinaRegistradora() {
        $this->nodeValue = self::MAQUINA;
    }

    public function setPDV() {
        $this->nodeValue = self::PDV;
    }

    public function setECF() {
        $this->nodeValue = self::ECF;
    }

}