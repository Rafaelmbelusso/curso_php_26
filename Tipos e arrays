<?php

/** Tipos primitivos
 * Int | Integer == 1, 2, 3...
 * Float | Double == 1.0, 2.0, 3.0...
 * String | Char-Character == "Oi", 'o'...
 */

//Tipos compostos ou coleção de dados: Array | Vetor

$numeros = array(); //array vazio
$numeros = []; //array vazio

$numeros = [10, "duas", 12, 13, 14, "infoserv"]; //Tam: 6
//          0     1      2   3   4    5      

for ($i = 0; $i < 6; $i++){
    echo $numeros[$i] . "<br>";
}echo "<br>";

echo implode(", ", $numeros);

print_r ($numeros);
echo "<br>";
var_dump($numeros);
echo "<br><br>";

$i = 0;
echo "Mesma coisa do for mas agora com while: <br><br>";

while ($i < 6){
    echo $numeros[$i] . "<br>";
    $i++;
}echo "<br>";

echo "<br><br>";

$i = 0;
echo "Mesma coisa do for mas agora com do while: <br><br>";

$i = 0;

do{
    echo $numeros[$i] . "<br>";
    $i++;
} while ($i<6);
echo "<br>";

// Exercicio,  encontrar os 5 primeiros numeros primos e salvar em um array|vetor
//Depois exibir ele em um FOR

$contadorDeNumPrimos = 0;
$saoTodosPrimos = [];
for ($primoOuNao = 3; $contadorDeNumPrimos < 5; $primoOuNao++) {

    $antecessor = $primoOuNao -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

        $restoDaDivisao = $primoOuNao % $divisor;
        $ehDivisaoExata = $restoDaDivisao == 0;

        if ($ehDivisaoExata) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo == true){
        $saoTodosPrimos[] = $primoOuNao;
        $contadorDeNumPrimos++;
    }

}echo "<br><br>";

echo "São primos os numeros<br><br> --> ";

for ($i = 0; $i < 5; $i++){

    echo $saoTodosPrimos[$i] . ", ";

}echo "<br>";
