<?php

/**
 * //TODO: adicionar descrição da classe Cpf
 * @name Cpf
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 24/05/2012
 */
class Sped_Validation_Cpf extends Sped_Validation_Modulo11
{

    /**
     * Validador de Código de Barras  
     */
    function __construct()
    {
        $this->digitsCount = 2;
        $this->maxMultiplier = 12;
    }

    /**
     * Valida se o CPF está correto
     * @param string|int|\Sped_Types_Cpf $value
     * @return boolean 
     */
    public function validate($value)
    {
        if (!$value instanceof Sped_Types_Cpf)
            $value = new Sped_Types_Cpf($value);
        return parent::validate($value);
    }

}