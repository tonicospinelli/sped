<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do COFINS
 * @name COFINS
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class COFINS extends \Sped\Components\Xml\Element  {

    const COFINSALIQ = 'COFINSAliq';

    const COFINSQTDE = 'COFINSQtde';

    const COFINSNT = 'COFINSNT';

    const COFINSOUTR = 'COFINSOutr';

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq 
     */
    public function getCOFINSAliq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq');
        return $this->getElementsByTagName(self::COFINSALIQ)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq 
     */
    public function addCOFINSAliq(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq(self::COFINSALIQ), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq $paramCOFINSAliq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSAliq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSAliq $paramCOFINSAliq){
        $this->removeElementsByTagName(self::COFINSALIQ);
        $this->appendChild($paramCOFINSAliq, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function getCOFINSQtde(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde');
        return $this->getElementsByTagName(self::COFINSQTDE)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde 
     */
    public function addCOFINSQtde(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde(self::COFINSQTDE), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde $paramCOFINSQtde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSQtde(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSQtde $paramCOFINSQtde){
        $this->removeElementsByTagName(self::COFINSQTDE);
        $this->appendChild($paramCOFINSQtde, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT 
     */
    public function getCOFINSNT(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT');
        return $this->getElementsByTagName(self::COFINSNT)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT 
     */
    public function addCOFINSNT(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT(self::COFINSNT), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT $paramCOFINSNT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSNT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSNT $paramCOFINSNT){
        $this->removeElementsByTagName(self::COFINSNT);
        $this->appendChild($paramCOFINSNT, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function getCOFINSOutr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr');
        return $this->getElementsByTagName(self::COFINSOUTR)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr 
     */
    public function addCOFINSOutr(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr(self::COFINSOUTR), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr $paramCOFINSOutr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS 
     */
    public function setCOFINSOutr(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr $paramCOFINSOutr){
        $this->removeElementsByTagName(self::COFINSOUTR);
        $this->appendChild($paramCOFINSOutr, false);
        return $this;
    }

}