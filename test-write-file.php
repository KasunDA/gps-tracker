<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fp = fopen("bloco2.txt", "a");

// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "Teste de escrita em arquivo" . "\n");

// Fecha o arquivo
fclose($fp);

