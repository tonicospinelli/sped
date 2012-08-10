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
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class TituloEleitoral extends AbstractDocument
{

    protected $mask = '0000000000000';
    protected $secao;
    protected $zona;

    /**
     * Retorna o número da seção (sala) de votação.
     * @return string
     */
    public function getSecao()
    {
        return $this->secao;
    }

    /**
     * Define a seção (sala) de votação.
     * @param \Sped\Commons\StringHelper $secao
     * @return \Sped\Commons\Documents\TituloEleitoral 
     */
    public function setSecao($secao)
    {
        $secao = new \Sped\Commons\StringHelper($secao);
        $this->secao = $secao->padLeft(0, 4)->getValue();
        return $this;
    }

    /**
     * Retorna a zona (local) de votação.
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Define a zona (local) de votação.
     * @param string|int $zona
     * @return \Sped\Commons\Documents\TituloEleitoral 
     */
    public function setZona($zona)
    {
        $zona = new \Sped\Commons\StringHelper($zona);
        $this->secao = $zona->padLeft(0, 3)->getValue();
        return $this;
    }

    /**
     * Retorna o tamanho de dígitos para o documento.
     * @return int 
     */
    public function getLength()
    {
        return 13;
    }

    /**
     * Retorna o número de dígitos que este documento possui.
     * @return int 
     */
    public function getDigitsCount()
    {
        return 2;
    }

    /**
     * Retorna o multiplicador máximo para este documento.
     * @return int 
     */
    public function getMaxMultiplier()
    {
        return 10;
    }

    /**
     * Retorna o número do Título Eleitoral sem a máscara.
     * @return string
     */
    public function getValueUnmasked()
    {
        $this->value->padLeft('0', $this->getLength());
        return parent::getValueUnMasked();
    }

    /**
     * Gera o dígito verificador a partir do número do titulo eleitoral.
     * @return int 
     */
    public function generateVerifierDigit()
    {
        $coeficients = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 4, 3);

        $foundDv = 0;
        $aux = $this->getValue()->substring(9, 2)->toInteger();
        $sum = 0;
        for ($i = 0; $i <= $this->getMaxMultiplier(); $i++) {
            $digit = $this->getValue()->substring($i, 1)->toInteger();
            $sum += $digit * $coeficients[$i];
            if (($i == 8) || ($i == 10)) {
                $sum %= 11;
                if ($sum > 1) {
                    $sum = 11 - $sum;
                } else if ($aux <= 2)
                    $sum = 1 - $sum;
                else {
                    $sum = 0;
                }
                if ($i == 8)
                    $foundDv = $sum * 10;
                else
                    $foundDv += $sum;
                $sum *= 2;
            }
        }
        return $foundDv;
    }

    /**
     * Verifica se o documento é válido.
     * @return bool
     */
    public function isValid()
    {
        return \Sped\Validation::tituloEleitoral()->validate($this);
    }

}