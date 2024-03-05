<?php

function lerPost($nome) {
  return $_POST[$nome];
}
  
 // 1. Ler e imprimir um número inteiro
$numeroInteiro = lerPost("numero_inteiro");

// 2. Ler e imprimir um número real
$numeroReal = lerPost("numero_real");

// 3. Ler três números inteiros e imprimir a soma
$numero1 = lerPost("numero1");
$numero2 = lerPost("numero2");
$numero3 = lerPost("numero3");
$soma = $numero1 + $numero2 + $numero3;

// 4. Ler um número real e imprimir o quadrado
$numeroReal = lerPost("numero_real");
$quadrado = $numeroReal * $numeroReal;

// 5. Ler um número real e imprimir a quinta parte
$numeroReal = lerPost("numero_real");
$quintaParte = $numeroReal / 5;

// 6. Converter temperatura de Celsius para Fahrenheit
$celsius = lerPost("celsius");
$fahrenheit = ($celsius * 9.0 / 5.0) + 32.0;

// 7. Converter temperatura de Fahrenheit para Celsius
$fahrenheit = lerPost("fahrenheit");
$celsius = 5.0 * ($fahrenheit - 32.0) / 9.0;

// 8. Converter temperatura de Kelvin para Celsius
$kelvin = lerPost("kelvin");
$celsius = $kelvin - 273.15;

// 9. Converter temperatura de Celsius para Kelvin
$celsius = lerPost("celsius");
$kelvin = $celsius + 273.15;

// 10. Converter velocidade de km/h para m/s
$kmh = lerPost("kmh");
$ms = $kmh / 3.6;

// 11. Converter velocidade de m/s para km/h
$ms = lerPost("ms");
$kmh = $ms * 3.6;

// 12. Converter distância de milhas para quilômetros
$milhas = lerPost("milhas");
$km = $milhas * 1.61;

// 13. Converter distância de quilômetros para milhas
$km = lerPost("km");
$milhas = $km / 1.61;

// 14. Converter ângulo de graus para radianos
$graus = lerPost("graus");
$radianos = $graus * pi() / 180;

// 15. Converter ângulo de radianos para graus
$radianos = lerPost("radianos");
$graus = $radianos * 180 / pi();

echo "<h1>Resultados</h1>";
echo "<p>O número digitado foi: $numeroInteiro</p>";
echo "<p>O número digitado foi: $numeroReal</p>";
echo "<p>A soma dos números é: $soma</p>";
echo "<p>O quadrado do número é: $quadrado</p>";
echo "<p>A quinta parte do número é: $quintaParte</p>";
echo "<p>A temperatura em Fahrenheit é: $fahrenheit</p>";
echo "<p>A temperatura em Celsius é: $celsius</p>";
echo "<p>A temperatura em Celsius é: $celsius</p>";
echo "<p>A temperatura em Kelvin é: $kelvin</p>";
echo "<p>A velocidade em m/s é: $ms</p>";
echo "<p>A velocidade em km/h é: $kmh</p>";
echo "<p>A distância em quilômetros é: $km</p>";
echo "<p>A distância em milhas é: $milhas</p>";
echo "<p>O ângulo em radianos é: $radianos</p>";
echo "<p>O ângulo em graus é: $graus</p>";