<?php

namespace Sped;

/**
 * Test class for Certified.
 * Generated by PHPUnit on 2012-08-06 at 17:55:55.
 */
class CertifiedTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Certified
     */
    protected $object;
    protected $file = 'samples/certificado_teste.pfx';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
//        $this->object = new Certified('samples/teste.pfx');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function testLoadCertified()
    {
        $cert = Certified::loadPfx($this->file, 'associacao');
        $this->assertTrue(true);
    }

    public function testIsExpired()
    {
        $cert = Certified::loadPfx($this->file, 'associacao');
        $this->assertTrue(!$cert->isExpired(), 'Certificado expirado');
    }

    public function testIsValid()
    {
        $cert = Certified::loadPfx($this->file, 'associacao');
        $this->assertTrue($cert->isValid(), 'O certificado está fora da validade.');
    }

    public function testCreateXmlSignature()
    {
        $nfe = new Schemas\V200\DocumentNFe();
        $nfe->load('samples/35101158716523000119550010000000011003000000-nfe.xml');
        
        $cert = Certified::loadPfx($this->file, 'associacao');
        Certified::createXmlSignature($nfe, $cert);

        $nfe->save('samples/35101158716523000119550010000000011003000000-nfe-sign.xml');
    }

}

?>