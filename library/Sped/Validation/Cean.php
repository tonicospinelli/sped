<?php

/**
 * Validador de Código de Barras
 * @name Cean
 * @category Sped
 * @package Sped_Validation
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 24/05/2012
 */
class Sped_Validation_Cean extends Sped_Validation_AValidation
{

    /**
     * Números multiplicadores.
     * @var \ArrayObject
     */
    protected $p = array(3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3);

    /**
     * Validador de Código de Barras  
     */
    function __construct()
    {
        $this->p = new ArrayObject($this->p);
    }

    /**
     * Valida o código de barras.
     * @param mixed $value
     * @return boolean
     */
    public function validate($input)
    {
        $input = new Sped_Types_String($input);

        $digitoCean = 0;
        $indiceInicial = 0;
        $digitoCalculo = 0;
        $digitoCalculado = 0;
        $tamCean = $input->length;
        $ceanSemDigito = new Sped_Types_String();

        if (!in_array($tamCean, array(8, 12, 13, 14, 18)))
            return false;

        $digitoCean = (int) $input->right(1, 1)->getValue();
        $ceanSemDigito->setValue($input->left(0, $input->length - 1)->getValue());
        $indiceInicial = $this->p->count() - $ceanSemDigito->length;

        for ($i = 0; $i < $ceanSemDigito->length; $i++)
            $digitoCalculo += ((int) $ceanSemDigito->substring($i, 1)->getValue()) * $this->p->offsetGet($indiceInicial++);

        if ($digitoCalculo % 10 == 0) {
            $digitoCalculado = 0;
        }
        else {
            $divTemp = (int) ceil($digitoCalculo / 10.0) * 10;
            $digitoCalculado = $divTemp - $digitoCalculo;
        }

        if ($digitoCalculado === $digitoCean)
            return true;

        return false;
    }

}