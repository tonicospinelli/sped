Sped
====

Sped Fiscal em PHP

O intuito deste projeto é auxiliar a comunidade PHP com a dificuldade da implementação do novo formato de envio de Notas Fiscais para a Sefaz.

* O que existe neste projeto é a conversão de arquivos XSLT em Classes PHP;
* assinatura do XML;
* Pequenos validadores feitos, mas a idéia é aproveitar o https://github.com/Respect/Validation
  * implementados: cpf, cnpj, cean (código de barras), pispasep, título eleitoral e modulo11;
  * não implementados: inscrição estadual, este exige atenção, pois para cada estado pode haver uma validação diferente;

Existe um longo caminho a ser percorrido neste projeto, o que me ajudou a chegar neste ponto foi baixar os arquivos JAR do Emissor da NFE e com a ajuda do JD-GUI http://java.decompiler.free.fr/?q=jdgui
fazer a leitura destes.

Qualquer ajuda neste projeto é bem vinda.
