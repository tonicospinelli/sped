<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Cana;

/**
 * Fornecimentos diários // v2.0

 * @name ForDia
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ForDia extends \Sped\Components\Xml\Element  {
    const NAME = 'forDia';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function getQtde(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1110');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1110 
     */
    public function addQtde(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1110(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1110 $paramQtde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia 
     */
    public function setQtde(\Sped\Schemas\V200\TDec_1110 $paramQtde){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1110::NAME);
        $this->appendChild($paramQtde, false);
        return $this;
    }

    /**

     * @return string 
     */
    public function getDia(){
        return $this->getAttribute('dia');
    }

    /**

     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana\ForDia 
     */
    public function setDia(string $value){
        $this->setAttribute('dia', $value);
        return $this;
    }

}