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

namespace Sped\Types;

/**
 * @category   Sped
 * @package    Sped\Validation
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
abstract class AbstractDocument extends AbstractType implements InterfaceDocument
{

    /**
     *
     * @var \Sped\Types\StringHelper
     */
    protected $value;

    abstract public function defaultDocumentLength();

    abstract public function getDigitsCount();

    abstract public function getMaxMultiplier();

    abstract public function getMasked();

    /**
     * Define o número do documento.
     * @param string $value
     * @return \Sped\Types\AbstractDocument
     */
    public function setValue($value)
    {
        $value = new \Sped\Types\StringHelper($value);
        return parent::setValue($value->replaceRegExp('/[^\d]/', ''));
    }

    /**
     * Retorna o número do documento.
     * @return string
     */
    public function getValue()
    {
        $value = new \Sped\Types\StringHelper();
        $value->concat($this->getBaseNumber(), $this->getDv());
        return $value->getValue();
    }

    /**
     *
     * @param \Sped\Types\AbstractDocument|string $numero
     * @return \Sped\Types\StringHelper 
     */
    public function getUnMasked()
    {
        $numero = new \Sped\Types\StringHelper($this->getValue());
        return $numero->replaceRegExp('/[^\d]/', '');
    }

    /**
     * Retorna as posições do Digito Verificador.
     * @return array
     */
    public function getDvPositions()
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
    public function getDvPosition($index)
    {
        $dvPos = $this->getDvPositions();
        return (int) $dvPos[$index];
    }

    /**
     * Retorna o número base.
     * @return string
     */
    public function getBaseNumber()
    {
        return $this->value->substring(0, ($this->defaultDocumentLength() - $this->getDigitsCount()))->getValue();
    }

    /**
     * Retorna os digitos verificadores
     * @return string
     */
    public function getDv()
    {
        $base = new \Sped\Types\StringHelper($this->getBaseNumber());

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