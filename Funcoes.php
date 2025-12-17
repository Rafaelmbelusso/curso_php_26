<?php

$texto = "Tema de casa";
$nome = "Luis";
$idade = 17;
$sexo = "Masculino";

function imprimeTexto($texto, $nome, $idade){
    echo $texto;
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $idade;
    echo "<br>";
}

function imprimeTexto2($texto){
    return $texto;
}

imprimeTexto ($texto, $nome, $idade);
echo "<br><br>";

//calcular quantos segundos tem em uma hora

function calculaTempo($segundos = "", $minutos = "", $horas = ""){

    $horasEmSegundos = $horas * 3600;
    $minutosEmSegundos = $minutos * 60;
    $somaTempoSeg = $horasEmSegundos + $minutosEmSegundos + $segundos;

    echo "O tempo total em segundos, será de $somaTempoSeg segundos";


}

$segundos = 0;
$minutos = 0;
$horas = 24;

calculaTempo ($segundos, $minutos, $horas);

//calcular IMC de uma pessoa

echo "<br><br>";

function calculaIMC ($peso, $altura){

    $imc = round($peso / ($altura ** 2), 2);
    echo "O IMC dessa pessoa é de $imc";

}

$peso = 50;
$altura = 1.70;

calculaIMC ($peso, $altura);

// calcular 35 graus celcius para fahrenheit

echo "<br><br>";

function converteFahrenheit($celcius){

    $fahrenheit = ($celcius * 1.8) + 32;
    echo "O resultado deu *$fahrenheit* graus fahrenheit";
    
}

function converteCelcius($fahrenheit){

    $celcius = ($fahrenheit - 32) / 1.8;
    echo "O resultado deu *$celcius* graus celcius";
}

$converte = "fahrenheit";
$celcius = 10;
$fahrenheit = 0;

if ($converte == "fahrenheit"){

    converteFahrenheit ($celcius);
}

if ($converte == "celcius"){

    converteCelcius ($fahrenheit);
}

//aplicar formula de bhaskara

echo "<br><br>";

function calculaBhaskara ($a = "", $b = "", $c = "" ){

    $delta = $b **2 - 4 * $a * $c;
    $x1 = round((-$b + sqrt($delta)) /2 * $a, 2);
    $x2 = round((-$b - sqrt($delta)) /2 * $a, 2);

    echo "Os resultados são $x1 e $x2 (arredondados)";

}

$a = 1;
$b = -3;
$c = -4;

calculaBhaskara ($a, $b, $c);