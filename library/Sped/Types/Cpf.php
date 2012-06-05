<?php

/**
 * //TODO: adicionar descrição da classe Cpf
 * @name Cpf
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
class Sped_Types_Cpf extends Sped_Types_ADocument
{

    public function getMaxMultiplier()
    {
        return 12;
    }

    public function getDigitsCount()
    {
        return 2;
    }

    /**
     * 
     * @return Sped_Types_String
     */
    public function getMasked()
    {
        return Sped_Common_Mask::exec($this->getUnMasked(), '000.000.000-00');
    }

    public function defaultDocumentLength()
    {
        return 11;
    }

}