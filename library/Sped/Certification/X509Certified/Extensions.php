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

namespace Sped\Certification\X509Certified;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Extensions extends \Sped\Commons\Objeto
{

    /**
     * Identificador de autoridade da chave.
     * @var string
     */
    protected $authorityKeyIdentifier;

    /**
     * Restrições básicas.
     * @var string
     */
    protected $basicConstraints;

    /**
     * Uso da chave.
     * @var string
     */
    protected $keyUsage;

    /**
     * Políticas de certificado.
     * @var string
     */
    protected $certificatePolicies;

    /**
     * Nome alternativo do assunto.
     * @var string
     */
    protected $subjectAltName;

    /**
     * Uso da chave extendida.
     * @var string
     */
    protected $extendedKeyUsage;

    /**
     * Pontos de distribuição CRL.
     * @var string
     */
    protected $crlDistributionPoints;

    /**
     * Retorna identificador de autoridade da chave.
     * @return string
     */
    public function getAuthorityKeyIdentifier()
    {
        return $this->authorityKeyIdentifier;
    }

    /**
     * Define o identificador de autoridade da chave.
     * @param string $authorityKeyIdentifier
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setAuthorityKeyIdentifier($authorityKeyIdentifier)
    {
        $this->authorityKeyIdentifier = (string) $authorityKeyIdentifier;
        return $this;
    }

    /**
     * Retorna as restrições básicas.
     * @return string
     */
    public function getBasicConstraints()
    {
        return $this->basicConstraints;
    }

    /**
     * Define as restrições básicas.
     * @param string $basicConstraints
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setBasicConstraints($basicConstraints)
    {
        $this->basicConstraints = (string) $basicConstraints;
        return $this;
    }

    /**
     * Retorna o uso da chave.
     * @return string
     */
    public function getKeyUsage()
    {
        return $this->keyUsage;
    }

    /**
     * Define o uso da chave.
     * @param string $keyUsage
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setKeyUsage($keyUsage)
    {
        $this->keyUsage = (string) $keyUsage;
        return $this;
    }

    /**
     * Retorna as políticas de certificado.
     * @return string
     */
    public function getCertificatePolicies()
    {
        return $this->certificatePolicies;
    }

    /**
     * Define as políticas de certificado.
     * @param string $certificatePolicies
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setCertificatePolicies($certificatePolicies)
    {
        $this->certificatePolicies = (string) $certificatePolicies;
        return $this;
    }

    /**
     * Retorna o nome alternativo do assunto.
     * @return string
     */
    public function getSubjectAltName()
    {
        return $this->subjectAltName;
    }

    /**
     * Define o nome alternativo do assunto.
     * @param string $subjectAltName
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setSubjectAltName($subjectAltName)
    {
        $this->subjectAltName = (string) $subjectAltName;
        return $this;
    }

    /**
     * Retorna o uso da chave extendida.
     * @return string
     */
    public function getExtendedKeyUsage()
    {
        return $this->extendedKeyUsage;
    }

    /**
     * Define o uso da chave extendida.
     * @param string $extendedKeyUsage
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setExtendedKeyUsage($extendedKeyUsage)
    {
        $this->extendedKeyUsage = (string) $extendedKeyUsage;
        return $this;
    }

    /**
     * Retorna os pontos de distribuição CRL.
     * @return string
     */
    public function getCrlDistributionPoints()
    {
        return $this->crlDistributionPoints;
    }

    /**
     * Define os pontos de distribuição CRL.
     * @param string $crlDistributionPoints
     * @return \Sped\Certification\X509Certified\Extensions 
     */
    public function setCrlDistributionPoints($crlDistributionPoints)
    {
        $this->crlDistributionPoints = (string) $crlDistributionPoints;
        return $this;
    }

}