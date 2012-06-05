<?php

/**
 * //TODO: adicionar descrição da classe Mask
 * @name Mask
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
class Sped_Common_Mask
{

    /**
     * Mask the string.
     * @param string|int $input
     * @param string $mask
     * @return string 
     */
    static public function exec($input, $mask)
    {
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
    static public function decimal($number, $mask)
    {
        $pointPos = strpos($mask, '.');
        $commaPos = strpos($mask, ',');

        $decimalPoint = ((int) $pointPos > (int) $commaPos ? '.' : ',');
        $thousandsSep = (($pointPos === false OR $commaPos === false) ? '' : (($decimalPoint == '.') ? ',' : '.'));
        $decimals = mb_strlen(substr($mask, ((int) $pointPos > (int) $commaPos ? $pointPos : $commaPos) + 1));

        return number_format($number, $decimals, $decimalPoint, $thousandsSep);
    }

}