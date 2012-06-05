<?php

interface Sped_Validation_IValidation
{

    public function assert($input);

    public function check($input);

    public function validate($input);
}

