# TUTORIAL INSTALAÇÃO VSCODE

1º Passo: Instalar WSL no windows! Utilize o comando **wsl --install** no Windows Power Shell, para começar a instalação do linux no computador

2º Passo: Instalar Ubuntu na Microsoft Store! Abra a Microsoft Store e pesquisa por UBUNTU, faça o download e reinicie o computador

3º Passo: Após reiniciar o pc, entre no Windows Power Shell novamente e abra uma janela nova com o UBUNTU e executar o seguinte comando **sudo apt-get update**, após isso reinicie o computador

4º Passo: Após reiniciar o pc novamente, entre no site oficial do VSCode e faça o download dele normalmente

5º Passo: Assim que abrir o VSCode já instalado, faça o login do ubuntu no canto inferior esquerdo, selecionando o wsl

6º Passo: Fazer as atualizações no VSCode, para isso abra o terminal inbutido no VSCode, siga os seguintes passos:
cd ~
nano setup_lamp.sh  
----> coloque os comandos um de cada vez
----> Isso vai abrir o editor de texto do Terminal, cole todo o conteúdo do script utilizado

Pressione Ctrl + O (isso é “Write Out”)

----> Aperte Enter para confirmar o nome setup_lamp.sh
----> Depois pressione Ctrl + X para sair

ls

---> Se aparecer **setup_lamp.sh** deu certo

chmod +x setup_lamp.sh
sudo ./setup_lamp.sh

---> Execute esses dois na mesma linha, isso vai fazer o download dos arquivos.

Extra: Se o script não parar de reiniciar os arquivos e entrar em loop, aperte Cntrl + C no terminal para parar o script, depois de todos esses processos, abra seu navegador e digite, **localhost**, se aparecer o site com uma mensagem "IT WORKS" deu certo, depois disso pode seguir naturalmente com o VSCode

Extra: Quando der no terminal: **commit -m "teste"** der o erro "Author identity unknown", digite esses comandos no mesmo terminal
git config --global user.name
git config --global user.email 

---> Para consultar seus emails e user atual, se estiver errado ou não aparecer nada, rode esses comandos:

git config --global user.name "Seu Nome"
git config --global user.email "seuemail@dominio.com"

----> Após isso realize o teste novamente, a principio dará certo!


# TUTORIAL BÁSICO VSCODE

- Abrir vscode ver se ta logado ubuntu (canto inferior esquerdo) file open folder: seleciona tudo e apaga

- /var/www/html e da um ok terminal novo terminal
git clone LINK_GITHUB da um enter file open folder: seleciona tudo e apaga.

- /var/www/html/curso_php_26 e da um ok terminal novo terminal verifica se esta em: /var/www/html/curso_php_26

- Replicar/Salvar informações no GitHub: **git add . ou (nome do arquivo)**

- Para fazer o commit: **git commit -m "(comit)"**

- Sincronizar para o GitHub: **git push**

- Atualização dos dados do github (depois do primeiro git add): **git pull**

- Ativar localhost/apache no terminal: **sudo service apache2 start**


# INFORMAÇÕES PHP


## BÁSICO

- Começar código PHP: <?php

- Negrito: **  ** 

- Itálico: *  *

- Link ou âncora: (https:123123123)

- Badges no github: Badges.io

- Testes PHP: teh Playground

- Guia geral: Markdown

- Grafias: Camel Case --> AvIaO123,
           Snake Case --> aviao123

- Inserir Bloco de cometários: Na linha ---> //
                               Bloco ---> /** 

- Declarar ou informar variável: $ --> **$aviao123**

- Atribuição: = ---> $aviao123 **=** 

- String: "(teste)" ---> $aviao123 = **"teste"**

- Operador de junção de partes: . ---> $aviao123 = "teste" **.** $aviao456 = "teste2"; 

- Quebra de linha: <(br)> ---> echo **"<(br)>"** (sem (teste))

- Espaçamentos a mais:  ---> echo "teste é **(&-n-b-s-p;)** testador"; (sem (teste) e - - -)

- Para utilizar funções ou classes de outro arquivo e "importar" no que esta utilizando, utilizar **require_once** ---> **require_once** "./PessoaAbstract.php";

## VALORES E EXPRESSÕES ARITMÉTICAS

- Para arredondar valores nos calculos: round (casas decimais) ---> $medharmonica = **round**($quantidadedeprovas / $mhdenominador, **2**);

- Elevar numeros na potência: 2 ** 3 = 8

- Para adicionar uma constante: CONST ---> CONST **PI**

- Para adicionar uma raiz: sqrt ---> $raiz = sqrt($numero); 

- Para ter como resultado o "resto da divisão", utilizar **%** (módulo)

- Expressões lógicas são dadas para esses códigos: **&&** (e), **||** (ou), **==** (igual), **>=** (maior ou igual) e **<>** (diferente)

##  EXPRESSÕES LÓGICAS E LAÇOS DE REPETIÇÃO

- Para parar completamente um comando, utilizar o código: **break**

- Para em um loop, pular um numero ou algo especifico, utilizar o código: **continue**

- Ínicio de expressões lógicas: if (as condições são verdades) if else (algumas das condições são verdades, outras são falsas) e else (todas as condições são falsas)

- Para iniciar um loop: utilizar: **for** ---> for ($testa = 0;$testa <= 10; $testa = $testa + 1)

## TIPOS E ARRAYS

- Tipo primitivo: 
* Int | **Integer** == 1, 2, 3...
* Float | **Double** == 1.0, 2.0, 3.0...
* String | **Char-Character** == "Oi", 'o'...

- Tipos compostos ou coleção de dados:
 * Vetor | **Array** == $numeros = array();

 - A contagem dos arrays começa sempre do 0

 - Para inserir letras de uma palavra como array --> $palavra = "subir";, ele vai considerar como **(0) = s ; (1) = u ; ...

 - para inserir váriaveis dentro do array ---> **$vaiReceber[]** = $palavra[$i]; (sempre lembrar de informar que ele recebe um array vazio [])

 - Para dar echo em um array sem for ---> **echo implode (", ", $array)**

 - Duas formas de conferir o que tem dentro de seu array:
 * **print_r ($numeros);**
 * **var_dump($numeros);**

 - Para contar a quantidade de letras:
 * Array: **count** ($numeros);
 * Variavel: **strlen**($numeros);

 - Para juntar valor de dois ou mais arrays utilize **in_array**---> in_array($array1, $array2);

 ## FUNÇÕES BÁSICAS:

 - Para adicionar uma função, utilize **function** ---> **function** imprimeTexto2($texto){(O que vai ser feito quando mencionar a função)}

 - Para adicionar uma função ou identificar uma, ela será sempre iniciada com dois underlines (**__**) ---> public function __construct()

 ## CLASSES:

 - Para incluir uma classe, informe o nome iniciando com letra maiuscula utilizando a função padrão **class** --> class Cachorro {}

 - Para adicionar o que é chamado de propriedades, utiliza a função padrão public, para adicionar "características" ou funções --> **public** $numero = 101 . **public** $classes = [] . **public** $luzLigada;

 