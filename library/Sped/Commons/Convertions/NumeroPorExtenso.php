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

namespace Sped\Commons\Convertions;

use \Sped\Commons\Collections\ArrayCollection;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class NumeroPorExtenso
{

    const OPERADOR_POSITIVO = '+';
    const OPERADOR_NEGATIVO = '-';

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $milhar;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $milhar_plural;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $centena;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $dezena;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $unidade;

    /**
     *
     * @var float
     */
    protected $value;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $allowScales;
    protected $negativePrefix;
    protected $negativeSufix;
    protected $positivePrefix;
    protected $positiveSufix;
    protected $isPositive = true;

    public function __construct($numero)
    {
        $this->allowScales = new ArrayCollection(array(2, 3));
        $this->milhar = new ArrayCollection(array(
                    '', 'mil ', 'milhão ', 'bilhão ', 'trilhão ', 'quatrilhão '
                ));
        $this->milharPlural = new ArrayCollection(array(
                    '', 'mil ', 'milhões ', 'bilhões ', 'trilhões ', 'quatrilhões '
                ));
        $this->centena = new ArrayCollection(array(
                    'cem ', '', 'cento e ', 'duzentos ', 'trezentos ', 'quatrocentos ',
                    'quinhentos ', 'seiscentos ', 'setecentos ', 'oitocentos ',
                    'novecentos '
                ));
        $this->dezena = new ArrayCollection(array(
                    '', 'dez ', 'vinte ', 'trinta ', 'quarenta ', 'cinquenta ',
                    'sessenta ', 'setenta ', 'oitenta ', 'noventa '
                ));
        $this->unidade = new ArrayCollection(array(
                    '', 'um ', 'dois ', 'três ', 'quatro ', 'cinco ', 'seis ',
                    'sete ', 'oito ', 'nove ', 'dez ', 'onze ', 'doze ', 'treze ',
                    'quatorze ', 'quinze ', 'dezesseis ', 'dezessete ', 'dezoito ',
                    'dezenove '
                ));
        $this->setValue($numero);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = (float) $value;
    }

    public function getNegativePrefix()
    {
        return $this->negativePrefix;
    }

    public function setNegativePrefix($negativePrefix)
    {
        $this->negativePrefix = $negativePrefix;
    }

    public function getNegativeSufix()
    {
        return $this->negativeSufix;
    }

    public function setNegativeSufix($negativeSufix)
    {
        $this->negativeSufix = $negativeSufix;
    }

    public function getPositivePrefix()
    {
        return $this->positivePrefix;
    }

    public function setPositivePrefix($positivePrefix)
    {
        $this->positivePrefix = $positivePrefix;
    }

    public function getPositiveSufix()
    {
        return $this->positiveSufix;
    }

    public function setPositiveSufix($positiveSufix)
    {
        $this->positiveSufix = $positiveSufix;
    }

    protected function explodeNumber($currency)
    {
        $currency = explode('.', $currency);
        return $currency;
    }

    public function integerToWord($number)
    {
        $moeda = new \Sped\Commons\StringHelper();

        if ($number == 0)
            return $moeda;

        if ($number < 0) {
            $number = -$number;
            $this->isPositive = false;
        } else
            $this->isPositive = true;

        $intToWords = $this->wordsFromThousands($number);

        if ($this->isEndsWithOne($intToWords)) {
            $moeda->prepend('de ');
        }

        return $intToWords->append($moeda);
    }

    public function decimalToWord($number)
    {
        $words = new \Sped\Commons\StringHelper($number);
        return $words;
    }

    public function toWords()
    {
        $currency = $this->getValue();

        list($integer, $decimal) = $this->explodeNumber($currency);

        $scale = mb_strlen($decimal);

        if (!$this->allowScales->contains($scale))
            throw new Exception("a escala deve ser igual a dois ou três.");

        $valueToWords = new \Sped\Commons\StringHelper();

//        a($integer, scale);
        $inteiroToWords = $this->integerToWord($integer);
        $decimalToWords = $this->decimalToWord($decimal);

        if (($inteiroToWords->length == 0) || ($decimalToWords->length == 0)) {
            $valueToWords->append($inteiroToWords)->append($decimalToWords);
        } else {
            $valueToWords->append($inteiroToWords)->append(" e ")->append($decimalToWords);
        }

        if ($this->hasPrefix()) {
            return $valueToWords->insert(0, $this->getPrefix())->append($this->getSufix())->toString();
        }

        return $valueToWords->insert(0, $this->jdField_c_of_type_JavaLangString)->append($this->jdField_d_of_type_JavaLangString)->toString();
    }

    /**
     * 
     * @param int $number
     * @return \Sped\Commons\StringHelper
     * @throws Exception 
     */
    protected function wordsFromHundredOrUnit($number)
    {
        $numToWords = new \Sped\Commons\StringHelper();

        if ($number < 0)
            throw new Exception('Número deve ser maior ou igual a zero.');

        if ($number == 0)
            return $numToWords;
        else if ($number == 100)
            return $numToWords->append($this->centena->key(0));

        if ($number % 100 < 20) {
            $numToWords->append($this->unidade->key($number % 100));
            $number /= 100;
        } else {
            $numToWords->append($this->unidade->key($number % 10));

            if ($number % 10 != 0)
                $numToWords->insert(0, 'e ');

            $number /= 10;

            $numToWords->insert(0, $this->dezena->key($number % 10));
            $number /= 10;
        }

        if (($number > 0) && ($number != 1))
            $numToWords->insert(0, 'e ');

        return $numToWords->insert(0, $this->centena->key($number));
    }

    public function wordsFromThousands($number)
    {
        $numToWords = new \Sped\Commons\StringHelper();

        if ($number < 0) {
            throw new Exception("Número deve ser maior ou igual a zero.");
        }

        $casaMilhar = 0;
        do {
            $n = $number % 1000;

            if ($n != 0) {
                $s = $this->wordsFromHundredOrUnit($n);

                if ($this->isEndsWithOne($n))
                    $numToWords = $s->append($this->milhar->key($casaMilhar))->append($numToWords);
                else
                    $numToWords = $s->append($this->milharPlural->key($casaMilhar))->append($numToWords);
            }

            $casaMilhar++;
            $number /= 1000;
        } while ($number > 0);

        return $numToWords;
    }

    public function isEndsWithOne($number)
    {
        $num = new \Sped\Commons\StringHelper($number);

        if ($number / 1000 > 0) {
            return $num->endsWith("001");
        }

        if ($number < 11) {
            return $num->endsWith("1");
        }

        return false;
    }

}