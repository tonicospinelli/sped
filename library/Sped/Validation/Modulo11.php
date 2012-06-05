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

namespace Sped\Validation;

/**
 * @category   Sped
 * @package    Sped\Validation
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
abstract class Modulo11 extends AbstractValidate {

    /**
     * Número de dígitos verificadores.
     * @var int
     */
    protected $digitsCount;

    /**
     * Limite do multiplicador.
     * @var int
     */
    protected $maxMultiplier;

    /**
     *
     * @var \Sped\Types\AbstractDocument
     */
    protected $document;

    /**
     * Validador de Código de Barras  
     */
    function __construct($numeroDigitos, $limiteMultiplicador) {
        $this->digitsCount = $numeroDigitos;
        $this->maxMultiplier = $limiteMultiplicador;
    }

    /**
     *
     * @return int
     */
    public function getDigitsCount() {
        return (int) $this->digitsCount;
    }

    /**
     *
     * @return int
     */
    public function getMaxMultiplier() {
        return (int) $this->maxMultiplier;
    }

    /**
     * 
     * @return AbstractDocument
     */
    public function getDocument() {
        return $this->document;
    }

    /**
     * 
     * @param AbstractDocument $document 
     */
    public function setDocument($document) {
        $this->document = $document;
        $this->digitsCount = $document->getDigitsCount();
        $this->maxMultiplier = $document->getMaxMultiplier();
    }

    /**
     * Validação genérica de vários tipos de números. Dentre eles: CPF, CNPJ, PIS.
     * @param \AbstractDocument $value Valor a ser validado.
     * @return boolean 
     */
    public function validate($value) {
        if (!$value instanceof AbstractDocument)
            throw new Exception('Não é possível validar o documento');

        $this->setDocument($value);
        $base = new String($this->getDocument()->getBaseNumber());

        for ($n = 1; $n <= $this->document->getDigitsCount(); $n++) {
            $soma = 0;
            $mult = 2;
            for ($i = $base->length - 1; $i > -1; $i--) {
                $soma += $mult * intval($base->left($i, 1)->getValue());
                if (++$mult > $this->document->getMaxMultiplier())
                    $mult = 2;
            }
            $base->concat((($soma * 10) % 11) % 10);
        }
        return $value->getValue() === $base->getValue();
    }

}