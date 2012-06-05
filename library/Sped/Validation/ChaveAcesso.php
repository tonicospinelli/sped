<?php

/**
 * //TODO: adicionar descrição da classe ChaveAcesso
 * @name ChaveAcesso
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 24/05/2012
 */
class Sped_Validation_ChaveAcesso extends Sped_Validation_Modulo11
{

    function __construct()
    {
        $this->numeroDigitos = 1;
        $this->limiteMultiplicador = 9;
    }

    /**
     * Valida se o Chave de Acesso está correta.
     * @param string $value
     * @return boolean 
     */
    public function validate($value)
    {
        if ($value instanceof Sped_Types_ChaveAcesso)
            $value = new Sped_Types_ChaveAcesso($value);
        return parent::validate($value);
    }

    public function defaultDigitCount()
    {
        return 44;
    }

}