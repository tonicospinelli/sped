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

use Sped\Types\StringHelper;

/**
 * @category   Sped
 * @package    Sped\Validation
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Cean extends AbstractValidate {

  /**
   * Números multiplicadores.
   * @var \ArrayObject
   */
  protected $p = array(3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3);

  /**
   * Validador de Código de Barras  
   */
  function __construct() {
    $this->p = new ArrayObject($this->p);
  }

  /**
   * Valida o código de barras.
   * @param mixed $value
   * @return boolean
   */
  public function validate($input) {
    $input = new StringHelper($input);

    $digitoCean = 0;
    $indiceInicial = 0;
    $digitoCalculo = 0;
    $digitoCalculado = 0;
    $tamCean = $input->length;
    $ceanSemDigito = new StringHelper();

    if (!in_array($tamCean, array(8, 12, 13, 14, 18)))
      return false;

    $digitoCean = (int) $input->right(1, 1)->getValue();
    $ceanSemDigito->setValue($input->left(0, $input->length - 1)->getValue());
    $indiceInicial = $this->p->count() - $ceanSemDigito->length;

    for ($i = 0; $i < $ceanSemDigito->length; $i++)
      $digitoCalculo += ((int) $ceanSemDigito->substring($i, 1)->getValue()) * $this->p->offsetGet($indiceInicial++);

    if ($digitoCalculo % 10 == 0) {
      $digitoCalculado = 0;
    } else {
      $divTemp = (int) ceil($digitoCalculo / 10.0) * 10;
      $digitoCalculado = $divTemp - $digitoCalculo;
    }

    if ($digitoCalculado === $digitoCean)
      return true;

    return false;
  }

}