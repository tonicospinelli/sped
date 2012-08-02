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
class AreaUnit
{

    /**
     * Retorna a instância de metro quadrado (m²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareMeter()
    {
        return new Unit('m²', 1);
    }

    /**
     * Retorna a instância de acre (ac).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function acre()
    {
        return new Unit('ac', 0.000247105);
    }

    /**
     * Retorna a instância de are (a).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function are()
    {
        return new Unit('a', 0.01);
    }

    /**
     * Retorna a instância de Alqueire Mineiro.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function alqueresMineiro()
    {
        return new Unit('Alqueire Mineiro', 0.00020661157);
    }

    /**
     * Retorna a instância de Alqueres do Norte.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function alqueresNorte()
    {
        return new Unit('Alqueires do Norte', 0.000367309458);
    }

    /**
     * Retorna a instância de Alqueres Paulista.
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function alqueresPaulista()
    {
        return new Unit('Alqueires Paulista', 0.00041322314);
    }

    /**
     * Retorna a instância de bracas quadradas (br²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareBracas()
    {
        return new Unit('br²', 0.000327653997);
    }

    /**
     * Retorna a instância de braças sesmaria (br sesmaria).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function bracasSesmaria()
    {
        return new Unit('br sesmaria', 0.000327653997);
    }

    /**
     * Retorna a instância de hectares (ha).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function hectare()
    {
        return new Unit('ha', 0.0001);
    }

    /**
     * Retorna a instância de jardas quadradas (yd²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareYard()
    {
        return new Unit('yd²', 1.195990046);
    }

    /**
     * Retorna a instância de milhas quadradas (mi²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareMile()
    {
        return new Unit('mi²', 3.861021585E-006);
    }

    /**
     * Retorna a instância de pés quadradas (ft²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareFoot()
    {
        return new Unit('ft²', 10.763910417);
    }

    /**
     * Retorna a instância de quadras quadradas(qq²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareQuadras()
    {
        return new Unit('qq²', 0.000573921028);
    }

    /**
     * Retorna a instância de kilômetro quadrado (km²).
     * @return \Sped\Commons\Metrics\Unit 
     */
    public static function squareKilometer()
    {
        return new Unit('km²', 1.0E-006);
    }

    /**
     * Retorna a instância da área base.
     * @return \Sped\Commons\Metrics\Unit
     */
    public static function base()
    {
        return self::squareMeter();
    }

}