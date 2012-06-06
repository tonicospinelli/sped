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
 * Identificador do processo de emissão da NF-e:<br>
 * <ul>
 * <li>0 - emissão de NF-e com aplicativo do contribuinte</li>
 * <li>1 - emissão de NF-e avulsa pelo Fisco</li>
 * <li>2 - emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site do Fisco;</li>
 * <li>3- emissão NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.</li>
 * </ul>
 * 
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe\Ide
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class ProcEmi extends \Sped\Components\Xml\Element {

    const NAME = 'procEmi';
    /**
     * Emissão de NF-e com aplicativo do contribuinte.
     */
    const APLICATIVO_CONTRIBUINTE = 0;
    /**
     * Emissão de NF-e avulsa pelo Fisco.
     */
    const AVULSA_FISCO = 1;
    /**
     * Emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, 
     * através do site do Fisco.
     */
    const AVULSA_CONTRIBUINTE = 2;
    /**
     * Emissão NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     */
    const APLICATIVO_FISCO = 3;

    public function __construct($value = null) {
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function setAplicativoContribuinte() {
        $this->nodeValue = self::APLICATIVO_CONTRIBUINTE;
    }

    public function setAvulsaFisco() {
        $this->nodeValue = self::AVULSA_FISCO;
    }

    public function setAvulsaContribuinte() {
        $this->nodeValue = self::AVULSA_CONTRIBUINTE;
    }

    public function setAplicativoFisco() {
        $this->nodeValue = self::APLICATIVO_FISCO;
    }

}