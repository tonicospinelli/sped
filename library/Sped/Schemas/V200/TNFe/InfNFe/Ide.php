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

use Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoDV,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoMunFG,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoNF,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoUF,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\DataEmi,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\DataHoraCont,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\DataSaiEnt,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\FinNFe,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\HoraSaiEnt,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\Justificativa,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\Mod,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\NFRef,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\NumeroNF,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\ProcEmi,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\Serie,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\TpAmb,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNf,
    Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Ide extends \Sped\Components\Xml\Element {

    const NAME = 'ide';

    public function __construct() {
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoUF
     */
    public function getCodigoUF() {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoUF');
        return $this->getElementsByTagName(CodigoUF::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoUF
     */
    public function addCodigoUF() {
        return $this->appendChild(new CodigoUF(), true);
    }

    /**
     *
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoUF $paramcUF
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCodigoUF($paramcUF) {
        $this->appendChild($paramcUF, true);
        return $this;
    }

    public function getCodigoNF() {
        return $this->getElementsByTagName(CodigoNF::NAME)->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CodigoNF
     */
    public function addCodigoNF($value = null) {
        return $this->appendChild(new CodigoNF($value), true);
    }

    public function setCNF($cNF) {
        $this->cNF = $cNF;
    }

    public function getNatOp() {
        return $this->getElementsByTagName('natOp')->item(0);
    }

    public function setNatOp($natOp) {
        $this->natOp = $natOp;
    }

    public function getIndPag() {
        return $this->getElementsByTagName('indPag')->item(0);
    }

    public function setIndPag($indPag) {
        $this->indPag = $indPag;
    }

    public function getMod() {
        return $this->getElementsByTagName('mod')->item(0);
    }

    public function setMod($mod) {
        $this->mod = $mod;
    }

    public function getSerie() {
        return $this->getElementsByTagName('serie')->item(0);
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function getNNF() {
        return $this->getElementsByTagName('nNF')->item(0);
    }

    public function setNNF($nNF) {
        $this->nNF = $nNF;
    }

    public function getDEmi() {
        return $this->getElementsByTagName('dEmi')->item(0);
    }

    public function setDEmi($dEmi) {
        $this->dEmi = $dEmi;
    }

    public function getDSaiEnt() {
        return $this->getElementsByTagName('dSaiEnt')->item(0);
    }

    public function setDSaiEnt($dSaiEnt) {
        $this->dSaiEnt = $dSaiEnt;
    }

    public function getHSaiEnt() {
        return $this->getElementsByTagName('hSaiEnt')->item(0);
    }

    public function setHSaiEnt($hSaiEnt) {
        $this->hSaiEnt = $hSaiEnt;
    }

    public function getTpNF() {
        return $this->getElementsByTagName('tpNF')->item(0);
    }

    public function setTpNF($tpNF) {
        $this->tpNF = $tpNF;
    }

    public function getCMunFG() {
        return $this->getElementsByTagName('cMunFG')->item(0);
    }

    public function setCMunFG($cMunFG) {
        $this->cMunFG = $cMunFG;
    }

    public function getNFref() {
        return $this->getElementsByTagName('NFref')->item(0);
    }

    public function setNFref($NFref) {
        $this->NFref = $NFref;
    }

    public function getTpImp() {
        return $this->getElementsByTagName('tpImp')->item(0);
    }

    public function setTpImp($tpImp) {
        $this->tpImp = $tpImp;
    }

    public function getTpEmis() {
        return $this->getElementsByTagName('tpEmis')->item(0);
    }

    public function setTpEmis($tpEmis) {
        $this->tpEmis = $tpEmis;
    }

    public function getCDV() {
        return $this->getElementsByTagName('cDV')->item(0);
    }

    public function setCDV($cDV) {
        $this->cDV = $cDV;
    }

    public function getTpAmb() {
        return $this->getElementsByTagName('tpAmb')->item(0);
    }

    public function setTpAmb($tpAmb) {
        $this->tpAmb = $tpAmb;
    }

    public function getFinNFe() {
        return $this->getElementsByTagName('finNFe')->item(0);
    }

    public function setFinNFe($finNFe) {
        $this->finNFe = $finNFe;
    }

    public function getProcEmi() {
        return $this->getElementsByTagName('procEmi')->item(0);
    }

    public function setProcEmi($procEmi) {
        $this->procEmi = $procEmi;
    }

    public function getVerProc() {
        return $this->getElementsByTagName('verProc')->item(0);
    }

    public function setVerProc($verProc) {
        $this->verProc = $verProc;
    }

    public function getDhCont() {
        return $this->getElementsByTagName('dhCont')->item(0);
    }

    public function setDhCont($dhCont) {
        $this->dhCont = $dhCont;
    }

    public function getXJust() {
        return $this->getElementsByTagName('xJust')->item(0);
    }

    public function setXJust($xJust) {
        $this->xJust = $xJust;
    }

}