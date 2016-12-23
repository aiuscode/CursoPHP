<?php

//comando para corrigir acentuação do código
header('Content-Type: text/html; charset=utf-8');

// exemplos de variáveis
$ola = "Olá Mundo!";
$nome = "Augusto Nascimento";

echo '$ola'; // aspas simples para exibir a variável
echo "$ola"; // aspas duplas interpretar a variável
// delimitar uma variável com chaves {} mais o resto de uma  string
//exemplo
echo '<hr>'; // quebra de linha
echo "Olá Mundo meu nome é: {$nome}<br>";


print("Ola, {$nome}");

$Arr = array(
        "Ola, $nome, tudo bem? . é programador",
        "Ola" => "teste"
        );
print_r($Arr);
echo "<hr>";
?>

    <article>
             <h1><?= $ola;?></h1>
             <p>Meu nome é <?php echo $nome; ?></p>
</article>
