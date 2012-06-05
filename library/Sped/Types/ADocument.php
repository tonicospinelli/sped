<?php

/**
 * //TODO: adicionar descrição da classe AbstractNumeroDocumento
 * @name AbstractNumeroDocumento
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
abstract class Sped_Types_ADocument extends Sped_Types_ATypes implements Sped_Types_IDocument
{

    /**
     *
     * @var Sped_Types_String
     */
    protected $value;

    abstract public function defaultDocumentLength();

    abstract public function getDigitsCount();

    abstract public function getMaxMultiplier();

    abstract public function getMasked();

    /**
     * Define o número do documento.
     * @param Sped_Types_String $value
     * @return Sped_Types_ADocument
     */
    public function setValue($value)
    {
        $value = new Sped_Types_String($value);
        return parent::setValue($value->replaceRegExp('/[^\d]/', ''));
    }

    /**
     * Retorna o número do documento.
     * @return string
     */
    public function getValue()
    {
        $value = new Sped_Types_String();
        $value->concat($this->getBaseNumber(), $this->getDv());
        return $value->getValue();
    }

    /**
     *
     * @param Sped_Types_ADocument|string $numero
     * @return Sped_Types_String 
     */
    public function getUnMasked()
    {
        $numero = new Sped_Types_String($this->getValue());
        return $numero->replaceRegExp('/[^\d]/', '');
    }

    /**
     * Retorna as posições do Digito Verificador.
     * @return array
     */
    public function getDvPositions()
    {
        $dv = array();
        $index = 0;
        while ($index < $this->getDigitsCount()) {
            $dv[$index + 1] = $this->defaultDocumentLength() - ($this->getDigitsCount() - $index);
            $index++;
        }
        return $dv;
    }

    /**
     * Retorna a posição do Dígito Verificador.
     * @param int $index
     * @return int
     */
    public function getDvPosition($index)
    {
        $dvPos = $this->getDvPositions();
        return (int) $dvPos[$index];
    }

    /**
     * Retorna o número base.
     * @param string $input
     * @return string
     */
    public function getBaseNumber()
    {
        return $this->value->substring(0, ($this->defaultDocumentLength() - $this->getDigitsCount()))->getValue();
    }

    /**
     * Retorna os digitos verificadores
     * @return string
     */
    public function getDv()
    {
        $base = new Sped_Types_String($this->getBaseNumber());

        for ($n = 1; $n <= $this->getDigitsCount(); $n++) {
            $soma = 0;
            $mult = 2;
            for ($i = $base->length - 1; $i > -1; $i--) {
                $soma += $mult * intval($base->left($i, 1)->getValue());
                if (++$mult > $this->getMaxMultiplier())
                    $mult = 2;
            }
            $base->concat((($soma * 10) % 11) % 10);
        }
        return $base->right($this->getDigitsCount(), $this->getDigitsCount())->getValue();
    }

}