<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Certification;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class X509Certified extends \Sped\Commons\Objeto
{

    /**
     * Nome do certificado.
     * @var string
     */
    protected $name;

    /**
     * Assunto do certificado
     * @var X509Certified\Subject
     */
    protected $subject;

    /**
     * Hash
     * @var string
     */
    protected $hash;

    /**
     *
     * @var X509Certified\Issuer
     */
    protected $issuer;

    /**
     *
     * @var int
     */
    protected $version;

    /**
     *
     * @var string 
     */
    protected $serialNumber;

    /**
     * Data Inicial da validade do certificado.
     * @var \DateTime
     */
    protected $validFrom;

    /**
     * Data Final da validade do certificado.
     * @var \DateTime
     */
    protected $validTo;

    /**
     *
     * @var X509Certified\Purposes
     */
    protected $purposes;

    /**
     *
     * @var X509Certified\Extensions
     */
    protected $extensions;

    /**
     *
     * @var string
     */
    protected $fileName;

    /**
     *
     * @var string
     */
    protected $privateKey;

    /**
     *
     * @var string
     */
    protected $publicKey;

    /**
     * Load a file.
     * @param string $fileName
     * @throws Exception 
     */
    public function load($fileName, $pass = '')
    {
        $this->setFileName($fileName);
        $content = file_get_contents($this->getFileName());

        $X509Certified = array();

        if (!openssl_pkcs12_read($content, $X509Certified, $pass))
            throw new \Exception('The certified is not loaded');

        $parsedX509 = openssl_x509_parse($X509Certified['cert'], false);
        unset($parsedX509['validTo'],$parsedX509['validFrom']);
        
        $this->setOptions($parsedX509);
        $this->setValidTo(new \DateTime(date('Y-m-d H:i:s', $parsedX509['validTo_time_t'])));
        $this->setValidFrom(new \DateTime(date('Y-m-d H:i:s', $parsedX509['validFrom_time_t'])));
        $this->setPrivateKey($X509Certified['pkey']);
        $this->setPublicKey($X509Certified['cert']);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        if (!$subject instanceof X509Certified\Subject)
            $subject = new X509Certified\Subject($subject);
        $this->subject = $subject;
        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    public function getIssuer()
    {
        return $this->issuer;
    }

    public function setIssuer($issuer)
    {
        if (!$issuer instanceof X509Certified\Issuer)
            $issuer = new X509Certified\Issuer($issuer);

        $this->issuer = $issuer;
        return $this;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Retorna a data inicial de validade do certificado.
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Define a data inicial de validade do certificado.
     * @param \DateTime $validFrom
     * @return \Sped\Certification\X509Certified 
     */
    public function setValidFrom($validFrom)
    {
        if (!$validFrom instanceof \DateTime)
            $validFrom = new \DateTime($validFrom);
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Retorna a data final da validade.
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Define a data final da validade do certificado.
     * @param \DateTime $validTo
     * @return \Sped\Certification\X509Certified 
     */
    public function setValidTo($validTo)
    {
        if (!$validTo instanceof \DateTime)
            $validTo = new \DateTime($validTo);
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Retorna o propósito.
     * @return X509Certified\Purposes
     */
    public function getPurposes()
    {
        return $this->purposes;
    }

    /**
     * Define o propésito.
     * @param array|X509Certified\Purposes $purposes
     * @return \Sped\Certification\X509Certified
     * @throws Exception If not array or \Sped\X509Certified\Purposes
     */
    public function setPurposes($purposes)
    {
        if (!is_array($purposes))
            throw new Exception('The purpose is not array or \Sped\X509Certified\Purposes');

        if (!$purposes instanceof X509Certified\Purposes)
            $purposes = new X509Certified\Purposes($purposes);

        $this->purposes = $purposes;
        return $this;
    }

    /**
     * Retorna a extensão do certificado.
     * @return X509Certified\Extensions
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Define a extensão do certificado.
     * @param X509Certified\Extensions $extensions
     * @return \Sped\Certification\X509Certified 
     */
    public function setExtensions($extensions)
    {
        if (!$extensions instanceof X509Certified\Extensions)
            $extensions = new X509Certified\Extensions($extensions);
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * Retorna o arquivo do certificado.
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Define o arquivo do certificado.
     * @param string $fileName
     * @return \Sped\Certification\X509Certified
     * @throws Exception 
     */
    public function setFileName($fileName)
    {
        if (!is_file($fileName))
            throw new Exception('Certified file is not found.');

        $this->fileName = realpath($fileName);
        return $this;
    }

    /**
     * Retorna a chave privada
     * @param boolean $onlyKey returns only key value.
     * @return string
     */
    public function getPrivateKey($onlyKey = false)
    {
        if ($onlyKey)
            return preg_replace("/(^--.*\n|\n.*--$|[\r\n])/", '', $this->privateKey);

        return $this->privateKey;
    }

    /**
     * Define a chave privada
     * @param string $publicKey
     * @return \Sped\Certification\X509Certified 
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    /**
     * Define a chave pública.
     * @param boolean $onlyKey returns only key value.
     * @return string 
     */
    public function getPublicKey($onlyKey = false)
    {
        if ($onlyKey)
            return preg_replace("/(^--.*\n|\n.*--$|[\r\n])/", '', $this->publicKey);

        return $this->publicKey;
    }

    /**
     * Define a chave pública
     * @param string $publicKey
     * @return \Sped\Certification\X509Certified 
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     *
     * @return boolean
     */
    public function isExpired()
    {
        return new \DateTime() > $this->getValidTo();
    }

    /**
     *
     * @return boolean
     */
    public function isValid()
    {
        return (new \DateTime() >= $this->getValidFrom()) &&
                (new \DateTime() <= $this->getValidTo());
    }

}