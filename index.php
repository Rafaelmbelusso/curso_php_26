# TESTES VALORES ARITMETICOS

<?php

/**
 * RESERVAS:
 * string 'texto qualquer' // 'A' // "A"
 * char // character 'A'
 * int // integer 23
 * float 23.8
 * double 23.8
 * decimal 23.8
*/

$aviao;

$aviao = "Boeing747";
$valor1 = 10;
$valor2 = 15;
$soma = $valor1 + $valor2;
$soma = $soma + 3;
echo "<br><br>A soma é: " . $soma;

echo "<br>";

$valor1 = 1000;
$valor2 = 520;

$subtracao = $valor1 - $valor2;

echo "A subtração é: $subtracao";

$valor1 = 1000;
$valor2 = 250;
$valor3 = 300;
$valor4 = 5;
$valor5 = 10;
$valor6 = 500;

echo "<br>";

$calculo = $valor1 + $valor2 - $valor3 * $valor4 / $valor5;

echo "A soma é : " . $calculo;

echo "<br>";
echo "<br>";

echo "teste é &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; aaaaaaa";

echo "<br>";
echo "<br>";

echo "Os valores são: $valor1, $valor2, $valor3, $valor5, $valor6";

echo "<br>";
echo "<br>";

echo "As somas totais são: &nbsp;&nbsp;&nbsp" . $soma + $subtracao + $calculo;

echo "<br>";
echo "<br>";

/**
 * #Temas de casa:
 *
 *Exercicio 1:
 * Fazer tabuada do 5 e 6;
 *
 * Exercicio 2:
 * Calcular as médias aritmeticas, ponderadas e harmonicas
 */



//Tabuadas


echo "TABUADA DO 5";

echo "<br>";
echo "<br>";

$numero = 5;

echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

echo "<br>";
echo "<br>";

echo "TABUADA DO 6";

echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";

echo "TABUADA DO 8";

echo "<br>";
echo "<br>";

$numero = 8;

echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";


//Média aritimética:


echo "<br><br>Média Aritmética";

$vlr1 = 2;
$vlr2 = 5;
$vlr3 = 10;
$vlr4 = 20;
$vlr5 = 25;
$vlr6 = 35;
$vlr7 = 49;
$vlr8 = 51;

$mediaaritmetica = ($vlr1 + $vlr2 + $vlr3 + $vlr4 + $vlr5 + $vlr6 + $vlr7 + $vlr8) / 8;

echo "<br><br> A média aritimédica dos 8 valores é igual a: &nbsp; $mediaaritmetica";

echo "<br> ---";

//media ponderada

echo "<br><br>";
 
echo "Média ponderada das minhas provas:<br><br>";

$prova1 = 10;
$prova2 = 20;
$prova3 = 5;
$prova4 = 30;
$prova5 = 40;

$tirei1 = 10;
$tirei2 = 5;
$tirei3 = 5;
$tirei4 = 18;
$tirei5 = 34;

$mpnumerador = ($prova1 * $tirei1) + ($prova2 * $tirei2) + ($prova3 * $tirei3) + ($prova4 * $tirei4) + ($prova5 * $tirei5);
$mpdenominador = $tirei1 + $tirei2 + $tirei3 + $tirei4 + $tirei5;

$mediaponderada = round($mpnumerador / $mpdenominador, 2);
echo "A média ponderada das notas das provas é: $mediaponderada";

echo "<br> ---";

//Media harmonica

echo "<br><br>Média Harmonica<br><br>";

$quantidadedeprovas = 5;
$mhdenominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3) + (1 / $prova4) + (1 / $prova5);
$medharmonica = round($quantidadedeprovas / $mhdenominador, 2);
echo "A média harmonica é igual a: $medharmonica <br>";
echo "---<br><br>";

//Calcular o volume de uma esfera de um raio com 5cm
//Dica: Elevar ao cubo -> 2 ** 3 = 8

echo "Volume da esfera com um raio de 5cm:<br><br>";

$raio = 5;
CONST PI = 3.14;
$fracao = 3 / 4;

$volumedaesfera = $fracao * PI * ($raio ** 3);

echo "O volume da esfera é igual a:&nbsp; $volumedaesfera <br>";
echo "---<br><br>";

echo "Área da esfera com um raio de 5cm:<br><br>";

$raio = 5;

$areadaesfera = 4 * PI * ($raio ** 3);

echo "A área da esfera é igual a:&nbsp; $areadaesfera <br>";
echo "---<br><br>";

//calcular a area de um triangulo que tenha uma base de 8cm e altura de 6cm

