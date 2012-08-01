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
        $this->secao = $secao->padLeft(0, 2)->getValue();
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
        $this->secao = $zona->padLeft(0, 2)->getValue();
        return $this;
    }

    public function getLength()
    {
        return 13;
    }

    public function getDigitsCount()
    {
        return 2;
    }

    public function getMaxMultiplier()
    {
        return 9;
    }

    /**
     * Retorna o número do Título Eleitoral com a máscara.
     * @return string
     */
    public function getValueMasked()
    {
        return \Sped\Commons\Mask::exec($this->getValueUnmasked(), str_repeat('0', $this->getLength()));
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

    public function isValid()
    {
        return \Sped\Validation::tituloEleitoral()->validate($this);
    }

}