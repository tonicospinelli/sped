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

namespace Sped\Commons;

/**
 * @category   Sped
 * @package    Sped\Commons
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Mask {

    /**
     * Mask the string.
     * @param string|int $input
     * @param string $mask
     * @return string 
     */
    static public function exec($input, $mask) {
        if ($input instanceof Sped_Types_String)
            $input = $input->getValue();

        if (is_numeric($input)) {
            $input = strrev($input);
            $mask = strrev($mask);
        }

        $maskared = '';
        $k = 0;
        $i = -1;
        $length = mb_strlen($mask);
        while (++$i < $length) {
            if ($mask[$i] == '#' && isset($input[$k]))
                $maskared .= $input[$k++];
            else if ($mask[$i] == '0')
                $maskared .= (isset($input[$k]) ? $input[$k++] : $mask[$i]);
            else if (isset($mask[$i]))
                $maskared .= $mask[$i];
        }
        return is_numeric($input) ? strrev($maskared) : $maskared;
    }

    /**
     * Number Format
     * @param float|double|int|string $number
     * @param string $mask
     * @return string 
     */
    static public function decimal($number, $mask) {
        $pointPos = strpos($mask, '.');
        $commaPos = strpos($mask, ',');

        $decimalPoint = ((int) $pointPos > (int) $commaPos ? '.' : ',');
        $thousandsSep = (($pointPos === false OR $commaPos === false) ? '' : (($decimalPoint == '.') ? ',' : '.'));
        $decimals = mb_strlen(substr($mask, ((int) $pointPos > (int) $commaPos ? $pointPos : $commaPos) + 1));

        return number_format($number, $decimals, $decimalPoint, $thousandsSep);
    }

}