<?php

namespace Sped\Validation;

require_once dirname(__FILE__) . '/../../../../library/Sped/Validation/ChaveAcesso.php';

/**
 * Test class for ChaveAcesso.
 * Generated by PHPUnit on 2012-07-27 at 09:18:10.
 */
class ChaveAcessoTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ChaveAcesso
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ChaveAcesso;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @todo Implement testValidate().
     */
    public function testValidate()
    {
        $this->assertTrue($this->object->validate('NFe11101284613439000180550010000004881093997017'));
    }

}

?>