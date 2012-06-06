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
 * Série do Documento Fiscal.<br>
 * Série do Documento Fiscal, preencher com zeros na hipótese de a NF-e não possuir série. (v2.0).<br>
 * Série 890-899 de uso exclusivo para emissão de NF-e avulsa, 
 * pelo contribuinte com seu certificado digital, através do site do Fisco (procEmi=2). (v2.0)<br>
 * Serie 900-999 – uso exclusivo de NF-e emitidas no SCAN. (v2.0)
 * 
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe\Ide
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Serie extends \Sped\Components\Xml\Element {

    const NAME = 'serie';

    public function __construct($value = null) {
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}