echo "Calcular a área de um triângulo que tenha uma base de 8cm e altura de 6cm: ";

$base = 8;
$altura = 6;
$areatriangulo = ($altura * $base) /2; 

echo "<br><br>A área do triângulo é de:&nbsp; $areatriangulo<br>";

echo "---<br><br>";

//calcular quantos segundos tem em 2h e 30min

echo "Calcular quantos segundos tem em 2h e 30min<br><br>";

$minutos = 30;
$horas = 2;

$horassegundos = $horas * 3600;
$minutossegundos = $minutos * 60;

$calculosegundos = $horassegundos + $minutossegundos;

echo "O calculo dos segundos é: &nbsp; $calculosegundos<br>" . "---<br><br>";

//calcular o IMC de uma pessoa, usar qualquer valor

echo "Calcular o IMC de uma pessoa aleatória<br><br>";

$peso = 62;
$altura = 1.68;
$imc = round($peso / ($altura ** 2), 2);

echo "O IMC dessa pesso é de:&nbsp $imc<br>"; 
echo "--- <br><br>";

// calcular 35 graus celcius para fahrenheit

echo "Calcular 35 graus celcius para fahrenheit<br><br>";

$celcius = 35;

$fahrenheit = ($celcius * 1.8) + 32;

echo "A conversão final é de: &nbsp; $fahrenheit<br>";
echo "--- <br><br>";

//aplicar formula de bhaskara para a seguinte equação, a = 1; b = -3; c = -4

echo "Resolver bhaskara da seguinte equação : a = 1; b = -3; c = -4<br><br>";

$a = 1;
$b = -3; 
$c = -4;

$delta = $b **2 - 4 * $a * $c;
$xdelta = (-$b + sqrt($delta)) /2 * $a;
$xdeltas = (-$b - sqrt($delta)) /2 * $a;


echo "As respostas da equação são&nbsp; $xdelta &nbsp;e&nbsp; $xdeltas";
echo "<br>";

//teste pc de casa

echo "As respostas da equação são&nbsp; $xdelta &nbsp;e&nbsp; $xdeltas<br>";

echo "--- <br><br>";

//aplicar formula de bhaskara para a seguinte equação, a = 1; b = 2; c = -5

echo "Resolver bhaskara da seguinte equação : a = 1; b = 2; c = -5<br><br>";

$a = 1;
$b = 2; 
$c = -5;

$delta = $b **2 - 4 * $a * $c;
$xdelta = round((-$b + sqrt($delta)) /2 * $a, 2);
$xdeltas = round((-$b - sqrt($delta)) /2 * $a, 2);

echo "As respostas da equação são&nbsp; $xdelta &nbsp;e&nbsp; $xdeltas<br>";

//teste pc de casa

echo "--- <br><br>";

// calcular 35 graus celcius para fahrenheit

echo "Calcular 95 graus fahrenhei para celsius<br><br>";

$fahrenheit = 35;

$celcius = ($fahrenheit - 32) / 1.8;

echo "A conversão final é de: &nbsp; $fahrenheit<br>";
echo "--- <br><br>";

// calcular 95 graus Kelvin para celcius

echo "Calcular 95 graus Kelvin para celsius<br><br>";

CONST CKEL = 273.15;
$kelvin = 95;
$celcius = round($kelvin - CKEL, 0);

echo "A conversão final é de: &nbsp; $celcius<br>";
echo "--- <br><br>";

// calcular 95 graus celcius para kevin

echo "Calcular  -178.15 graus celcius para kelvin<br><br>";

$celcius =  -178.15;
$kelvin = $celcius + CKEL;

echo "A conversão final é de: &nbsp; $kelvin<br>";
echo "--- <br><br>";

$testador = 10;

if ($testador == 10) {
    echo "Eu sou o teste!<br>";
    echo "Também vou comer chocolate<br>---<br><br>";
}

$tenhoDinheiro = false;
$tenhoVontadeDeCafe = false;

if ($tenhoDinheiro && $tenhoVontadeDeCafe) {
    echo "vou tomar café<br><br>";
} else if ($tenhoDinheiro && !$tenhoVontadeDeCafe) {
    echo "vou comprar chocolate<br><br>";
} else {
    echo "não tenho vontade de nada<br><br>";
}





/**
 * Expressões lógicas
 * if (&&)
 * if else
 * else (||)
 */





$num = 2;

if($num % 2 == 0){
    echo "Par<br>";
}else{
    echo "Impar<br>";
}

$num = 13;

if($num % 2 == 0){
    echo "Par<br>";
}else{
    echo "Impar<br>";
}

