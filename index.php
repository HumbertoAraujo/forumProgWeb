<?php
// Transformando arquivo XML em Objeto
$xml = simplexml_load_file('vendas.xml');

 
// Exibe as informações do XML
echo 'Título: ' . $xml->titulo . '<br>';
 
