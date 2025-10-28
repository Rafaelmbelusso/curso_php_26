# TUTORIAL INSTALAÇÃO VSCODE

1º Passo: Instalar WSL no windows! Utilize o comando **wsl --install** no Windows Power Shell, para começar a instalação do linux no computador

2º Passo: Instalar Ubuntu na Microsoft Store! Abra a Microsoft Store e pesquisa por UBUNTU, faça o download e reinicie o computador

3º Passo: Após reiniciar o pc, entre no Windows Power Shell novamente e abra uma janela nova com o UBUNTU e executar o seguinte comando **sudo apt-get update**, após isso reinicie o computador

4º Passo: Após reiniciar o pc novamente, entre no site oficial do VSCode e faça o download dele normalmente

5º Passo: Assim que abrir o VSCode já instalado, faça o login do uuntu no canto inferior esquerdo, selecionando o wsl, após isso crie uma pasta teste na área de trabalho e localize ele (VSCode) nessa pasta, dando um File ---> Open folder

6º Passo: Fazer as atualizações no VSCode, para isso abra o terminal inbutido no VSCode, siga os seguintes passos:
cd ~
nano setup_lamp.sh  

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

- Ativar localhost/apache no terminal: **sudo service apache2 start**


# INFORMAÇÕES VSCODE

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

- Para arredondar valores nos calculos: round (casas decimais) ---> $medharmonica = **round**($quantidadedeprovas / $mhdenominador, **2**);

- Elevar numeros na potência: 2 ** 3 = 8

- Para adicionar uma constante: CONST ---> CONST **PI**

- Para adicionar uma raiz: sqrt ---> $raiz = sqrt($numero); 
