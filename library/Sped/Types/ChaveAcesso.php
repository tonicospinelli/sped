<?php

/**
 * //TODO: adicionar descrição da classe Cpf
 * @name Cpf
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
class Sped_Types_ChaveAcesso extends Sped_Types_ADocument
{

    public function getMaxMultiplier()
    {
        return 9;
    }

    public function getDigitsCount()
    {
        return 1;
    }

    /**
     * 
     * @return Sped_Types_String
     */
    public function getMasked()
    {
        return 'NFe' . $this->getValue();
    }

    static public function defaultDocumentLength()
    {
        return 44;
    }

}