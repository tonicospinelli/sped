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
class VelocityUnit
{

    /**
     * Retorna a instância de quilometro por hora.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function kilometersPerHour()
    {
        return new Unit('km/h', 1);
    }

    /**
     * Retorna a instância de metro por segundo.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function metersPerSecond()
    {
        return new Unit('m/s', 0.27777);
    }

    /**
     * Retorna a instância de milhas por hora.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function milesPerHour()
    {
        return new Unit('mi/h', 1.609);
    }

    /**
     * Retorna a instância de milhas nauticas por hora.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function nauticMilesPerHour()
    {
        return new Unit('nmi/h', 1.852);
    }

    /**
     * Retorna a instância da área base.
     * @return Unit
     */
    public static function base()
    {
        return self::kilometersPerHour();
    }

}