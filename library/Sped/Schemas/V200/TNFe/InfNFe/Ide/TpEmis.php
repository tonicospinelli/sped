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
 * Tipo de Emissão da NF-e.<br>
 * <ul>
 * <li>1 – Normal</li>
 * <li>2 – Contingência FS</li>
 * <li>3 – Contingência SCAN</li>
 * <li>4 – Contingência DPEC</li>
 * <li>5 – Contingência FS-DA</li>
 * <li>6 – Contingência SVC-AN</li>
 * <li>7 – Contingência SVC-RS</li>
 * </ul>
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe\Ide
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class TpEmis extends \Sped\Components\Xml\Element {

    const NAME = 'tpEmis';
    /**
     * Emissão normal.
     */
    const NORMAL = 1;
    /**
     * Emissão em contingência com impressão do DANFE em Formulário de Segurança. 
     */
    const CONTINGENCIA_FS = 2;
    /**
     * Emissão em contingência no Sistema de Contingência do Ambiente Nacional – SCAN.  
     */
    const CONTINGENCIA_SCAN = 3;
    /**
     * Emissão em contingência com envio da Declaração Prévia de Emissão em Contingência – DPEC.
     */
    const CONTINGENCIA_DPEC = 4;
    /**
     * Emissão em contingência com impressão do DANFE em Formulário de Segurança 
     * para Impressão de Documento Auxiliar de Documento Fiscal Eletrônico (FS-DA).
     */
    const CONTINGENCIA_FS_DA = 5;
    /**
     * Emissão em contingência na SEFAZ Virtual do Ambiente Nacional.
     */
    const CONTINGENCIA_SVC_AN = 6;
    /**
     * Emissão em contingência na SEFAZ Virtual do RS.
     */
    const CONTINGENCIA_SVC_RS = 7;

    /**
     *
     * @param int $value 
     * <ul>
     * <li>TpEmis::NORMAL</li>
     * <li>TpEmis::CONTINGENCIA_FS</li>
     * <li>TpEmis::CONTINGENCIA_SCAN</li>
     * <li>TpEmis::CONTINGENCIA_DPEC</li>
     * <li>TpEmis::CONTINGENCIA_FS_DA</li>
     * <li>TpEmis::CONTINGENCIA_SVC_AN</li>
     * <li>TpEmis::CONTINGENCIA_SVC_RS</li>
     * </ul>
     */
    public function __construct($value = null) {
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}