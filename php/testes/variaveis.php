<?php

// Exemplos de saída de conteúdo em PHP

# Usando echo para exibir uma string simples
echo "Olá mundo!";

# Usando print para exibir uma string simples
print "Olá mundo!";

# Usando echo ou print para exibir o valor de uma variável
$nome = "Maria";
echo "Olá " . $nome;

// ou

$idade = 25;
print "Eu tenho $idade anos";

# Usando aspas duplas ou simples para imprimir uma string com variáveis
$nome = "José";
echo "Meu nome é $nome";

// ou

$idade = 30;
print "Eu tenho $idade anos";

# Usando printf para formatar uma string com variáveis
$nome = "Paulo";
$idade = 40;
printf("Meu nome é %s e eu tenho %d anos", $nome, $idade);

# Usando a função var_dump para exibir informações sobre uma variável
$nome = "Ana";
$idade = 50;
$altura = 1.65;
var_dump($nome, $idade, $altura);

# Usando a função print_r para exibir informações sobre uma variável de forma mais legível
$frutas = array("maçã", "banana", "laranja");
print_r($frutas);

# Tipos de variáveis em PHP

# Variáveis de texto (string)
$nome = "Maria";
$sobrenome = "Silva";
$mensagem = "Olá " . $nome . " " . $sobrenome;

# Variáveis numéricas (inteiros ou ponto flutuante)
$idade = 25;
$peso = 70.5;
$altura = 1.75;

# Variáveis booleanas (verdadeiro ou falso)
$temperatura = 25;
$estaChovendo = true;
$climaAgradavel = ($temperatura > 20 && $estaChovendo === false);

# Variáveis de array
$frutas = array("maçã", "banana", "laranja");
$numeros = array(1, 2, 3, 4, 5);

# Variáveis de objeto
class Pessoa {
  public $nome;
  public $idade;
}

$pessoa = new Pessoa();
$pessoa->nome = "João";
$pessoa->idade = 30;