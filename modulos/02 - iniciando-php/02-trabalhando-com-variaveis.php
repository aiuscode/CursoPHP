<?php

//comando para corrigir acentuação do código
header('Content-Type: text/html; charset=utf-8');

//variáveis normais
$meuNome = "Augusto L. do Nascimento";
$minha_empresa = "Vivareal Internet Ltda";

$idadeDoCliente = 29;
$idade_do_cliente = 29;

echo "Meu nome é {$meuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadeDoCliente} anos!<hr>";

//VAR de referência!
$var = "empresa";
$$var = "Vivareal";
echo "Minha empresa {$var} é a {$empresa}";
echo "<hr>";

//Reescrita
$Nome = "Maria";
echo "{$Nome}<br>";

//Concatenação
$Nome .= " Nascimento";
echo "{$Nome}<br>";