<?php

/**
 * //TODO: adicionar descrição da classe AbstractNumeroDocumento
 * @name AbstractNumeroDocumento
 * @package //TODO: adicionar package
 * @subpackage //TODO: adicionar subpackage
 * @author Antonio Spinelli <antonio.spinelli@grupobem.com.br>
 * @since 25/05/2012
 */
interface Sped_Types_IDocument
{

    public function setValue($value);

    public function getValue();

    public function getUnMasked();

    public function getDvPositions();

    public function getDvPosition($index);

    public function getBaseNumber();

    public function getDv();
}