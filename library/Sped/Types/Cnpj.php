<?php

/**
 * //TODO: adicionar descrição da classe Cpf
 * @name Cpf
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
class Sped_Types_Cnpj extends Sped_Types_ADocument
{

    public function getMaxMultiplier()
    {
        return 9;
    }

    public function getDigitsCount()
    {
        return 2;
    }

    /**
     * 
     * @return TString
     */
    public function getMasked()
    {
        return Sped_Comum_Mascara::exec($this->getUnMasked(), '00.000.000/0000-00');
    }

    public function defaultDocumentLength()
    {
        return 14;
    }

}