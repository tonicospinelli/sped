<?php

abstract class Sped_Types_ATypes
{

    protected $value = null;

    public function __construct($value = null)
    {
        if (!is_null($value))
            $this->setValue($value);
    }

    /**
     * Retorna o valor
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Define o valor
     *
     * @param mixed $value
     * @return \Sped\Common\Types\AbstractTypes 
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}