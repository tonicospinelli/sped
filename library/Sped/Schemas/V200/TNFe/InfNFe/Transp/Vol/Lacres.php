<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol;

/**
 * Número dos Lacres

 * @name Lacres
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class Lacres extends \Sped\Components\Xml\Element  {
    const NAME = 'lacres';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre 
     */
    public function getNLacre(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre 
     */
    public function addNLacre(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre $paramNLacre 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres 
     */
    public function setNLacre(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre $paramNLacre){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres\NLacre::NAME);
        $this->appendChild($paramNLacre, false);
        return $this;
    }

}