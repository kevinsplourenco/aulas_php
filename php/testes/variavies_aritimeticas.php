<?php

// Ler nome e idade do usuário
$nome = readline("Digite o nome: ");
$idade = readline("Digite a idade: ");

// Exibir nome e idade na tela
echo $nome; // Exibe na tela
echo "\n";
echo $idade; // Exibe na tela

// Ler dois valores do usuário
$var1 = readline("Digite primeiro valor: ");
$var2 = readline("Digite segundo valor: ");

// Operações matemáticas com os valores
$var3 = $var2 + $var1;
$var4 = $var2 - $var1;
$var5 = $var1 * $var2;
$var6 = $var1 / $var2;

// Exibir os valores na tela
echo "\n";
var_dump($var1); // Exibe na tela
var_dump($var2); // Exibe na tela
var_dump($var3); // Exibe na tela
var_dump($var4); // Exibe na tela
var_dump($var5); // Exibe na tela
var_dump($var6); // Exibe na tela

// Ler nome completo e idade do usuário
$nome = readline("Digite seu nome: ");
$sobrenome = readline("Digite sobrenome: ");
$idade = readline("Digite sua idade: ");

// Concatenar nome e sobrenome
$nomeCompleto = $nome . " " . $sobrenome;

// Exibir nome completo, idade e número
echo $nomeCompleto;
echo "\n";
echo $nome . $idade;
echo "\n";
echo $nomeCompleto;

?>
