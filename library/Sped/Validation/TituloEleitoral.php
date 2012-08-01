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

namespace Sped\Validation;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class TituloEleitoral extends Modulo11
{

    /**
     * Validador de Título Eleitoral.  
     */
    function __construct()
    {
        $this->digitsCount = 2;
        $this->maxMultiplier = 10;
    }

    /**
     * Valida se o Título Eleitoral está correto.
     * @param string|int|\Sped\Commons\Documents\TituloEleitoral $value
     * @return boolean 
     */
    public function validate($value)
    {
        if (!$value instanceof \Sped\Commons\Documents\TituloEleitoral)
            $value = new \Sped\Commons\Documents\TituloEleitoral($value);

        $coeficients = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 4, 3);

        $foundDv = 0;
        $aux = $value->getValue()->substring(9, 2)->toInteger();
        $dv = $value->getValue()->substring(11, $this->digitsCount)->toInteger();
        $sum = 0;
        for ($i = 0; $i <= $this->maxMultiplier; $i++) {
            $digit = $value->getValue()->substring($i, 1)->toInteger();
            $sum += $digit * $coeficients[$i];
            if (($i == 8) || ($i == 10)) {
                $sum %= 11;
                if ($sum > 1) {
                    $sum = 11 - $sum;
                } else if ($aux <= 2)
                    $sum = 1 - $sum;
                else {
                    $sum = 0;
                }
                if ($i == 8)
                    $foundDv = $sum * 10;
                else
                    $foundDv .= $sum;
                $sum *= 2;
            }
        }
        return $dv === $foundDv;
    }

}