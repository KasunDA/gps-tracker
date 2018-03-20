<?php
$fp = fopen("bloco1.txt", "a");

// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, "Teste de escrita em arquivo" . "\n");

// Fecha o arquivo
fclose($fp);

