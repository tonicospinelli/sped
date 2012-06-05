<?php

/**
 * //TODO: adicionar descrição da classe Cpf
 * @name Cpf
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 24/05/2012
 */
class Sped_Validation_Cnpj extends Sped_Validation_Modulo11
{

    /**
     * Validação do CNPJ. 
     */
    function __construct()
    {
        $this->digitsCount = 2;
        $this->maxMultiplier = 9;
    }

    /**
     * Valida se o CNPJ está correto.
     * @param string|int|Sped_Types_Cnpj $value
     * @return boolean 
     */
    public function validate($value)
    {
        if (!$value instanceof Sped_Types_Cnpj)
            $value = new Sped_Types_Cnpj($value);
        return parent::validate($value);
    }

}