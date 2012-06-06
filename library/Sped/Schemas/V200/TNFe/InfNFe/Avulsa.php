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

namespace Sped\Schemas\V200\TNFe\InfNFe;

use Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Cnpj,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataEmi,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataPag,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matricula,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NumeroDar,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Uf,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\ValorDar,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente,
    Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200\TNFe\InfNFe
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Avulsa extends \Sped\Components\Xml\Element {

    const NAME = 'avulsa';

    public function __construct() {
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    public function loadDefaults() {
        $this->addCnpj();
        $this->addXOrgao();
        $this->addMatricula();
        $this->addXAgente();
        $this->addUf();
        $this->addRepEmi();
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Cnpj
     */
    public function getCnpj() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Cnpj');
        return $this->getElementsByTagName(Cnpj::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Cnpj
     */
    public function addCnpj($value = null) {
        return $this->appendChild(new Cnpj($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Cnpj $paramcCnpj
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCnpj($paramcCnpj) {
        $this->appendChild($paramcCnpj, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao
     */
    public function getXOrgao() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao');
        return $this->getElementsByTagName(XOrgao::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao
     */
    public function addXOrgao($value = null) {
        return $this->appendChild(new XOrgao($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XOrgao $paramcXOrgao
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setXOrgao($paramcXOrgao) {
        $this->appendChild($paramcXOrgao, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matricula
     */
    public function getMatricula() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matricula');
        return $this->getElementsByTagName(Matricula::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matricula
     */
    public function addMatricula($value = null) {
        return $this->appendChild(new Matricula($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Matricula $paramcMatricula
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setMatricula($paramcMatricula) {
        $this->appendChild($paramcMatricula, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente
     */
    public function getXAgente() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente');
        return $this->getElementsByTagName(XAgente::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente
     */
    public function addXAgente($value = null) {
        return $this->appendChild(new XAgente($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\XAgente $paramcXAgente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setXAgente($paramcXAgente) {
        $this->appendChild($paramcXAgente, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone
     */
    public function getFone() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone');
        return $this->getElementsByTagName(Fone::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone
     */
    public function addFone($value = null) {
        return $this->appendChild(new Fone($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Fone $paramFone
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setFone($paramFone) {
        $this->appendChild($paramFone, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Uf
     */
    public function getUf() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Uf');
        return $this->getElementsByTagName(Uf::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Uf
     */
    public function addUf($value = null) {
        return $this->appendChild(new Uf($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\Uf $paramUf
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setUf($paramUf) {
        $this->appendChild($paramUf, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NumeroDar
     */
    public function getNumeroDar() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NumeroDar');
        return $this->getElementsByTagName(NumeroDar::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NumeroDar
     */
    public function addNumeroDar($value = null) {
        return $this->appendChild(new NumeroDar($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\NumeroDar $paramNumeroDar
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNumeroDar($paramNumeroDar) {
        $this->appendChild($paramNumeroDar, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataEmi
     */
    public function getDataEmi() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataEmi');
        return $this->getElementsByTagName(DataEmi::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataEmi
     */
    public function addDataEmi($value = null) {
        return $this->appendChild(new DataEmi($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataEmi $paramDataEmi
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDataEmi($paramDataEmi) {
        $this->appendChild($paramDataEmi, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\ValorDAR
     */
    public function getValorDar() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\ValorDAR');
        return $this->getElementsByTagName(ValorDar::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\ValorDAR
     */
    public function addValorDar($value = null) {
        return $this->appendChild(new ValorDar($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\ValorDAR $paramValorDar
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setValorDar($paramValorDar) {
        $this->appendChild($paramValorDar, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi
     */
    public function getRepEmi() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi');
        return $this->getElementsByTagName(RepEmi::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\RepEmi
     */
    public function addRepEmi($value = null) {
        return $this->appendChild(new RepEmi($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataPag $paramRepEmi
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setRepEmi($paramRepEmi) {
        $this->appendChild($paramRepEmi, true);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataPag
     */
    public function getDataPag() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataPag');
        return $this->getElementsByTagName(DataPag::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataPag
     */
    public function addDataPag($value = null) {
        return $this->appendChild(new DataPag($value), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa\DataPag $paramDataPag
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDataPag($paramDataPag) {
        $this->appendChild($paramDataPag, true);
        return $this;
    }

}