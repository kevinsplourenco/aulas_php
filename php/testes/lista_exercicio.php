<?php

// Função para ler um número inteiro
function lerInteiro($mensagem) {
  return readline($mensagem);
}

// Função para ler um número real
function lerReal($mensagem) {
  return floatval(readline($mensagem));
}

// 1. Ler e imprimir um número inteiro
$numeroInteiro = lerInteiro("Digite um número inteiro: ");
echo "O número digitado foi: $numeroInteiro\n";

// 2. Ler e imprimir um número real
$numeroReal = lerReal("Digite um número real: ");
echo "O número digitado foi: $numeroReal\n";

// 3. Ler três números inteiros e imprimir a soma
$numero1 = lerInteiro("Digite o primeiro número: ");
$numero2 = lerInteiro("Digite o segundo número: ");
$numero3 = lerInteiro("Digite o terceiro número: ");
$soma = $numero1 + $numero2 + $numero3;
echo "A soma dos números é: $soma\n";

// 4. Ler um número real e imprimir o quadrado
$numeroReal = lerReal("Digite um número real: ");
$quadrado = $numeroReal * $numeroReal;
echo "O quadrado do número é: $quadrado\n";

// 5. Ler um número real e imprimir a quinta parte
$numeroReal = lerReal("Digite um número real: ");
$quintaParte = $numeroReal / 5;
echo "A quinta parte do número é: $quintaParte\n";

// 6. Converter temperatura de Celsius para Fahrenheit
$celsius = lerReal("Digite a temperatura em Celsius: ");
$fahrenheit = ($celsius * 9.0 / 5.0) + 32.0;
echo "A temperatura em Fahrenheit é: $fahrenheit\n";

// 7. Converter temperatura de Fahrenheit para Celsius
$fahrenheit = lerReal("Digite a temperatura em Fahrenheit: ");
$celsius = 5.0 * ($fahrenheit - 32.0) / 9.0;
echo "A temperatura em Celsius é: $celsius\n";

// 8. Converter temperatura de Kelvin para Celsius
$kelvin = lerReal("Digite a temperatura em Kelvin: ");
$celsius = $kelvin - 273.15;
echo "A temperatura em Celsius é: $celsius\n";

// 9. Converter temperatura de Celsius para Kelvin
$celsius = lerReal("Digite a temperatura em Celsius: ");
$kelvin = $celsius + 273.15;
echo "A temperatura em Kelvin é: $kelvin\n";

// 10. Converter velocidade de km/h para m/s
$kmh = lerReal("Digite a velocidade em km/h: ");
$ms = $kmh / 3.6;
echo "A velocidade em m/s é: $ms\n";

// 11. Converter velocidade de m/s para km/h
$ms = lerReal("Digite a velocidade em m/s: ");
$kmh = $ms * 3.6;
echo "A velocidade em km/h é: $kmh\n";

// 12. Converter distância de milhas para quilômetros
$milhas = lerReal("Digite a distância em milhas: ");
$km = $milhas * 1.61;
echo "A distância em quilômetros é: $km\n";

// 13. Converter distância de quilômetros para milhas
$km = lerReal("Digite a distância em quilômetros: ");
$milhas = $km / 1.61;
echo "A distância em milhas é: $milhas\n";

// 14. Converter ângulo de graus para radianos
$graus = lerReal("Digite o ângulo em graus: ");
$radianos = $graus * pi() / 180;
echo "O ângulo em radianos é: $radianos\n";

// 15. Converter ângulo de radianos para graus
$radianos = lerReal("Digite o ângulo em radianos: ");
$graus = $radianos * 180 / pi();
echo "O ângulo em graus é: $graus\n";

?>