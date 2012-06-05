<?php

/**
 * //TODO: adicionar descrição da classe Modulo11
 * @name Modulo11
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 24/05/2012
 */
abstract class Sped_Validation_Modulo11 extends Sped_Validation_AValidation
{

    /**
     * Número de dígitos verificadores.
     * @var int
     */
    protected $digitsCount;

    /**
     * Limite do multiplicador.
     * @var int
     */
    protected $maxMultiplier;

    /**
     *
     * @var Sped_Types_ADocument
     */
    protected $document;

    /**
     * Validador de Código de Barras  
     */
    function __construct($numeroDigitos, $limiteMultiplicador)
    {
        $this->digitsCount = $numeroDigitos;
        $this->maxMultiplier = $limiteMultiplicador;
    }

    /**
     *
     * @return int
     */
    public function getDigitsCount()
    {
        return (int) $this->digitsCount;
    }

    /**
     *
     * @return int
     */
    public function getMaxMultiplier()
    {
        return (int) $this->maxMultiplier;
    }

    /**
     * 
     * @return Sped_Types_ADocument
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * 
     * @param Sped_Types_ADocument $document 
     */
    public function setDocument($document)
    {
        $this->document = $document;
        $this->digitsCount = $document->getDigitsCount();
        $this->maxMultiplier = $document->getMaxMultiplier();
    }

    /**
     * Validação genérica de vários tipos de números. Dentre eles: CPF, CNPJ, PIS.
     * @param \Sped_Types_ADocument $value Valor a ser validado.
     * @return boolean 
     */
    public function validate($value)
    {
        if (!$value instanceof Sped_Types_ADocument)
            throw new Exception('Não é possível validar o documento');

        $this->setDocument($value);
        $base = new Sped_Types_String($this->getDocument()->getBaseNumber());

        for ($n = 1; $n <= $this->document->getDigitsCount(); $n++) {
            $soma = 0;
            $mult = 2;
            for ($i = $base->length - 1; $i > -1; $i--) {
                $soma += $mult * intval($base->left($i, 1)->getValue());
                if (++$mult > $this->document->getMaxMultiplier())
                    $mult = 2;
            }
            $base->concat((($soma * 10) % 11) % 10);
        }
        return $value->getValue() === $base->getValue();
    }

}