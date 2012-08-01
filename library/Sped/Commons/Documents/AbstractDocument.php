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

namespace Sped\Commons\Documents;

/**
 * @category   Sped
 * @package    Sped\Commons\Documents
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
abstract class AbstractDocument implements InterfaceDocument
{

    /**
     *
     * @var \Sped\Commons\StringHelper
     */
    protected $value;

    abstract public function defaultDocumentLength();

    abstract public function getDigitsCount();

    abstract public function getMaxMultiplier();

    abstract public function getValueMasked();

    abstract public function isValid();

    public function __construct($value = null)
    {
        $this->setValue($value);
    }

    /**
     * Define o número do documento.
     * @param string $value
     * @return \Sped\Commons\Documents\AbstractDocument
     */
    public function setValue($value)
    {
        $value = new \Sped\Commons\StringHelper($value);
        $this->value = $value;
    }

    /**
     * Retorna o número do documento.
     * @return string
     */
    public function getValue()
    {
        $value = new \Sped\Commons\StringHelper();
        $value->concat($this->getBaseNumber(), $this->getDigitVerifier());
        return $value->getValue();
    }

    /**
     * Retorna apenas os números do documento.
     * @return string
     */
    public function getValueUnmasked()
    {
        return preg_replace("/[^\d]/", '', $this->getValue());
    }

    /**
     * Retorna as posições do Digito Verificador.
     * @return array
     */
    public function getDigitVerifierPositions()
    {
        $dv = array();
        $index = 0;
        while ($index < $this->getDigitsCount()) {
            $dv[$index + 1] = $this->defaultDocumentLength() - ($this->getDigitsCount() - $index);
            $index++;
        }
        return $dv;
    }

    /**
     * Retorna a posição do Dígito Verificador.
     * @param int $index
     * @return int
     */
    public function getDigitVerifierPosition($index)
    {
        $dvPos = $this->getDigitVerifierPositions();
        return (int) $dvPos[$index];
    }

    /**
     * Retorna o número base.
     * @return string
     */
    public function getBaseNumber()
    {
        $length = ($this->defaultDocumentLength() - $this->getDigitsCount());
        return $this->value->substring(0, $length)->getValue();
    }

    /**
     * Retorna os digitos verificadores
     * @return string
     */
    public function getDigitVerifier()
    {
        $base = new \Sped\Commons\StringHelper($this->getBaseNumber());

        for ($n = 1; $n <= $this->getDigitsCount(); $n++) {
            $soma = 0;
            $mult = 2;
            for ($i = $base->length - 1; $i > -1; $i--) {
                $soma += $mult * intval($base->left($i, 1)->getValue());
                if (++$mult > $this->getMaxMultiplier())
                    $mult = 2;
            }
            $base->concat((($soma * 10) % 11) % 10);
        }
        return $base->right($this->getDigitsCount(), $this->getDigitsCount())->getValue();
    }

}