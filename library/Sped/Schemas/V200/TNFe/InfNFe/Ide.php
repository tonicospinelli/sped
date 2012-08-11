<?php

namespace Sped\Schemas\V200\TNFe\InfNFe;

/**
 * identificação da NF-e
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Ide
 * @package Sped
 */
class Ide extends \Sped\Components\Xml\Element 
{

    const CUF = 'cUF';

    const CNF = 'cNF';

    const NATOP = 'natOp';

    const INDPAG = 'indPag';

    const MOD = 'mod';

    const SERIE = 'serie';

    const NNF = 'nNF';

    const DEMI = 'dEmi';

    const DSAIENT = 'dSaiEnt';

    const HSAIENT = 'hSaiEnt';

    const TPNF = 'tpNF';

    const CMUNFG = 'cMunFG';

    const NFREF = 'NFref';

    const TPIMP = 'tpImp';

    const TPEMIS = 'tpEmis';

    const CDV = 'cDV';

    const TPAMB = 'tpAmb';

    const FINNFE = 'finNFe';

    const PROCEMI = 'procEmi';

    const VERPROC = 'verProc';

    const DHCONT = 'dhCont';

    const XJUST = 'xJust';

    /**
     * Retorna Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * Adiciona Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código da UF do emitente do Documento Fiscal. Utilizar a Tabela do IBGE.
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF)
    {
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * Retorna Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e. (tamanho reduzido para 8 dígitos v2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF 
     */
    public function getCNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF');
        return $this->getElementsByTagName(self::CNF)->item(0);
    }

    /**
     * Adiciona Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e. (tamanho reduzido para 8 dígitos v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF 
     */
    public function addCNF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF(self::CNF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código numérico que compõe a Chave de Acesso. Número aleatório gerado pelo emitente para cada NF-e. (tamanho reduzido para 8 dígitos v2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF $paramCNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CNF $paramCNF)
    {
        $this->removeElementsByTagName(self::CNF);
        $this->appendChild($paramCNF, false);
        return $this;
    }

    /**
     * Retorna Descrição da Natureza da Operação
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp 
     */
    public function getNatOp()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp');
        return $this->getElementsByTagName(self::NATOP)->item(0);
    }

    /**
     * Adiciona Descrição da Natureza da Operação
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp 
     */
    public function addNatOp($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp(self::NATOP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Descrição da Natureza da Operação
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp $paramNatOp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNatOp(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NatOp $paramNatOp)
    {
        $this->removeElementsByTagName(self::NATOP);
        $this->appendChild($paramNatOp, false);
        return $this;
    }

    /**
     * Retorna Indicador da forma de pagamento:<br />
     * 0 – pagamento à vista;<br />
     * 1 – pagamento à prazo;<br />
     * 2 – outros.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag 
     */
    public function getIndPag()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag');
        return $this->getElementsByTagName(self::INDPAG)->item(0);
    }

    /**
     * Adiciona Indicador da forma de pagamento:<br />
     * 0 – pagamento à vista;<br />
     * 1 – pagamento à prazo;<br />
     * 2 – outros.
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag 
     */
    public function addIndPag($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag(self::INDPAG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Indicador da forma de pagamento:<br />
     * 0 – pagamento à vista;<br />
     * 1 – pagamento à prazo;<br />
     * 2 – outros.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag $paramIndPag 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setIndPag(\Sped\Schemas\V200\TNFe\InfNFe\Ide\IndPag $paramIndPag)
    {
        $this->removeElementsByTagName(self::INDPAG);
        $this->appendChild($paramIndPag, false);
        return $this;
    }

    /**
     * Retorna Código do modelo do Documento Fiscal. Utilizar 55 para identificação da NF-e, emitida em substituição ao modelo 1 e 1A.
     * @return \Sped\Schemas\V200\TMod 
     */
    public function getMod()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMod');
        return $this->getElementsByTagName(self::MOD)->item(0);
    }

    /**
     * Adiciona Código do modelo do Documento Fiscal. Utilizar 55 para identificação da NF-e, emitida em substituição ao modelo 1 e 1A.
     * @param string $value 
     * @return \Sped\Schemas\V200\TMod 
     */
    public function addMod($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TMod(self::MOD, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do modelo do Documento Fiscal. Utilizar 55 para identificação da NF-e, emitida em substituição ao modelo 1 e 1A.
     * @param \Sped\Schemas\V200\TMod $paramMod 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setMod(\Sped\Schemas\V200\TMod $paramMod)
    {
        $this->removeElementsByTagName(self::MOD);
        $this->appendChild($paramMod, false);
        return $this;
    }

    /**
     * Retorna Série do Documento Fiscal<br />
     * série normal 0-889<br />
     * Avulsa Fisco 890-899<br />
     * SCAN 900-999
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function getSerie()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TSerie');
        return $this->getElementsByTagName(self::SERIE)->item(0);
    }

    /**
     * Adiciona Série do Documento Fiscal<br />
     * série normal 0-889<br />
     * Avulsa Fisco 890-899<br />
     * SCAN 900-999
     * @param string $value 
     * @return \Sped\Schemas\V200\TSerie 
     */
    public function addSerie($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TSerie(self::SERIE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Série do Documento Fiscal<br />
     * série normal 0-889<br />
     * Avulsa Fisco 890-899<br />
     * SCAN 900-999
     * @param \Sped\Schemas\V200\TSerie $paramSerie 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setSerie(\Sped\Schemas\V200\TSerie $paramSerie)
    {
        $this->removeElementsByTagName(self::SERIE);
        $this->appendChild($paramSerie, false);
        return $this;
    }

    /**
     * Retorna Número do Documento Fiscal
     * @return \Sped\Schemas\V200\TNF 
     */
    public function getNNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNF');
        return $this->getElementsByTagName(self::NNF)->item(0);
    }

    /**
     * Adiciona Número do Documento Fiscal
     * @param string $value 
     * @return \Sped\Schemas\V200\TNF 
     */
    public function addNNF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNF(self::NNF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Número do Documento Fiscal
     * @param \Sped\Schemas\V200\TNF $paramNNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNNF(\Sped\Schemas\V200\TNF $paramNNF)
    {
        $this->removeElementsByTagName(self::NNF);
        $this->appendChild($paramNNF, false);
        return $this;
    }

    /**
     * Retorna Data de emissão do Documento Fiscal (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDEmi()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DEMI)->item(0);
    }

    /**
     * Adiciona Data de emissão do Documento Fiscal (AAAA-MM-DD)
     * @param string $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDEmi($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DEMI, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Data de emissão do Documento Fiscal (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDEmi(\Sped\Schemas\V200\TData $paramDEmi)
    {
        $this->removeElementsByTagName(self::DEMI);
        $this->appendChild($paramDEmi, false);
        return $this;
    }

    /**
     * Retorna Data de saída ou de entrada da mercadoria / produto (AAAA-MM-DD)
     * @return \Sped\Schemas\V200\TData 
     */
    public function getDSaiEnt()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TData');
        return $this->getElementsByTagName(self::DSAIENT)->item(0);
    }

    /**
     * Adiciona Data de saída ou de entrada da mercadoria / produto (AAAA-MM-DD)
     * @param string $value 
     * @return \Sped\Schemas\V200\TData 
     */
    public function addDSaiEnt($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TData(self::DSAIENT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Data de saída ou de entrada da mercadoria / produto (AAAA-MM-DD)
     * @param \Sped\Schemas\V200\TData $paramDSaiEnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDSaiEnt(\Sped\Schemas\V200\TData $paramDSaiEnt)
    {
        $this->removeElementsByTagName(self::DSAIENT);
        $this->appendChild($paramDSaiEnt, false);
        return $this;
    }

    /**
     * Retorna Hora de saída ou de entrada da mercadoria / produto (HH:MM:SS) (v2.0)
     * @return \Sped\Schemas\V200\TTime 
     */
    public function getHSaiEnt()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TTime');
        return $this->getElementsByTagName(self::HSAIENT)->item(0);
    }

    /**
     * Adiciona Hora de saída ou de entrada da mercadoria / produto (HH:MM:SS) (v2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TTime 
     */
    public function addHSaiEnt($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TTime(self::HSAIENT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Hora de saída ou de entrada da mercadoria / produto (HH:MM:SS) (v2.0)
     * @param \Sped\Schemas\V200\TTime $paramHSaiEnt 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setHSaiEnt(\Sped\Schemas\V200\TTime $paramHSaiEnt)
    {
        $this->removeElementsByTagName(self::HSAIENT);
        $this->appendChild($paramHSaiEnt, false);
        return $this;
    }

    /**
     * Retorna Tipo do Documento Fiscal (0 - entrada; 1 - saída)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF 
     */
    public function getTpNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF');
        return $this->getElementsByTagName(self::TPNF)->item(0);
    }

    /**
     * Adiciona Tipo do Documento Fiscal (0 - entrada; 1 - saída)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF 
     */
    public function addTpNF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF(self::TPNF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tipo do Documento Fiscal (0 - entrada; 1 - saída)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF $paramTpNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpNF $paramTpNF)
    {
        $this->removeElementsByTagName(self::TPNF);
        $this->appendChild($paramTpNF, false);
        return $this;
    }

    /**
     * Retorna Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function getCMunFG()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodMunIBGE');
        return $this->getElementsByTagName(self::CMUNFG)->item(0);
    }

    /**
     * Adiciona Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodMunIBGE 
     */
    public function addCMunFG($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodMunIBGE(self::CMUNFG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE)
     * @param \Sped\Schemas\V200\TCodMunIBGE $paramCMunFG 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCMunFG(\Sped\Schemas\V200\TCodMunIBGE $paramCMunFG)
    {
        $this->removeElementsByTagName(self::CMUNFG);
        $this->appendChild($paramCMunFG, false);
        return $this;
    }

    /**
     * Retorna Grupo de infromações da NF referenciada
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function getNFref($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref');
        return $this->getElementsByTagName(self::NFREF)->item($index);
    }

    /**
     * Adiciona Grupo de infromações da NF referenciada
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function addNFref()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref(self::NFREF, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Grupo de infromações da NF referenciada
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref $paramNFref 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setNFref(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref $paramNFref)
    {
        $this->removeElementsByTagName(self::NFREF);
        $this->appendChild($paramNFref, false);
        return $this;
    }

    /**
     * Retorna Formato de impressão do DANFE (1 - Retrato; 2 - Paisagem)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp 
     */
    public function getTpImp()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp');
        return $this->getElementsByTagName(self::TPIMP)->item(0);
    }

    /**
     * Adiciona Formato de impressão do DANFE (1 - Retrato; 2 - Paisagem)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp 
     */
    public function addTpImp($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp(self::TPIMP, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Formato de impressão do DANFE (1 - Retrato; 2 - Paisagem)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp $paramTpImp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpImp(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpImp $paramTpImp)
    {
        $this->removeElementsByTagName(self::TPIMP);
        $this->appendChild($paramTpImp, false);
        return $this;
    }

    /**
     * Retorna Forma de emissão da NF-e<br />
     * 1 - Normal;<br />
     * 2 - Contingência FS<br />
     * 3 - Contingência SCAN<br />
     * 4 - Contingência DPEC<br />
     * 5 - Contingência FSDA<br />
     * 6 - Contingência SVC - AN<br />
     * 7 - Contingência SVC - RS
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis 
     */
    public function getTpEmis()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis');
        return $this->getElementsByTagName(self::TPEMIS)->item(0);
    }

    /**
     * Adiciona Forma de emissão da NF-e<br />
     * 1 - Normal;<br />
     * 2 - Contingência FS<br />
     * 3 - Contingência SCAN<br />
     * 4 - Contingência DPEC<br />
     * 5 - Contingência FSDA<br />
     * 6 - Contingência SVC - AN<br />
     * 7 - Contingência SVC - RS
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis 
     */
    public function addTpEmis($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis(self::TPEMIS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Forma de emissão da NF-e<br />
     * 1 - Normal;<br />
     * 2 - Contingência FS<br />
     * 3 - Contingência SCAN<br />
     * 4 - Contingência DPEC<br />
     * 5 - Contingência FSDA<br />
     * 6 - Contingência SVC - AN<br />
     * 7 - Contingência SVC - RS
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis $paramTpEmis 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpEmis(\Sped\Schemas\V200\TNFe\InfNFe\Ide\TpEmis $paramTpEmis)
    {
        $this->removeElementsByTagName(self::TPEMIS);
        $this->appendChild($paramTpEmis, false);
        return $this;
    }

    /**
     * Retorna Digito Verificador da Chave de Acesso da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV 
     */
    public function getCDV()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV');
        return $this->getElementsByTagName(self::CDV)->item(0);
    }

    /**
     * Adiciona Digito Verificador da Chave de Acesso da NF-e
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV 
     */
    public function addCDV($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV(self::CDV, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Digito Verificador da Chave de Acesso da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV $paramCDV 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setCDV(\Sped\Schemas\V200\TNFe\InfNFe\Ide\CDV $paramCDV)
    {
        $this->removeElementsByTagName(self::CDV);
        $this->appendChild($paramCDV, false);
        return $this;
    }

    /**
     * Retorna Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(self::TPAMB)->item(0);
    }

    /**
     * Adiciona Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @param string $value 
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function addTpAmb($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(self::TPAMB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb)
    {
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * Retorna Finalidade da emissão da NF-e:<br />
     * 1 - NFe normal<br />
     * 2 - NFe complementar<br />
     * 3 - NFe de ajuste
     * @return \Sped\Schemas\V200\TFinNFe 
     */
    public function getFinNFe()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TFinNFe');
        return $this->getElementsByTagName(self::FINNFE)->item(0);
    }

    /**
     * Adiciona Finalidade da emissão da NF-e:<br />
     * 1 - NFe normal<br />
     * 2 - NFe complementar<br />
     * 3 - NFe de ajuste
     * @param string $value 
     * @return \Sped\Schemas\V200\TFinNFe 
     */
    public function addFinNFe($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TFinNFe(self::FINNFE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Finalidade da emissão da NF-e:<br />
     * 1 - NFe normal<br />
     * 2 - NFe complementar<br />
     * 3 - NFe de ajuste
     * @param \Sped\Schemas\V200\TFinNFe $paramFinNFe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setFinNFe(\Sped\Schemas\V200\TFinNFe $paramFinNFe)
    {
        $this->removeElementsByTagName(self::FINNFE);
        $this->appendChild($paramFinNFe, false);
        return $this;
    }

    /**
     * Retorna Processo de emissão utilizado com a seguinte codificação:<br />
     * 0 - emissão de NF-e com aplicativo do contribuinte;<br />
     * 1 - emissão de NF-e avulsa pelo Fisco;<br />
     * 2 - emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site<br />
     * do Fisco;<br />
     * 3- emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     * @return \Sped\Schemas\V200\TProcEmi 
     */
    public function getProcEmi()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TProcEmi');
        return $this->getElementsByTagName(self::PROCEMI)->item(0);
    }

    /**
     * Adiciona Processo de emissão utilizado com a seguinte codificação:<br />
     * 0 - emissão de NF-e com aplicativo do contribuinte;<br />
     * 1 - emissão de NF-e avulsa pelo Fisco;<br />
     * 2 - emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site<br />
     * do Fisco;<br />
     * 3- emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     * @param string $value 
     * @return \Sped\Schemas\V200\TProcEmi 
     */
    public function addProcEmi($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TProcEmi(self::PROCEMI, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Processo de emissão utilizado com a seguinte codificação:<br />
     * 0 - emissão de NF-e com aplicativo do contribuinte;<br />
     * 1 - emissão de NF-e avulsa pelo Fisco;<br />
     * 2 - emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site<br />
     * do Fisco;<br />
     * 3- emissão de NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
     * @param \Sped\Schemas\V200\TProcEmi $paramProcEmi 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setProcEmi(\Sped\Schemas\V200\TProcEmi $paramProcEmi)
    {
        $this->removeElementsByTagName(self::PROCEMI);
        $this->appendChild($paramProcEmi, false);
        return $this;
    }

    /**
     * Retorna versão do aplicativo utilizado no processo de<br />
     * emissão
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc 
     */
    public function getVerProc()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc');
        return $this->getElementsByTagName(self::VERPROC)->item(0);
    }

    /**
     * Adiciona versão do aplicativo utilizado no processo de<br />
     * emissão
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc 
     */
    public function addVerProc($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc(self::VERPROC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define versão do aplicativo utilizado no processo de<br />
     * emissão
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc $paramVerProc 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setVerProc(\Sped\Schemas\V200\TNFe\InfNFe\Ide\VerProc $paramVerProc)
    {
        $this->removeElementsByTagName(self::VERPROC);
        $this->appendChild($paramVerProc, false);
        return $this;
    }

    /**
     * Retorna Informar a data e hora de entrada em contingência contingência no formato AAAA-MM-DDTHH:MM:SS (v.2.0).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont 
     */
    public function getDhCont()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont');
        return $this->getElementsByTagName(self::DHCONT)->item(0);
    }

    /**
     * Adiciona Informar a data e hora de entrada em contingência contingência no formato AAAA-MM-DDTHH:MM:SS (v.2.0).
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont 
     */
    public function addDhCont($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont(self::DHCONT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar a data e hora de entrada em contingência contingência no formato AAAA-MM-DDTHH:MM:SS (v.2.0).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont $paramDhCont 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setDhCont(\Sped\Schemas\V200\TNFe\InfNFe\Ide\DhCont $paramDhCont)
    {
        $this->removeElementsByTagName(self::DHCONT);
        $this->appendChild($paramDhCont, false);
        return $this;
    }

    /**
     * Retorna Informar a Justificativa da entrada em (v.2.0)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust 
     */
    public function getXJust()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust');
        return $this->getElementsByTagName(self::XJUST)->item(0);
    }

    /**
     * Adiciona Informar a Justificativa da entrada em (v.2.0)
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust 
     */
    public function addXJust($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust(self::XJUST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informar a Justificativa da entrada em (v.2.0)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust $paramXJust 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function setXJust(\Sped\Schemas\V200\TNFe\InfNFe\Ide\XJust $paramXJust)
    {
        $this->removeElementsByTagName(self::XJUST);
        $this->appendChild($paramXJust, false);
        return $this;
    }

}