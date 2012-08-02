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
class CurrencyToWords
{

    const OPERATOR_POSITIVE = '+';
    const OPERATOR_NEGATIVE = '-';
    const CURRENCY_INTEGER = 'real';
    const CURRENCY_INTEGER_PLURAL = 'reais';
    const CURRENCY_DECIMAL = 'centavo';
    const CURRENCY_DECIMAL_PLURAL = 'centavos';
    const CURRENCY_THOUSANDTH = 'milésimo de real';
    const CURRENCY_THOUSANDTH_PLURAL = 'milésimos de real';

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $thousands;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $thousandsPlural;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $hundred;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $dozen;

    /**
     *
     * @var \Sped\Commons\Collections\ArrayCollection 
     */
    protected $unit;

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

    /**
     *
     * @var string
     */
    protected $thousandthWord;

    public function __construct($numero = 0)
    {
        $this->allowScales = new ArrayCollection(array(2, 3));
        $this->thousands = new ArrayCollection(array(
                    '', 'mil ', 'milhão ', 'bilhão ', 'trilhão ', 'quatrilhão '
                ));
        $this->thousandsPlural = new ArrayCollection(array(
                    '', 'mil ', 'milhões ', 'bilhões ', 'trilhões ', 'quatrilhões '
                ));
        $this->hundred = new ArrayCollection(array(
                    'cem ', '', 'cento ', 'duzentos ', 'trezentos ', 'quatrocentos ',
                    'quinhentos ', 'seiscentos ', 'setecentos ', 'oitocentos ',
                    'novecentos '
                ));
        $this->dozen = new ArrayCollection(array(
                    '', 'dez ', 'vinte ', 'trinta ', 'quarenta ', 'cinquenta ',
                    'sessenta ', 'setenta ', 'oitenta ', 'noventa '
                ));
        $this->unit = new ArrayCollection(array(
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
        $this->value = $value;
        return $this;
    }

    public function getNegativePrefix()
    {
        return $this->negativePrefix;
    }

    public function setNegativePrefix($negativePrefix)
    {
        $this->negativePrefix = $negativePrefix;
        return $this;
    }

    public function getNegativeSufix()
    {
        return $this->negativeSufix;
    }

    public function setNegativeSufix($negativeSufix)
    {
        $this->negativeSufix = $negativeSufix;
        return $this;
    }

    public function getPositivePrefix()
    {
        return $this->positivePrefix;
    }

    public function setPositivePrefix($positivePrefix)
    {
        $this->positivePrefix = $positivePrefix;
        return $this;
    }

    public function getPositiveSufix()
    {
        return $this->positiveSufix;
    }

    public function setPositiveSufix($positiveSufix)
    {
        $this->positiveSufix = $positiveSufix;
        return $this;
    }

    /**
     * Separa o número com decimal em um array.
     * @param float $currency
     * @return array 
     */
    protected function explodeNumber($currency)
    {
        $currency = explode('.', (string) $currency);
        $currency[1] = (string) str_pad($currency[1], 2, '0', STR_PAD_RIGHT);
        return $currency;
    }

    /**
     * Transforma o número inteiro em texto.
     * @param int $number
     * @return \Sped\Commons\StringHelper 
     */
    public function integerToWord($number)
    {
        $number = (int) $number;
        if ($number === 0)
            return new \Sped\Commons\StringHelper();

        if ($number < 0) {
            $number = -$number;
            $this->isPositive = false;
        } else
            $this->isPositive = true;
        $moeda = new \Sped\Commons\StringHelper();
        $moeda->setValue(
                $number === 0 ?
                        '' : $number === 1 ?
                                self::CURRENCY_INTEGER : self::CURRENCY_INTEGER_PLURAL);

        $intToWords = $this->wordsFromThousands($number);

        if ($this->isThousands($intToWords))
            $moeda->prepend('de ');

        return $intToWords->append($moeda);
    }

    /**
     * Transforma o número decimal em texto.
     * @param int $decimal
     * @return \Sped\Commons\StringHelper 
     */
    public function decimalToWord($decimal)
    {
        $decimal = (int) $decimal;
        if ($decimal === 0)
            return new \Sped\Commons\StringHelper('');

        if ($decimal < 0)
            $decimal = -$decimal;

        $centsToWords = $this->wordsFromThousands($decimal);

        return $centsToWords->append($this->thousandthWord);
    }

    /**
     * Transforma um valor fracionado em texto.
     * @return type
     * @throws \Exception 
     */
    public function toWords()
    {
        $currency = $this->getValue();

        list($integer, $decimal) = $this->explodeNumber($currency);

        $scale = mb_strlen($decimal);

        if (!$this->allowScales->contains($scale))
            throw new \Exception("a escala deve ser igual a dois ou três.");

        $valueToWords = new \Sped\Commons\StringHelper();

        $this->setThousanth($decimal, $scale);
        $inteiroToWords = $this->integerToWord($integer);
        $decimalToWords = $this->decimalToWord($decimal);

        if (($inteiroToWords->length === 0) || ($decimalToWords->length === 0))
            $valueToWords->append($inteiroToWords)->append($decimalToWords);
        else
            $valueToWords->append($inteiroToWords)->append(' e ')->append($decimalToWords);

        if ($this->isPositive)
            return $valueToWords->insert(0, $this->getPositivePrefix())->append($this->getPositiveSufix())->toString();

        return $valueToWords->insert(0, $this->getNegativePrefix())->append($this->getNegativeSufix())->toString();
    }

    /**
     * Transforma o número inteiro em texto.
     * @param int $number
     * @return \Sped\Commons\StringHelper
     * @throws \Exception 
     */
    protected function wordsFromHundredOrUnit($number)
    {
        if ($number < 0)
            throw new \Exception('Número deve ser maior ou igual a zero.');

        $numToWords = new \Sped\Commons\StringHelper();

        if ((int) $number === 0)
            return $numToWords;
        else if ($number === 100)
            return $numToWords->append($this->hundred->offsetGet(0));

        $n = (int) $number % 100;

        if ($n < 20) {
            $numToWords->append($this->unit->offsetGet($n));
            $number /= 100;
        } else {
            $n = $number % 10;
            $numToWords->append($this->unit->offsetGet($n));

            if ($n !== 0)
                $numToWords->insert(0, 'e ');

            $number /= 10;

            $n = (int) $number % 10;
            $numToWords->insert(0, $this->dozen->offsetGet($n));

            $number /= 10;
        }

        if ($n > 0 && $number > 1)
            $numToWords->insert(0, 'e ');

        return $numToWords->insert(0, $this->hundred->offsetGet(++$number));
    }

    /**
     * Retorna o texto a partir de um número.
     * @param int $number
     * @return \Sped\Commons\StringHelper
     * @throws \Exception 
     */
    protected function wordsFromThousands($number)
    {
        $number = (int) $number;
        if ($number < 0)
            throw new \Exception('Número deve ser maior ou igual a zero.');

        $numToWords = new \Sped\Commons\StringHelper();
        $thousandthPosition = 0;
        do {
            $n = $number % 1000;

            if ($n != 0) {
                $s = $this->wordsFromHundredOrUnit($n);

                if ($this->isEndsWithOne($n))
                    $numToWords = $s->append($this->thousands->offsetGet($thousandthPosition))->append($numToWords);
                else
                    $numToWords = $s->append($this->thousandsPlural->offsetGet($thousandthPosition))->append($numToWords);
            }

            $thousandthPosition++;
            $number /= 1000;
        } while (!preg_match('/E-/', (string) $number));

        return $numToWords;
    }

    /**
     * Verifica se o número termina com o número 1 (um).
     * @param int $number
     * @return boolean 
     */
    protected function isEndsWithOne($number)
    {
        $number = (int) $number;
        $num = new \Sped\Commons\StringHelper($number);

        if ($number / 1000 > 0) {
            return $num->endsWith('001');
        }

        if ($number < 11) {
            return $num->endsWith('1');
        }

        return false;
    }

    /**
     * Verifica se a descrição de milhar deve estar no singular ou no plural.
     * @param string $words
     * @return boolean 
     */
    protected function isThousands($words)
    {
        $numToWords = new \Sped\Commons\StringHelper($words);

        for ($a = 1; $a < $this->thousands->count(); $a++)
            if ($numToWords->endsWith($this->thousands->offsetGet($a)))
                return true;

        for ($b = 1; $b < $this->thousandsPlural->count(); $b++)
            if ($numToWords->endsWith($this->thousandsPlural->offsetGet($b)))
                return true;

        return false;
    }

    /**
     * Define se é centavos ou milésimos de real
     * @param int $decimal
     * @param int $scale
     * @return void 
     */
    protected function setThousanth($decimal, $scale)
    {
        $decimal = (int) $decimal;
        if ($scale === 3) {
            $this->thousandthWord = ($decimal === 0 ?
                            '' : $decimal === 1 ?
                                    self::CURRENCY_THOUSANDTH : self::CURRENCY_THOUSANDTH_PLURAL);
            return;
        }

        $this->thousandthWord = ( $decimal === 0 ?
                        '' : $decimal === 1 ? self::CURRENCY_DECIMAL : self::CURRENCY_DECIMAL_PLURAL);
    }

}