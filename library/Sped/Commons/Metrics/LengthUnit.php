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
class LengthUnit
{

    /**
     * Retorna a instância de metro.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function meter()
    {
        return new Unit('m', 1);
    }

    /**
     * Retorna a instância de braça.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function brace()
    {
        return new Unit('br', 0.546806649);
    }

    /**
     * Retorna a instância de cadeia.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function cadeia()
    {
        return new Unit('ca', 0.0497096954);
    }

    /**
     * Retorna a instância de jarda.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function yard()
    {
        return new Unit('y', 1.093613298);
    }

    /**
     * Retorna a instância de milha.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function mile()
    {
        return new Unit('mi', 0.000621371);
    }

    /**
     * Retorna a instância de milha nautica.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function nauticMile()
    {
        return new Unit('nmi', 0.000539956803);
    }

    /**
     * Retorna a instância de pé.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function feet()
    {
        return new Unit('f', 3.280839895);
    }

    /**
     * Retorna a instância de polegada.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function inch()
    {
        return new Unit('in', 39.370078739999997);
    }

    /**
     * Retorna a instância de polegada.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function kilometer()
    {
        return new Unit('km', 0.001);
    }

}