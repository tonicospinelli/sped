<?php

/**
 * @method Sped_Validator cean()
 * @method Sped_Validator chaveAcesso(string $input)
 * @method Sped_Validator cpf()
 * @method Sped_Validator cnpj()
 * @method Sped_Validator modulo11(int numeroDigitos, int limiteMultiplicador)
 */
class Sped_Validation
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
        if ($ruleSpec instanceof Sped_Validacao_IValidador)
            return $ruleSpec;

        $validatorFqn = 'Sped_Validation_' . ucfirst($ruleSpec);
        $validatorClass = new ReflectionClass($validatorFqn);
        $validatorInstance = $validatorClass->newInstanceArgs($arguments);
        return $validatorInstance;
    }

}
