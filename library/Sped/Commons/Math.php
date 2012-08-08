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
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Math
{

    /**
     * Absolute value.
     * @link http://php.net/manual/en/function.abs.php
     * @param mixed $number <p>The numeric value to process</p>
     * @return number The absolute value of <i>number</i>. If the
     * argument <i>number</i> is
     * of type float, the return type is also float,
     * otherwise it is integer (as float usually has a
     * bigger value range than integer).
     */
    public static function abs($number)
    {
        return abs($number);
    }

    /**
     * Arc cosine.
     * @link http://php.net/manual/en/function.acos.php
     * @param float $number <p>The argument to process</p>
     * @return float The arc cosine of <i>number</i> in radians.
     */
    public static function acos($number)
    {
        return acos($number);
    }

    /**
     * Inverse hyperbolic cosine.
     * @link http://php.net/manual/en/function.acosh.php
     * @param float $number <p>The value to process</p>
     * @return float The inverse hyperbolic cosine of <i>number</i>
     */
    public static function acosh($number)
    {
        return acosh($number);
    }

    /**
     * Arc sine.
     * @link http://php.net/manual/en/function.asin.php
     * @param float $number <p>The argument to process</p>
     * @return float The arc sine of <i>number</i> in radians
     */
    public static function asin($number)
    {
        return asin($number);
    }

    /**
     * Inverse hyperbolic sine.
     * @link http://php.net/manual/en/function.asinh.php
     * @param float $number <p>The argument to process</p>
     * @return float The inverse hyperbolic sine of <i>number</i>
     */
    public static function asinh($number)
    {
        return asinh($number);
    }

    /**
     * Arc tangent of two variables.
     * @link http://php.net/manual/en/function.atan2.php
     * @param float $y <p>Dividend parameter</p>
     * @param float $x <p>Divisor parameter</p>
     * @return float The arc tangent of <i>y</i>/<i>x</i>
     * in radians.
     */
    public static function atan2($y, $x)
    {
        return atan2($y, $x);
    }

    /**
     * Arc tangent.
     * @link http://php.net/manual/en/function.atan.php
     * @param float $number <p>The argument to process</p>
     * @return float The arc tangent of <i>number</i> in radians.
     */
    public static function atan($number)
    {
        return atan($number);
    }

    /**
     * Inverse hyperbolic tangent.
     * @link http://php.net/manual/en/function.atanh.php
     * @param float $number <p>The argument to process</p>
     * @return float Inverse hyperbolic tangent of <i>number</i>
     */
    public static function atanh($number)
    {
        return atanh($number);
    }

    /**
     * Convert a number between arbitrary bases.
     * @link http://php.net/manual/en/function.base-convert.php
     * @param string $number <p>The number to convert</p>
     * @param int $frombase <p>The base <i>number</i> is in.</p>
     * @param int $tobase <p>The base to convert <i>number</i> to.</p>
     * @return string <i>number</i> converted to base <i>tobase</i>
     */
    public static function base_convert($number, $fromBase, $toBase)
    {
        return base_convert($number, $fromBase, $toBase);
    }

    /**
     * Binary to decimal.
     * @link http://php.net/manual/en/function.bindec.php
     * @param string $binary_string <p>The binary string to convert.</p>
     * @return number The decimal value of <i>binary_string</i>
     */
    public static function binaryToDecimal($binaryString)
    {
        return bindec($binaryString);
    }

    /**
     * Round fractions up.
     * @link http://php.net/manual/en/function.ceil.php
     * @param float $value <p>The value to round.</p>
     * @return float <i>value</i> rounded up to the next highest integer.
     * The return value of <b>ceil</b> is still of type
     * float as the value range of float is
     * usually bigger than that of integer.
     */
    public static function ceil($binaryString)
    {
        return ceil($binaryString);
    }

    /**
     * Cosine.
     * @link http://php.net/manual/en/function.cos.php
     * @param float $number <p>An angle in radians.</p>
     * @return float The cosine of <i>number</i>
     */
    public static function cos($number)
    {
        return cos($number);
    }

    /**
     * Hyperbolic cosine.
     * @link http://php.net/manual/en/function.cosh.php
     * @param float $number <p>The argument to process</p>
     * @return float The hyperbolic cosine of <i>number</i>
     */
    public static function cosh($number)
    {
        return cosh($number);
    }

    /**
     * Decimal to binary.
     * @link http://php.net/manual/en/function.decbin.php
     * @param int $number <p>Decimal value to convert</p>
     * <table>
     *   Range of inputs on 32-bit machines
     *   <tr valign="top">
     *     <td>positive <i>number</i></td>
     *     <td>negative <i>number</i></td>
     *     <td>return value</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>0</td>
     *     <td></td>
     *     <td>0</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>1</td>
     *     <td></td>
     *     <td>1</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>2</td>
     *     <td></td>
     *     <td>10</td>
     *   </tr>
     *   <tr valign="top">
     *   ... normal progression ...</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>2147483646</td>
     *     <td></td>
     *     <td>1111111111111111111111111111110</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>2147483647 (largest signed integer)</td>
     *     <td></td>
     *     <td>1111111111111111111111111111111 (31 1's)</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>2147483648</td>
     *     <td>-2147483648</td>
     *     <td>10000000000000000000000000000000</td>
     *   </tr>
     *   <tr valign="top">
     *     ... normal progression ...</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>4294967294</td>
     *     <td>-2</td>
     *     <td>11111111111111111111111111111110</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>4294967295 (largest unsigned integer)</td>
     *     <td>-1</td>
     *     <td>11111111111111111111111111111111 (32 1's)</td>
     *   </tr>
     * </table>
     * <table>
     *   Range of inputs on 64-bit machines
     *   <tr valign="top">
     *     <td>positive <i>number</i></td>
     *     <td>negative <i>number</i></td>
     *     <td>return value</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>0</td>
     *     <td></td>
     *     <td>0</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>1</td>
     *     <td></td>
     *     <td>1</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>2</td>
     *     <td></td>
     *     <td>10</td>
     *   </tr>
     *   <tr valign="top">
     *     ... normal progression ...</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>9223372036854775806</td>
     *     <td></td>
     *     <td>111111111111111111111111111111111111111111111111111111111111110</td>
     *   </tr>
     *   <tr valign="top">
     *     <td>9223372036854775807 (largest signed integer)</td>
     *     <td></td>
     *     <td>111111111111111111111111111111111111111111111111111111111111111 (63 1's)</td>
     *   </tr>
     *   <tr valign="top">
     *     <td></td>
     *     <td>-9223372036854775808</td>
     *     <td>1000000000000000000000000000000000000000000000000000000000000000</td>
     *   </tr>
     *   <tr valign="top">
     *     ... normal progression ...</td>
     *   </tr>
     *   <tr valign="top">
     *     <td></td>
     *     <td>-2</td>
     *     <td>1111111111111111111111111111111111111111111111111111111111111110</td>
     *   </tr>
     *   <tr valign="top">
     *     <td></td>
     *     <td>-1</td>
     *     <td>1111111111111111111111111111111111111111111111111111111111111111 (64 1's)</td>
     *   </tr>
     * </table>
     * @return string Binary string representation of <i>number</i>
     */
    public static function decimalToBinary($number)
    {
        return decbin($number);
    }

    /**
     * Decimal to hexadecimal.
     * @link http://php.net/manual/en/function.dechex.php
     * @param int $number <p>Decimal value to convert</p>
     * @return string Hexadecimal string representation of <i>number</i>
     */
    public static function decimalToHexadecimal($number)
    {
        return dechex($number);
    }

    /**
     * Decimal to octal.
     * @link http://php.net/manual/en/function.decoct.php
     * @param int $number <p>Decimal value to convert.</p>
     * @return string Octal string representation of <i>number</i>
     */
    public static function decimalToOctal($number)
    {
        return decoct($number);
    }

    /**
     * Calculates the exponent of <b>e</b>.
     * @link http://php.net/manual/en/function.exp.php
     * @param float $number <p>The argument to process</p>
     * @return float 'e' raised to the power of <i>number</i>
     */
    public static function exp($number)
    {
        return exp($number);
    }

    /**
     * Round fractions down.
     * @link http://php.net/manual/en/function.floor.php
     * @param float $number <p>The numeric value to round</p>
     * @return float <i>number</i> rounded to the next lowest integer.
     * The return value of <b>floor</b> is still of type
     * float because the value range of float is
     * usually bigger than that of integer.
     */
    public static function floor($number)
    {
        return floor($number);
    }

    /**
     * Hexadecimal to decimal.
     * @link http://php.net/manual/en/function.hexdec.php
     * @param string $hex_string <p>The hexadecimal string to convert</p>
     * @return number The decimal representation of <i>hex_string</i>
     */
    public static function hexadecimalToDecimal($number)
    {
        return hexdec($number);
    }

    /**
     * Calculate the length of the hypotenuse of a right-angle triangle.
     * @link http://php.net/manual/en/function.hypot.php
     * @param float $x <p>Length of first side</p>
     * @param float $y <p>Length of second side</p>
     * @return float Calculated length of the hypotenuse
     */
    public static function hypot($x, $y)
    {
        return hypot($x, $y);
    }

    /**
     * Finds whether a value is a legal finite number.
     * @link http://php.net/manual/en/function.is-finite.php
     * @param float $number <p>The value to check</p>
     * @return bool true if <i>number</i> is a legal finite
     * number within the allowed range for a PHP float on this platform,
     * else false.
     */
    public static function isFinite($number)
    {
        return is_finite($number);
    }

    /**
     * Finds whether a value is infinite.
     * @link http://php.net/manual/en/function.is-infinite.php
     * @param float $val <p>The value to check</p>
     * @return bool true if <i>val</i> is infinite, else false.
     */
    public static function isInfinite($number)
    {
        return is_infinite($number);
    }

    /**
     * Finds whether a value is not a number.
     * @link http://php.net/manual/en/function.is-nan.php
     * @param float $val <p>The value to check</p>
     * @return bool true if <i>val</i> is 'not a number',
     * else false.
     */
    public static function isNan($number)
    {
        return is_nan($number);
    }

    /**
     * Base-10 logarithm.
     * @link http://php.net/manual/en/function.log10.php
     * @param float $number <p>
     * The argument to process
     * </p>
     * @return float The base-10 logarithm of <i>number</i>
     */
    public static function log10($number)
    {
        return log10($number);
    }

    /**
     * Returns log(1 + number), computed in a way that is accurate even when
     * the value of number is close to zero.
     * @link http://php.net/manual/en/function.log1p.php
     * @param float $number <p>The argument to process</p>
     * @return float log(1 + <i>number</i>)
     */
    public static function log1p($number)
    {
        return log1p($number);
    }

    /**
     * Natural logarithm.
     * @link http://php.net/manual/en/function.log.php
     * @param float $number <p>The value to calculate the logarithm for</p>
     * @param float $base [optional] <p>
     * The optional logarithmic base to use
     * (defaults to 'e' and so to the natural logarithm).
     * </p>
     * @return float The logarithm of <i>number</i> to
     * <i>base</i>, if given, or the
     * natural logarithm.
     */
    public static function log($number, $base = 'M_E')
    {
        return log($number, $base);
    }

    /**
     * Find highest value.
     * @link http://php.net/manual/en/function.max.php
     * @param array $numbers <p>An array containing the values.</p>
     * @return mixed <b>max</b> returns the numerically highest of the
     * parameter values. If multiple values can be considered of the same size,
     * the one that is listed first will be returned.
     * </p>
     * <p>
     * When <b>max</b> is given multiple arrays, the
     * longest array is returned. If all the arrays have the same length,
     * <b>max</b> will use lexicographic ordering to find the return
     * value.
     * </p>
     * <p>When given a string it will be cast as an integer when comparing.</p>
     */
    public static function max($numbers)
    {
        return max($numbers);
    }

    /**
     * Find lowest value.
     * @link http://php.net/manual/en/function.min.php
     * @param array $numbers <p>An array containing the values.</p>
     * @return mixed <b>min</b> returns the numerically lowest of the
     * parameter values.
     */
    public static function min($numbers)
    {
        return min($numbers);
    }

    /**
     * Octal to decimal.
     * @link http://php.net/manual/en/function.octdec.php
     * @param string $number <p>The octal string to convert</p>
     * @return number The decimal representation of <i>number</i>
     */
    public static function octalToDecimal($number)
    {
        return octdec($number);
    }

    /**
     * Get value of pi.
     * @link http://php.net/manual/en/function.pi.php
     * @return float The value of pi as float.
     */
    public static function pi()
    {
        return pi();
    }

    /**
     * Exponential expression.
     * @link http://php.net/manual/en/function.pow.php
     * @param number $base <p>
     * The base to use
     * </p>
     * @param number $exponent <p>
     * The exponent
     * </p>
     * @return number <i>base</i> raised to the power of <i>exponent</i>.
     * If the result can be represented as integer it will be returned as type
     * integer, else it will be returned as type float.
     */
    public static function pow($base, $exponent)
    {
        return pow($base, $exponent);
    }

    /**
     * Generate a random integer.
     * @link http://php.net/manual/en/function.rand.php
     * @param $min [optional]
     * @param $max [optional]
     * @return int A pseudo random value between <i>min</i>
     * (or 0) and <i>max</i> (or <b>getrandmax</b>, inclusive).
     */
    public static function random($min = 0, $max = null)
    {
        $max = (is_null($max) ? mt_getrandmax() : $max);
        return mt_rand($min, $max);
    }

    /**
     * Rounds a float.
     * @link http://php.net/manual/en/function.round.php
     * @param float $number <p>
     * The value to round
     * </p>
     * @param int $precision [optional] <p>
     * The optional number of decimal digits to round to.
     * </p>
     * @param int $mode [optional] <p>
     * One of <b>PHP_ROUND_HALF_UP</b>,
     * <b>PHP_ROUND_HALF_DOWN</b>,
     * <b>PHP_ROUND_HALF_EVEN</b>, or
     * <b>PHP_ROUND_HALF_ODD</b>.
     * </p>
     * @return float The rounded value
     */
    public static function round($number, $precision = 0, $mode = 'PHP_ROUND_HALF_UP')
    {
        return round($number, $precision, $mode);
    }

    /**
     * Sine.
     * @link http://php.net/manual/en/function.sin.php
     * @param float $number <p>A value in radians</p>
     * @return float The sine of <i>number</i>
     */
    public static function sin($number)
    {
        return sin($number);
    }

    /**
     * Hyperbolic sine.
     * @link http://php.net/manual/en/function.sinh.php
     * @param float $number <p>The argument to process</p>
     * @return float The hyperbolic sine of <i>number</i>
     */
    public static function sinh($number)
    {
        return sinh($number);
    }

    /**
     * Square root.
     * @link http://php.net/manual/en/function.sqrt.php
     * @param float $number <p>The argument to process</p>
     * @return float The square root of <i>number</i>
     * or the special value NAN for negative numbers.
     */
    public static function sqrt($number)
    {
        return sqrt($number);
    }

    /**
     * Tangent.
     * @link http://php.net/manual/en/function.tan.php
     * @param float $number <p>The argument to process in radians</p>
     * @return float The tangent of <i>number</i>
     */
    public static function tan($number)
    {
        return tan($number);
    }

    /**
     * Hyperbolic tangent.
     * @link http://php.net/manual/en/function.tanh.php
     * @param float $number <p>The argument to process</p>
     * @return float The hyperbolic tangent of <i>number</i>
     */
    public static function tanh($number)
    {
        return tanh($number);
    }

    /**
     * Converts the radian number to the equivalent number in degrees
     * @link http://php.net/manual/en/function.rad2deg.php
     * @param float $angleRadians <p>A radian value</p>
     * @return float The equivalent of <i>angleRadians</i> in degrees
     */
    public static function toDegrees($angleRadians)
    {
        return rad2deg($angleRadians);
    }

    /**
     * Converts the number in degrees to the radian equivalent.
     * @link http://php.net/manual/en/function.deg2rad.php
     * @param float $angleRadians <p>Angular value in degrees</p>
     * @return float The radian equivalent of <i>angleDegrees</i>
     */
    public static function toRadians($angleDegrees)
    {
        return deg2rad($angleDegrees);
    }

}