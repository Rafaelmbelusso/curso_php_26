<?php
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



// Exercício: Encontrar os 5 primeiros números Primos

echo "Os 5 primeiros numeros primos são:";

$contadorDeNumPrimos = 0;
$contadorDeDivisores = 0;
$primoOuNao = 5;
$antecessor = $primoOuNao -1;

for ($divisor = 2; $divisor <= $antecessor; $divisor++) {

    if ($contadorDeNumPrimos == 5) {
        break;
    }

    $restoDaDivisao = $primoOuNao % $divisor;
    $ehDivisaoExata = $restoDaDivisao == 0;

    if ($ehDivisaoExata) {
        $primoOuNao++;
        $antecessor = $primoOuNao -1;
        $divisor = 1;
        continue;
    }

    if ($divisor == $antecessor) {
        echo "O número $primoOuNao é primo<br>";
        $primoOuNao++;
        $antecessor = $primoOuNao -1;
        $contadorDeNumPrimos++;
        $divisor = 1;
    }
}
echo "<br><br>";

// Fazer exercício com for e com while.


$contadorDeNumPrimos = 0;
$contadorDeDivisores = 0;
$primoOuNao = 5;
$antecessor = $primoOuNao -1;
$divisor = 2;

while ($divisor <= $antecessor) {

    if ($contadorDeNumPrimos == 5) {
        break;
    }

    $restoDaDivisao = $primoOuNao % $divisor;
    $ehDivisaoExata = $restoDaDivisao == 0;

    if ($ehDivisaoExata) {
        $primoOuNao++;
        $antecessor = $primoOuNao -1;
        $divisor = 1;
        continue;
    }

    if ($divisor == $antecessor) {
        echo "O número $primoOuNao é primo<br>";
        $primoOuNao++;
        $antecessor = $primoOuNao -1;
        $contadorDeNumPrimos++;
        $divisor = 1;
    }
}

echo "Os 3 primeiros numeros perfeitos:<br>";

$encontrados = 0;

for ($num = 2; $encontrados < 1; $num++) {
    $soma = 0;

    for ($i = 1; $i <= $num / 2; $i++) {
        
        if ($num % $i == 0) {
            $soma += $i;

            if ($soma > $num) {
                break;
            }
        }
    }

    if ($soma == $num) {
        echo "$num é perfeito<br>";
        $encontrados++;
    }
}
