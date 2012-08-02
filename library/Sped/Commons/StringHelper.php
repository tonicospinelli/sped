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
class StringHelper
{

    const _EMPTY = '';

    /**
     * String value.
     * @var string
     */
    protected $value;

    /**
     * String length.
     * @var int
     */
    public $length;

    /**
     * Construct the \Sped\Commons\String Object.
     * @param mixed $value 
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }

    /**
     * Convert a string para um tipo inteiro.
     * @return integer
     */
    public function toInteger()
    {
        return (int) $this->toString();
    }

    /**
     * 
     * @return string
     */
    public function toString()
    {
        return $this->__toString();
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Define um novo valor.
     * @param mixed $value
     * @param string $glue The array of strings to implode.
     * @return \Sped\Commons\StringHelper 
     */
    public function setValue($value, $glue = '')
    {
        if (is_array($value))
            $value = implode($glue, $value);
        elseif (is_bool($value))
            $value = $value ? 'true' : 'false';
        elseif ($value instanceof \Sped\Commons\StringHelper)
            $value = $value->toString();

        $this->value = (string) $value;
        $this->length = mb_strlen($value);
        return $this;
    }

    /**
     * Limpar o valor.
     * @return \Sped\Commons\StringHelper 
     */
    public function clear()
    {
        $this->setValue(self::_EMPTY);
        return $this;
    }

    /**
     * Pad Left a string to a certain length with another string.
     * @param string $char The char may be truncated if the required number of padding characters can't be evenly divided by the char's length.
     * @param int $length If the value of length is negative, less than, or equal to the length of the input string, no padding takes place.
     * @return \Sped\Commons\StringHelper
     */
    public function padLeft($char, $length)
    {
        $this->setValue(str_pad($this->getValue(), $length, $char, STR_PAD_LEFT));
        return $this;
    }

    /**
     * Pad Right a string to a certain length with another string.
     * @param string $char The char may be truncated if the required number of padding characters can't be evenly divided by the char's length.
     * @param int $length If the value of length is negative, less than, or equal to the length of the input string, no padding takes place.
     * @return \Sped\Commons\StringHelper
     */
    public function padRight($char, $length)
    {
        $this->setValue(str_pad($this->getValue(), $length, $char, STR_PAD_RIGHT));
        return $this;
    }

    /**
     * Pad Both a string to a certain length with another string.
     * @param string $char The char may be truncated if the required number of padding characters can't be evenly divided by the char's length.
     * @param int $length If the value of length is negative, less than, or equal to the length of the input string, no padding takes place.
     * @return \Sped\Commons\StringHelper
     */
    public function padBoth($char, $length)
    {
        $this->setValue(str_pad($this->getValue(), $length, $char, STR_PAD_BOTH));
        return $this;
    }

    /**
     * Convert string to requested character encoding
     * @param string $in
     * @param string $out
     * @return \Sped\Commons\StringHelper 
     */
    public function normalize($in = 'UTF-8', $out = 'ASCII')
    {
        setlocale(LC_CTYPE, 'en_US');
        $value = iconv($in, $out . '//TRANSLIT', $this->getValue());
        $value = preg_replace("/[^\w\s\(\)\/\"\-\+\_\[\]]/i", '', $value);
        $this->setValue($value);
        return $this;
    }

    /**
     * Find position of first occurrence of a string 
     * @param string $needle If needle is not a string, it is converted to an integer and applied as the ordinal value of a character.
     * @param int $occurrences [optional]<br/>The optional number occurrences parameter allows you to specify which character in haystack to start searching.
     * @return int|boolean the position as an integer. If needle is not found, strpos will return boolean false.
     */
    public function getPosition($needle, $occurrences = 1)
    {
        $lastPosisition = mb_strpos($this->getValue(), $needle);

        while (--$occurrences > 0)
            $lastPosisition = mb_strpos($this->getValue(), $needle, ++$lastPosisition);

        return $lastPosisition;
    }

    /**
     * Replace all occurrences of the search string with the replacement string
     * @param mixed $search The value being searched for, otherwise known as the needle.<br/>An array may be used to designate multiple needles.
     * @param mixed $replace The replacement value that replaces found search values.<br/>An array may be used to designate multiple replacements.
     * @return \Sped\Commons\StringHelper
     */
    public function replace($search, $replace)
    {
        $this->setValue(str_replace($search, $replace, $this->getValue()));
        return $this;
    }

    /**
     * Replace all occurrences of the search string with the replacement string
     * @param mixed $search The value being searched for, otherwise known as the needle.<br/>An array may be used to designate multiple needles.
     * @param mixed $replace The replacement value that replaces found search values.<br/>An array may be used to designate multiple replacements.
     * @return \Sped\Commons\StringHelper
     */
    public function replaceRegExp($search, $replace)
    {
        $this->setValue(preg_replace($search, $replace, $this->getValue()));
        return $this;
    }

    /**
     * Strip whitespace from the beginning and end of a string.
     * @return \Sped\Commons\StringHelper
     */
    public function trim()
    {
        $this->setValue(trim($this->getValue()));
        return $this;
    }

    /**
     * Strip whitespace from the beginning of a string.
     * @return \Sped\Commons\StringHelper
     */
    public function trimStart()
    {
        $this->setValue(preg_replace("/^[\s]+/", '', $this->getValue()));
        return $this;
    }

    /**
     * Strip whitespace from the end of a string.
     * @return \Sped\Commons\StringHelper
     */
    public function trimEnd()
    {
        $this->setValue(preg_replace("/[\s]+$/", '', $this->getValue()));
        return $this;
    }

    public function trimExtraSpaces()
    {
        $this->setValue(preg_replace("/\s[\s]+/", '', $this->getValue()));
        return $this;
    }

    /**
     * Repeat a string.
     * @param string $char The string to be repeated.
     * @param int $length Number of time the input string should be repeated. Length has to be greater than or equal to 0. If the length is set to 0, the function will return an empty string.
     * @return \Sped\Commons\StringHelper
     */
    public function repeat($char, $length)
    {
        $this->setValue(str_repeat($char, $length));
        return $this;
    }

    /**
     * Calculate the similarity between the current value and param string.
     * @param string $toCompare \Sped\Commons\String to compare.
     * @return float Returns the percent similarity for you.
     */
    public function getSimilarity($toCompare)
    {
        $percents = (float) 0;
        similar_text($this->getValue(), $toCompare, $percents);
        return $percents;
    }

    /**
     * Get left part of string.
     * @param int $length Maximum number of characters to get from string.
     * @return \Sped\Commons\StringHelper
     */
    public function left($length)
    {
        return $this->substring(0, $length);
    }

    /**
     * Get right part of a string.
     * @param int $length Maximum number of characters to get from string.
     * @return \Sped\Commons\StringHelper
     */
    public function right($length)
    {
        return $this->substring(($this->length - $length), $length);
    }

    /**
     * Get part of a string.
     * @param int $start Position of first character to use from string.
     * @param int $offset Maximum number of characters to use from str.
     * @return \Sped\Commons\StringHelper
     */
    public function substring($start, $offset = null)
    {
        $value = new \Sped\Commons\StringHelper(mb_substr($this->getValue(), $start, $offset));
        return $value;
    }

    /**
     * Convert a string to an array.
     * @param StringHelper|boolean $delimiter If delimiter is false, split by letters.
     * @return array
     */
    public function split($delimiter = false)
    {
        if ($delimiter !== false)
            return explode($delimiter, $this->getValue());
        return str_split($this->getValue());
    }

    /**
     * Convert a string to an words array.
     * @return array
     */
    public function splitWords()
    {
        return $this->split(' ');
    }

    /**
     * Join array elements with a string
     * @param array $pieces Defaults to an empty string. This is not the preferred usage of implode as glue would be the second parameter and thus, the bad prototype would be used.
     * @param string $glue The array of strings to implode.
     * @return \Sped\Commons\StringHelper
     */
    public function join(array $pieces, $glue = '')
    {
        $this->setValue($pieces, $glue);
        return $this;
    }

    /**
     * Finds whether a variable is null or empty
     * @param string $value The variable being evaluated.
     * @return boolean true if var is null or empty, false otherwise.
     */
    public static function isNullOrEmpty($value = null)
    {
        if ($value instanceof \Sped\Commons\StringHelper)
            $value = $value->getValue();
        return is_null($value) OR empty($value);
    }

    /**
     * Creates the string representation of a specified object.
     * @param mixed $args Many args to concatenate.
     * @return \Sped\Commons\StringHelper
     */
    public function concat($args)
    {
        $args = func_get_args();

        foreach ($args as $key => $value) {
            $args[$key] = new \Sped\Commons\StringHelper($value);
        }
        $str = new \Sped\Commons\StringHelper($args);
        $this->setValue("{$this}{$str}");
        return $this;
    }

    /**
     * Indicating whether the specified \Sped\Commons\String object occurs within this string.
     * @param string $needle
     * @return boolean
     */
    public function contains($needle)
    {
        return $this->getPosition($needle) !== false;
    }

    /**
     * Indicating whether the specified \Sped\Commons\String object occurs within this string.
     * @param string $needle Regular Expression
     * @return boolean
     */
    public function containsRegExp($needle)
    {
        return preg_match($needle, $this->getValue()) ? true : false;
    }

    /**
     * Indicating whether the specified \Sped\Commons\String object end occurs within this string.
     * @param string $needle
     * @return boolean 
     */
    public function endsWith($needle)
    {
        $normalize = array(
            '(' => '\(', ')' => '\)',
            '[' => '\[', ']' => '\]',
            '{' => '\{', '}' => '\}',
            '"' => '\"', '.' => '\.',
            "'" => "\'"
        );
        foreach ($normalize as $search => $replace)
            $needle = str_replace($search, $replace, $needle);
        return $this->containsRegExp("/{$needle}$/i");
    }

    /**
     * Indicating whether the specified \Sped\Commons\String object start occurs within this string.
     * @param string $needle
     * @return boolean 
     */
    public function startsWith($needle)
    {
        $normalize = array(
            '(' => '\(', ')' => '\)',
            '[' => '\[', ']' => '\]',
            '{' => '\{', '}' => '\}',
            '"' => '\"', '.' => '\.',
            "'" => "\'"
        );
        foreach ($normalize as $search => $replace)
            $needle = str_replace($search, $replace, $needle);
        return $this->containsRegExp("/^{$needle}/i");
    }

    /**
     * Finds whether a variable is equals.
     * @param mixed $firstString First string to compare.
     * @param mixed $secondString Second string to compare.
     * @return boolean
     */
    public static function equals($firstString, $secondString)
    {
        if (!$firstString instanceof \Sped\Commons\StringHelper)
            $firstString = new \Sped\Commons\StringHelper($firstString);
        if (!$secondString instanceof \Sped\Commons\StringHelper)
            $secondString = new \Sped\Commons\StringHelper($secondString);
        return $firstString->getValue() === $secondString->getValue();
    }

    /**
     * Finds whether a variable is equals.
     * @param mixed $string
     * @return boolean
     */
    public function equalsTo($string)
    {
        if (!$string instanceof \Sped\Commons\StringHelper)
            $strSecond = new \Sped\Commons\StringHelper($string);
        return $this->getValue() === $strSecond->getValue();
    }

    /**
     * Reports the zero-based index of the first occurrence of the specified Unicode character in this string.
     * @param string $needle
     * @return int
     */
    public function indexOf($needle)
    {
        return $this->getPosition($needle);
    }

    /**
     * Make a string lowercase.
     * @return \Sped\Commons\StringHelper
     */
    public function toLower()
    {
        $this->setValue(strtolower($this->getValue()));
        return $this;
    }

    /**
     * Make a string uppercase.
     * @return \Sped\Commons\StringHelper
     */
    public function toUpper()
    {
        $this->setValue(strtoupper($this->getValue()));
        return $this;
    }

    /**
     * Uppercase the first character of each word in a string.
     * @return \Sped\Commons\StringHelper
     */
    public function toUpperFirstCharWords()
    {
        $this->setValue(ucwords($this->getValue()));
        return $this;
    }

    /**
     * Alias to split.
     * string|boolean $delimiter If delimiter is false, split by letters.
     * @return array 
     */
    public function toArray($delimiter = false)
    {
        return $this->split($delimiter);
    }

    /**
     *
     *
     * @return \Sped\Commons\StringHelper
     */
    public function reverse()
    {
        return $this->setValue(strrev($this->getValue()));
    }

    /**
     *
     * @param mixed $var
     * @return \Sped\Commons\StringHelper 
     */
    public static function isNumeric($var)
    {
        if ($var instanceof StringHelper)
            $var = $var->getValue();
        return is_numeric($var);
    }

    /**
     *
     * @param mixed $var
     * @return \Sped\Commons\StringHelper 
     */
    public static function isInteger($var)
    {
        if ($var instanceof StringHelper)
            $var = $var->getValue();
        return is_int($var);
    }

    /**
     *
     * @param mixed $var
     * @return \Sped\Commons\StringHelper 
     */
    public static function isFloat($var)
    {
        if ($var instanceof StringHelper)
            $var = $var->getValue();
        return is_float($var);
    }

    public static function splitCamel($string)
    {
        return preg_split('/(?<=\\w)(?=[A-Z])/', $string);
    }

    /**
     * Append the new value.
     * @param mixed $var
     * @return \Sped\Commons\StringHelper 
     */
    public function append($var)
    {
        if (!$var instanceof StringHelper)
            $var = new StringHelper($var);
        $this->setValue($this->toString() . $var->toString());
        return $this;
    }

    /**
     * Prepend the new value.
     * @param mixed $var
     * @return \Sped\Commons\StringHelper 
     */
    public function prepend($var)
    {
        if (!$var instanceof StringHelper)
            $var = new StringHelper($var);
        $this->setValue($var->toString() . $this->toString());
        return $this;
    }

    public function insert($position, $var)
    {
        if (!$var instanceof StringHelper)
            $var = new StringHelper($var);

        $first = $this->left($position);
        $last = $this->right($this->length - $position);
        $this->setValue($first->toString() . $var->toString() . $last->toString());
        return $this;
    }

}