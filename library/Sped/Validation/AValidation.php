<?php

abstract class Sped_Validation_AValidation implements Sped_Validation_IValidation
{

    public function __construct()
    {
        //a constructor is required for ReflectionClass::newInstance()
    }

    public function __invoke($input)
    {
        return $this->validate($input);
    }

    public function assert($input)
    {
        return $this->validate($input);
    }

    public function check($input)
    {
        return $this->assert($input);
    }

}

