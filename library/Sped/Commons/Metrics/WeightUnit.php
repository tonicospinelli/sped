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
class WeightUnit
{

    /**
     * Retorna a instância de grama.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function gram()
    {
        return new Unit('g', 1);
    }

    /**
     * Retorna a instância de decigrama.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function decigram()
    {
        return new Unit('dg', 10);
    }

    /**
     * Retorna a instância de centigrama.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function centigram()
    {
        return new Unit('cg', 100);
    }

    /**
     * Retorna a instância de decagrama.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function dekagram()
    {
        return new Unit('dg', 0.1);
    }

    /**
     * Retorna a instância de hectograma.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function hectogram()
    {
        return new Unit('hg', 0.01);
    }

    /**
     * Retorna a instância de quilograma.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function kilogram()
    {
        return new Unit('kg', 0.001);
    }

    /**
     * Retorna a instância de megagrama.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function megagram()
    {
        return new Unit('Mg', 1.0E-006);
    }

    /**
     * Retorna a instância de micrograma.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function microgram()
    {
        return new Unit('ug', 1000000);
    }

    /**
     * Retorna a instância de miligrama.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function miligram()
    {
        return new Unit('mg', 1000);
    }

    /**
     * Retorna a instância de nanograma.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function nanogram()
    {
        return new Unit('ng', 1.E-009);
    }

    /**
     * Retorna a instância de picograma.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function picogram()
    {
        return new Unit('pg', 1.0E-012);
    }

    /**
     * Retorna a instância de tonelada.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function tonne()
    {
        return new Unit('t', 1.0E-006);
    }

    /**
     * Retorna a instância.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function metricTon()
    {
        return new Unit('mt', 1.0E-006);
    }

    /**
     * Retorna a instância.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function shortTon()
    {
        return new Unit('st', 1.102E-006);
    }

    /**
     * Retorna a instância de onça.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function once()
    {
        return new Unit('oz', 0.035273962);
    }

    /**
     * Retorna a instância da área base.
     * @return \Sped\Commons\Metrics\Unit
     */
    public static function base()
    {
        return self::gram();
    }

}