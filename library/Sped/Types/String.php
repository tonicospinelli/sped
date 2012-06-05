<?php

/**
 * Sped_Types_String works.
 * @name Sped_Types_String
 * @package Bem
 * @subpackage Sistema
 * @author Antonio O. Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 06/03/2012
 * @property protected $value String value.
 * @property public $length String Length.
 */
class Sped_Types_String extends Sped_Types_ATypes
{

    const _EMPTY = '';

    public $length;

    /**
     * Construct the String Object.
     * @param mixed $value 
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }

    public function __toString()
    {
        return $this->getValue();
    }

    public function __invoke()
    {
        return $this->getValue();
    }

    /**
     * Set the new string value.
     *
     * @param mixed $value
     * @param string $glue The array of strings to implode.
     * @return Sped_Types_String 
     */
    public function setValue($value, $glue = '')
    {
        if (is_array($value))
            $value = implode($glue, $value);

        elseif (is_bool($value))
            $value = $value ? 'true' : 'false';
        elseif ($value instanceof Sped_Types_String)
            $value = $value->getValue();

        $this->value = (string) $value;
        $this->length = mb_strlen($value);
        return $this;
    }

    /**
     * Limpar o valor.
     * @return Sped_Types_String 
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
     * @return Sped_Types_String
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
     * @return Sped_Types_String
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
     * @return Sped_Types_String
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
     * @return Sped_Types_String 
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
     * @return Sped_Types_String
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
     * @return Sped_Types_String
     */
    public function replaceRegExp($search, $replace)
    {
        $this->setValue(preg_replace($search, $replace, $this->getValue()));
        return $this;
    }

    /**
     * Strip whitespace from the beginning and end of a string.
     * @return Sped_Types_String
     */
    public function trim()
    {
        $this->setValue(trim($this->getValue()));
        return $this;
    }

    /**
     * Strip whitespace from the beginning of a string.
     * @return Sped_Types_String
     */
    public function trimStart()
    {
        $this->setValue(preg_replace("/^[\s]+/", '', $this->getValue()));
        return $this;
    }

    /**
     * Strip whitespace from the end of a string.
     * @return Sped_Types_String
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
     * @return Sped_Types_String
     */
    public function repeat($char, $length)
    {
        $this->setValue(str_repeat($char, $length));
        return $this;
    }

    /**
     * Calculate the similarity between the current value and param string.
     * @param string $toCompare Sped_Types_String to compare.
     * @return float Returns the percent similarity for you.
     */
    public function getSimilarity($toCompare)
    {
        $percents = (float) 0;
        similar_text($this->getValue(), $toCompare, $percents);
        return $percents;
    }

    /**
     * Get left part of string
     * @param int $start Position of first character to use from string.
     * @param int $offset [optional]<br/>Maximum number of characters to use from str.
     * @return Sped_Types_String
     */
    public function left($start, $offset = null)
    {
        return $this->substring($start, $offset);
    }

    /**
     * Get right part of a string
     * @param int $start Position of first character to use from string.
     * @param int $offset [optional]<br/>Maximum number of characters to use from str.
     * @return Sped_Types_String
     */
    public function right($start, $offset = null)
    {
        return $this->substring(($start * -1), $offset);
    }

    /**
     * Get middle part of a string
     * @param int $start Position of first character to use from string.
     * @param int $offset Maximum number of characters to use from str.
     * @return Sped_Types_String
     */
    public function substring($start, $offset = null)
    {
        $value = new Sped_Types_String(mb_substr($this->getValue(), $start, $offset));
        return $value;
    }

    /**
     * Convert a string to an array.
     * @param string|boolean $delimiter If delimiter is false, split by letters.
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
     * @return Sped_Types_String
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
    static public function isNullOrEmpty($value = null)
    {
        if ($value instanceof Sped_Types_String)
            $value = $value->getValue();
        return is_null($value) OR empty($value);
    }

    /**
     * Creates the string representation of a specified object.
     * @param mixed $args Many args to concatenate.
     * @return Sped_Types_String
     */
    public function concat($args)
    {
        $args = func_get_args();

        foreach ($args as $key => $value) {
            $args[$key] = new Sped_Types_String($value);
        }
        $str = new Sped_Types_String($args);
        $this->setValue("{$this}{$str}");
        return $this;
    }

    /**
     * Indicating whether the specified Sped_Types_String object occurs within this string.
     * @param string $needle
     * @return boolean
     */
    public function contains($needle)
    {
        return $this->getPosition($needle) !== false;
    }

    /**
     * Indicating whether the specified Sped_Types_String object occurs within this string.
     * @param string $needle Regular Expression
     * @return boolean
     */
    public function containsRegExp($needle)
    {
        return preg_match($needle, $this->getValue()) ? true : false;
    }

    /**
     * Indicating whether the specified Sped_Types_String object end occurs within this string.
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
     * Indicating whether the specified Sped_Types_String object start occurs within this string.
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
     * @param mixed $firsSped_Types_String First string to compare.
     * @param mixed $secondString Second string to compare.
     * @return boolean
     */
    static public function equals($firsSped_Types_String, $secondString)
    {
        if (!$firsSped_Types_String instanceof Sped_Types_String)
            $firsSped_Types_String = new Sped_Types_String($firsSped_Types_String);
        if (!$secondString instanceof Sped_Types_String)
            $secondString = new Sped_Types_String($secondString);
        return $firsSped_Types_String->getValue() === $secondString->getValue();
    }

    /**
     * Finds whether a variable is equals.
     * @param mixed $string
     * @return boolean
     */
    public function equalsTo($string)
    {
        if (!$string instanceof Sped_Types_String)
            $strSecond = new Sped_Types_String($string);
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
     * @return Sped_Types_String
     */
    public function toLower()
    {
        $this->setValue(strtolower($this->getValue()));
        return $this;
    }

    /**
     * Make a string uppercase.
     * @return Sped_Types_String
     */
    public function toUpper()
    {
        $this->setValue(strtoupper($this->getValue()));
        return $this;
    }

    /**
     * Uppercase the first character of each word in a string.
     * @return Sped_Types_String
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

    public function reverse()
    {
        return $this->setValue(strrev($this->getValue()));
    }

}