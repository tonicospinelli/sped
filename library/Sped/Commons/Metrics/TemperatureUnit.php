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

namespace Sped\Commons\Metrics;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class TemperatureUnit
{

    /**
     * Retorna a instância da temperatura celsius.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function celsius()
    {
        return new Unit('C', 0);
    }

    /**
     * Retorna a instância da temperatura fahrenheit.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function fahrenheit()
    {
        return new Unit('F', 32);
    }

    /**
     * Retorna a instância da temperatura rankine.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function rankine()
    {
        return new Unit('Ra', 491.67000000000002);
    }

    /**
     * Retorna a instância da temperatura reaumur.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function reaumur()
    {
        return new Unit('Ré', 0);
    }

    /**
     * Retorna a instância da temperatura kelvin.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function kelvin()
    {
        return new Unit('Ré', 273.14999999999998);
    }

    /**
     * Retorna a instância da área base.
     * @return \Sped\Commons\Metrics\Unit
     */
    public static function base()
    {
        return self::celsius();
    }

}