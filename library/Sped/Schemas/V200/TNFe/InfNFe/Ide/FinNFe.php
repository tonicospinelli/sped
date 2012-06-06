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
 * Finalidade de emissão da NF-e.
 * <ul>
 * <li>1- NF-e normal</li>
 * <li>2-NF-e complementar</li>
 * <li>3 – NF-e de ajuste</li>
 * </ul>
 * 
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe\Ide
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class FinNFe extends \Sped\Components\Xml\Element {

    const NAME = 'finNFe';
    /**
     * NF-e Normal. 
     */
    const NORMAL = 1;
    /**
     * NF-e Complementar. 
     */
    const COMPLEMETAR = 2;
    /**
     * NF-e de Ajuste.
     */
    const AJUSTE = 3;

    public function __construct($value = null) {
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function setNormal() {
        $this->nodeValue = self::NORMAL;
    }

    public function setComplementar() {
        $this->nodeValue = self::COMPLEMETAR;
    }

    public function setAjuste() {
        $this->nodeValue = self::AJUSTE;
    }

}