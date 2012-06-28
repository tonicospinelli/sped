<?php
namespace Sped\Schemas\V200;

/**
 * Tipo Dados do Veículo

 * @name TVeiculo
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TVeiculo extends \Sped\Components\Xml\Element  {
    const NAME = 'Veiculo';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TVeiculo\Placa 
     */
    public function getPlaca(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo\Placa');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TVeiculo\Placa::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TVeiculo\Placa 
     */
    public function addPlaca(){
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo\Placa(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TVeiculo\Placa $paramPlaca 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function setPlaca(\Sped\Schemas\V200\TVeiculo\Placa $paramPlaca){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TVeiculo\Placa::NAME);
        $this->appendChild($paramPlaca, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TUf 
     */
    public function getUF(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TUf');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TUf::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TUf 
     */
    public function addUF(){
        return $this->appendChild(new \Sped\Schemas\V200\TUf(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TUf $paramUF 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function setUF(\Sped\Schemas\V200\TUf $paramUF){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TUf::NAME);
        $this->appendChild($paramUF, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TVeiculo\RNTC 
     * @param int $index 
     */
    public function getRNTC(int $index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVeiculo\RNTC');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TVeiculo\RNTC::NAME)->item($index);
    }

    /**

     * @return \Sped\Schemas\V200\TVeiculo\RNTC 
     */
    public function addRNTC(){
        return $this->appendChild(new \Sped\Schemas\V200\TVeiculo\RNTC(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TVeiculo\RNTC $paramRNTC 
     * @return \Sped\Schemas\V200\TVeiculo 
     */
    public function setRNTC(\Sped\Schemas\V200\TVeiculo\RNTC $paramRNTC){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TVeiculo\RNTC::NAME);
        $this->appendChild($paramRNTC, false);
        return $this;
    }

}