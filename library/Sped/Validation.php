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

namespace Sped;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 * @method \Sped\Validation\Cean cean()
 * @method \Sped\Validation\ChaveAcesso chaveAcesso()
 * @method \Sped\Validation\Cpf cpf()
 * @method \Sped\Validation\Cnpj cnpj()
 * @method \Sped\Validation\Modulo11 modulo11(int numeroDigitos, int limiteMultiplicador)
 */
class Validation
{

    public static function __callStatic($ruleName, $arguments)
    {
        $validator = new self;
        return $validator->__call($ruleName, $arguments);
    }

    public function __call($method, $arguments)
    {
        return self::buildRule($method, $arguments);
    }

    public static function buildRule($ruleSpec, $arguments = array())
    {
        if ($ruleSpec instanceof \Sped\Validation\IValidador)
            return $ruleSpec;

        $validatorFqn = 'Sped\\Validation\\' . ucfirst($ruleSpec);
        $validatorClass = new \ReflectionClass($validatorFqn);
        $validatorInstance = $validatorClass->newInstanceArgs($arguments);
        return $validatorInstance;
    }

}
