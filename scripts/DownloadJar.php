<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DownloadJar
 *
 * @author antonio
 */
class DownloadJar
{

    protected $resource;
    protected $_path;
    protected $_url;

    public function __construct($emissor)
    {
        $this->resource = new DOMDocument();
        $this->resource->load($emissor);
        $this->_path = dirname($emissor) . DIRECTORY_SEPARATOR . 'aplicativo';
        $this->_url = $this->resource->documentElement->getAttribute('codebase');
    }

    public function run()
    {
        $jars = $this->resource->getElementsByTagName('jar');
        /* @var $jar DOMElement */
        foreach ($jars as $jar) {
            $remoteFile = $jar->getAttribute('href');
            $realPathFile = $this->_path . DIRECTORY_SEPARATOR . $remoteFile;
            if (!$this->saveFile($realPathFile, $this->download($this->_url . $remoteFile)))
                throw new Exception('Can\' save the file: ' . $realPathFile);
        }
    }

    public function saveFile($fileName, $content)
    {
        $this->mkdir(dirname($fileName));
        if (file_put_contents($fileName, $content))
            return true;
        return false;
    }

    public function mkdir($directoryPath)
    {
        $path = explode(DIRECTORY_SEPARATOR, $directoryPath);
        foreach ($path as $pathName) {
            $dirPath .= $pathName . DIRECTORY_SEPARATOR;
            if (!is_dir($dirPath))
                mkdir($dirPath);
        }
    }

    public function download($url)
    {
        $curl = curl_init();
        $expira = 5;
        $agente = 'Mozilla/4.0 (compatible;MSIE 6.0;Windows NT 5.1;.NET CLR 1.1.4322)';
        curl_setopt($curl, CURLOPT_USERAGENT, $agente);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_AUTOREFERER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $expira);
        $conteudo = curl_exec($curl);
        curl_close($curl);
        return $conteudo;
    }

}