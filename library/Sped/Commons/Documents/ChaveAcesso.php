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

namespace Sped\Commons\Documents;

use \Sped\Commons\Math;

/**
 * @category   Sped
 * @package    Sped\Commons\Documents
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class ChaveAcesso extends AbstractDocument
{

    const MASK = '00-00/00-00.000.000/0000-00-00-000-000.000.000-0-00000000-0';

    protected $codigoUfEmitente;
    protected $ano;
    protected $mes;
    protected $cnpjEmitente;
    protected $modelo;
    protected $serie;
    protected $numeroNFe;
    protected $tipoEmissao;
    protected $codigoNumerico;

    public function getCodigoUfEmitente()
    {
        return $this->codigoUfEmitente;
    }

    public function setCodigoUfEmitente($codigoUfEmitente)
    {
        $this->codigoUfEmitente = $codigoUfEmitente;
        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
        return $this;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function setMes($mes)
    {
        $this->mes = $mes;
        return $this;
    }

    public function getCnpjEmitente()
    {
        return $this->cnpjEmitente;
    }

    public function setCnpjEmitente($cnpjEmitente)
    {
        $this->cnpjEmitente = $cnpjEmitente;
        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getSerie()
    {
        return $this->serie;
    }

    public function setSerie($serie)
    {
        $this->serie = $serie;
        return $this;
    }

    public function getNumeroNFe()
    {
        return $this->numeroNFe;
    }

    public function setNumeroNFe($numeroNFe)
    {
        $this->numeroNFe = $numeroNFe;
        return $this;
    }

    public function getTipoEmissao()
    {
        return $this->tipoEmissao;
    }

    public function setTipoEmissao($tipoEmissao)
    {
        $this->tipoEmissao = $tipoEmissao;
        return $this;
    }

    public function getCodigoNumerico()
    {
        return $this->codigoNumerico;
    }

    public function setCodigoNumerico($codigoNumerico)
    {
        $this->codigoNumerico = $codigoNumerico;
        return $this;
    }

    /**
     * Retorna o maior multiplicador.
     * @return int 
     */
    public function getMaxMultiplier()
    {
        return 9;
    }

    /**
     * Retorna o número de Digitos Verificadores.
     * @return int 
     */
    public function getDigitsCount()
    {
        return 1;
    }

    /**
     * Retorna o número da Chave de Acesso com a máscara.
     * @return string
     */
    public function getValueMasked()
    {
        return \Sped\Commons\Mask::exec($this->getValueUnmasked(), self::MASK);
    }

    /**
     * Retorna o tamanho máximo do documento.
     * @return int 
     */
    public function getLength()
    {
        return 44;
    }

    /**
     * Verifica se o número do documento informado é válido.
     * @return bool
     */
    public function isValid()
    {
        return \Sped\Validation::chaveAcesso()->validate($this);
    }

    /**
     * Gera o código número aleatório com base nas informações do XML.
     * @param \Sped\Schemas\V200\DocumentNFe $domNFe Objeto do XML.
     * @return float Código Númerico gerado aleatoriamente.
     */
    public function gerarCodigoNumerico(\Sped\Schemas\V200\DocumentNFe $domNFe)
    {
        $codigoNumerico = 0;
        $hasIndex = 0;
        $nfeHash = sha1($domNFe->getNFe()->C14N(FALSE, FALSE, NULL, NULL));
        $coeficientes = new \Sped\Commons\Collections\ArrayCollection(array(3, 2, 2, 2, 2, 2, 2, 3));
        $iterator = $coeficientes->getIterator();
        foreach ($iterator as $index => $element) {
            $algarismoBytes = substr($nfeHash, $hasIndex, $hasIndex + $element);
            $somaBytes = self::somaBytes($algarismoBytes);
            $algarismo = self::somaInteiro($somaBytes);
            $codigoNumerico = ($codigoNumerico + $algarismo * Math::pow(10.0, $index));
            $hasIndex += $element;
        }
        return $codigoNumerico;
    }

    /**
     * Retorna a soma dos valores ASCII dos caractéres.
     * @param string $bytes Caracters que serão convertidos para ASCII.
     * @return int Soma dos valores ASCII.
     */
    private static function somaBytes($bytes)
    {
        $soma = 0;
        $bytes = str_split($bytes);
        foreach ($bytes as $byte)
            $soma += ord($byte);

        return (int) $soma;
    }

    /**
     * Retorna soma os restos da divisão do número até este ser menor que zero.
     * @param int $numero Número que gera a soma.
     * @return int Soma dos restos da divisão enquanto o número é suprior a zero.
     */
    private static function somaInteiro($numero)
    {
        $somaAtual = 0;
        while ($numero > 0) {
            $somaAtual += $numero % 10;
            $numero /= 10;
            if (strpos($numero, 'E-') !== false)
                break;
        }
        if (($somaAtual / 10 > 0) && (strpos($somaAtual / 10, 'E-') !== false))
            return self::somaInteiro($somaAtual);

        return (int) $somaAtual;
    }

}