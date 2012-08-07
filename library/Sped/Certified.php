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

namespace Sped;

/**
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Certified
{

    /**
     * Load the X509 Certified
     * @param string $filename
     * @param string $password
     * @return \Sped\Certification\X509Certified 
     */
    public static function loadPfx($filename, $password = '')
    {
        $x509 = new \Sped\Certification\X509Certified();
        $x509->load($filename, $password);
        return $x509;
    }

    public static function createXmlSignature(Schemas\V200\DocumentNFe &$domNFe, Certification\X509Certified $certified)
    {
        if ((!$domNFe->getNFe() instanceof Schemas\V200\TNFe) ||
                (!$domNFe->getNFe()->getInfNFe() instanceof Schemas\V200\TNFe\InfNFe))
            throw new Exception('O arquivo xml está vazio, não é possível assiná-lo.');

        if ($domNFe->getNFe()->getSignature() instanceof Schemas\V200\SignatureType)
            throw new Exception('O arquivo xml já está assinado, não é possível assiná-lo.');

        $idNFe = preg_replace('/[^\d]/', '', $domNFe->getNFe()->getInfNFe()->getId());

        //extrai os dados da tag para uma string
        $dados = $domNFe->getNFe()->getInfNFe()->C14N(FALSE, FALSE, NULL, NULL);

        $digestValue = base64_encode(hash('sha1', $dados, TRUE));

        $signature = $domNFe->getNFe()->addSignature();

        $signedInfo = $signature->addSignedInfo();

        $node = $signedInfo->addCanonicalizationMethod();
        $node->setAlgorithm('http://www.w3.org/TR/2001/REC-xml-c14n-20010315');

        $node = $signedInfo->addSignatureMethod();
        $node->setAlgorithm('http://www.w3.org/2000/09/xmldsig#rsa-sha1');

        $reference = $signedInfo->addReference();
        $node->setURI('#' . $idNFe);

        $node = $reference->addTransforms();
        $node->addTransform()->setAlgorithm('http://www.w3.org/2000/09/xmldsig#enveloped-signature');
        $node->addTransform()->setAlgorithm('http://www.w3.org/TR/2001/REC-xml-c14n-20010315');

        $reference->addDigestMethod()->setAlgorithm('http://www.w3.org/2000/09/xmldsig#sha1');
        $reference->addDigestValue($digestValue);

        $dataSignedInfo = $signedInfo->C14N(FALSE, FALSE, NULL, NULL);

        //inicializa a variavel que vai receber a assinatura
        //executa a assinatura digital usando o resource da chave privada
        $certifiedSignature = '';
        $privateKey = openssl_pkey_get_private($certified->getPrivateKey());

        if (!openssl_sign($dataSignedInfo, $certifiedSignature, $privateKey))
            throw new Exception('Não foi possível recuperar a assinatura do certificado.');

        $signatureValue = base64_encode($certifiedSignature);

        $signature->addSignatureValue($signatureValue);
        $keyInfo = $signature->addKeyInfo();
        $keyInfo->addX509Data();
        $keyInfo->getX509Data()->addX509Certificate($certified->getPublicKey(true));
    }

}