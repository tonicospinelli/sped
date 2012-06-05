<?php

/**
 * //TODO: adicionar descrição da classe Acre
 * @name Acre
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
class Sped_Validation_InscricaoEstadualAC extends InscricaoEstadual
{

    function __construct()
    {
        $this->limiteMultiplicador = 9;
        $this->numeroDigitos = 2;
    }

    public function defaultDigitCount()
    {
        return 13;
    }

}