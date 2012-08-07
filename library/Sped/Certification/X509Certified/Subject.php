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
class Subject extends \Sped\Commons\Objeto
{

    /**
     * Nome do Estado ou Provincia.
     * @var string
     */
    protected $stateOrProvinceName;

    /**
     * Nome da Unidade Organizacional.
     * @var string 
     */
    protected $organizationalUnitName;

    /**
     * Nome da Organização.
     * @var string
     */
    protected $organizationName;

    /**
     * Nome da localidade.
     * @var string
     */
    protected $localityName;

    /**
     * Nome do país.
     * @var string
     */
    protected $countryName;

    /**
     * Nome comum.
     * @var string
     */
    protected $commonName;

    /**
     * Retorna o nome do estado ou província.
     * @return string
     */
    public function getStateOrProvinceName()
    {
        return $this->stateOrProvinceName;
    }

    /**
     * Define o nome do estado ou província.
     * @param string $stateOrProvinceName
     * @return \Sped\Certification\X509Certified\Subject 
     */
    public function setStateOrProvinceName($stateOrProvinceName)
    {
        $this->stateOrProvinceName = (string) $stateOrProvinceName;
        return $this;
    }

    /**
     * Retorna o nome da unidade organizacional.
     * @return string
     */
    public function getOrganizationalUnitName()
    {
        return $this->organizationalUnitName;
    }

    /**
     * Define o nome da unidade organizacional.
     * @param string $organizationalUnitName
     * @return \Sped\Certification\X509Certified\Subject 
     */
    public function setOrganizationalUnitName($organizationalUnitName)
    {
        $this->organizationalUnitName = (string) $organizationalUnitName;
        return $this;
    }

    /**
     * Retorna o nome da organização.
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Define o nome da organização.
     * @param string $organizationName
     * @return \Sped\Certification\X509Certified\Subject 
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = (string) $organizationName;
        return $this;
    }

    /**
     * Retorna o nome da localidade.
     * @return string
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * Define o nome da localidade.
     * @param string $localityName
     * @return \Sped\Certification\X509Certified\Subject 
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = (string) $localityName;
        return $this;
    }

    /**
     * Retorna o nome do país.
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Define o nome do país.
     * @param string $countryName
     * @return \Sped\Certification\X509Certified\Subject 
     */
    public function setCountryName($countryName)
    {
        $this->countryName = (string) $countryName;
        return $this;
    }

    /**
     * Retorna o nome comum.
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * Define o nome comum.
     * @param string $commonName
     * @return \Sped\Certification\X509Certified\Subject 
     */
    public function setCommonName($commonName)
    {
        $this->commonName = (string) $commonName;
        return $this;
    }

}