$num = 19;

if($num % 2 == 0){
    echo "Par<br>";
}else{
    echo "Impar<br>";
}

$num = 23;

if($num % 2 == 0){
    echo "Par<br>";
}else{
    echo "Impar<br>";
}

echo "---<br><br>";

for ($a = 0; $a < 10; $a++){
    echo "<br>";
    echo "O número é: $a";
}

echo "<br><br>";

$numero = 5;

echo "a tabuada do $numero<br>";
for ($a = 0; $a <= 10; $a++){
    echo "<br>";
    echo "$numero X $a =" . $numero * $a;
}


echo "<br><br>";


for ($testa = 0;$testa <= 10; $testa = $testa + 1){
    echo "<br>";
    echo "O número é $testa";
    if ($testa == 7){
        break;
    }
}
echo "<br>---<br><br>";


// Contar e Exibir os numeros pares de 1 até 50

echo "Contar e Exibir os numeros pares de 1 até 50 <br><br>";

for ($testa = 1;$testa < 51; $testa = $testa + 1){
    echo "<br>";

    if ($testa % 2 == 0){
        echo "Os números são $testa";
        continue;
    }
}
echo "<br>---<br><br>";


// Exibir os numeros em ordem DECRESCENTE de 0 à 10


echo "Exibir os numeros em ordem DECRESCENTE de 0 à 10<br><br>";

for ($testa = 10; $testa >= 0; $testa = $testa - 1){
    echo "<br>";
    echo "Os números são $testa";
    }

echo "<br>---<br><br>";


//calcular fatorial de um numero

echo "Calcular fatorial de do numero cinco<br>";

$num = 5;

for ($fator = $num -1; $fator >= 1; $fator = $fator - 1 ){
    $num *= $fator;

}
echo "<br>A fatoração é igual à: $num<br>---<br><br>";


//tema de casa, todas as tarefas do for agora com o while


// Contar e Exibir os numeros pares de 1 até 50

echo "Contar e Exibir os numeros pares de 1 até 50 <br><br>";

$testa = 1;

while ($testa <= 50){
    $testa = $testa + 1;
    if ($testa % 2 <> 0){
        continue;
    }
    echo "<br>";
     echo "Os números são $testa";
}

echo "<br>---<br><br>";

// Exibir os numeros em ordem DECRESCENTE de 0 à 10

echo "Exibir os numeros em ordem DECRESCENTE de 0 à 10<br><br>";

$testa = 10;

while ($testa >= 0){
    echo "<br>";
    echo "Os números são $testa";
     $testa = $testa - 1;
    }

echo "<br>---<br><br>";

//calcular fatorial de um numero

echo "Calcular fatorial de do numero cinco<br>";

$num = 6;
$fator = $num -1;
//calcular fatorial de um numero

echo "Calcular fatorial de do numero cinco<br>";

$num = 6;
$fator = $num -1;

while ($fator >= 1){
    $num *= $fator;
     $fator = $fator - 1;
}
echo "<br>A fatoração é igual à: $num<br>---<br><br>";

// código para multiplicação

$multi = 5;
echo "Multiplicação do número $multi<br>";

$a = 0;
while ($a <=10){
    $resultado = $a * $multi;
    echo "$a X $multi = $resultado<br>";
    $a++;
}echo "---<br><br>";

$multi = 6;
echo "Multiplicação do número $multi<br>";

$a = 0;
while ($a <=10){
    $resultado = $a * $multi;
    echo "$a X $multi = $resultado<br>";
    $a++;
}echo "---<br><br>";

$multi = 10;
echo "Multiplicação do número $multi<br>";

$a = 0;
while ($a <=10){
    $resultado = $a * $multi;
    echo "$a X $multi = $resultado<br>";
    $a++;
}echo "---<br><br>";$multi = 5;

//teste teste teste

//teste teste teste

//teste teste teste

echo "Mostre quais numeros são pares de 0 a 10 com for e pulando o numero 10 e 11<br><br>";

for ($numero = 2;$numero <= 15;$numero++){
    if ($numero == 10){
        continue;
    }
    echo "$numero ";
    $resto = $numero % 2 == 0;
    $divisaoexata = $resto == 0;
    if ($divisaoexata == 0){
        echo "é par<br>";
    }else{
        echo "é impar<br>";
    }
} echo "<br>---<br><br>";



/**
 * Fazer o mesmo exercicio utilizando for e while
 * Encontrar os 5 primeiros numeros primos
 */


echo "Encontrar os cinco primeiros numeros primos<br><br>";
