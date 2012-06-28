<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\COFINS\COFINSOutr;

/**
 * Código de Situação Tributária do COFINS:<br />
 * 49 - Outras Operações de Saída<br />
 * 50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
 * 51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno<br />
 * 52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação<br />
 * 53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
 * 54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
 * 55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
 * 56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
 * 60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno<br />
 * 61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno<br />
 * 62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação<br />
 * 63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno<br />
 * 64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação<br />
 * 65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação<br />
 * 66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação<br />
 * 67 - Crédito Presumido - Outras Operações<br />
 * 70 - Operação de Aquisição sem Direito a Crédito<br />
 * 71 - Operação de Aquisição com Isenção<br />
 * 72 - Operação de Aquisição com Suspensão<br />
 * 73 - Operação de Aquisição a Alíquota Zero<br />
 * 74 - Operação de Aquisição sem Incidência da Contribuição<br />
 * 75 - Operação de Aquisição por Substituição Tributária<br />
 * 98 - Outras Operações de Entrada<br />
 * 99 - Outras Operações.
 * @name CST
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CST extends \Sped\Components\Xml\Element  {
    const NAME = 'CST';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}