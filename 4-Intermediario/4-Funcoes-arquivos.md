# 4.4 - Funções de manipulação de Arquivos

Nesse tópico, iremos abordar algumas funções importantes para manipulação de arquivos e deixar links úteis para você pesquisar mais sobre caso queira.

## fopen

A função **fopen()** abre um buffer de arquivo baseado em um **diretório** e **modo** passado por parametros.

Argumentos/Parâmetros:

- Diretório onde você deseja buscar o arquivo;
- Modo de leitura/escrita.

| Modo | Descrição                                                                                                                                                                                                                                                                                    |
| ---- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 'r'  | Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.                                                                                                                                                                                                                |
| 'r+' | Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.                                                                                                                                                                                                              |
| 'w'  | Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.                                                                                                                            |
| 'w+' | Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.                                                                                                                          |
| 'a'  | Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.                                                                                                                                                                        |
| 'a+' | Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.                                                                                                                                                                      |
| 'x'  | Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL   | O_CREAT para a chamada de sistema open(2). |
| 'x+' | Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL | O_CREAT para a chamada de sistema open(2). |

[Link para documentação](https://www.php.net/manual/pt_BR/function.fopen)

### Exemplos

Exemplo #1
Abrindo um arquivo (?)

```php
// test.txt (vazio)
$directory = "test.txt";
$file = fopen($directory, "a+");
// Result: buffer ativo com o seu arquivo para ser escrito é isso nd d+
```

## fclose

A função **fclose()** fecha um buffer de arquivo. Essa função deve ser usada em todo fim de leitura/escrita de arquivos para evitar vazamento de memória (memory leak).

Argumentos/Parâmetros:

- Buffer da função fopen() ou fsockopen();

[Link para documentação](https://www.php.net/manual/pt_BR/function.fclose)

### Exemplos

Exemplo #1
Fechando um arquivo (?)

```php
// test.txt (vazio)
$directory = "test.txt";
$buffer = fopen($directory, "a+");
// Result: buffer ativo com o seu arquivo para ser escrito é isso nd d+

fclose($buffer);
// Result: arquivo devidamente finalizado.
```

## fwrite

A função **fwrite()** escreve em um buffer de algum arquivo passado como parâmetro.

Argumentos/Parâmetros:

- Buffer da função fopen() ou fsockopen();
- String a ser escrita.

[Link para documentação](https://www.php.net/manual/pt_BR/function.fwrite)

### Exemplos

Exemplo #1
Abrindo, escrevendo e fechando um arquivo (?)

```php
// test.txt (vazio)
$directory = "test.txt";
$string = "He4rtDevs melhor grupo!";
$buffer = fopen($directory, "a+");
// Result: buffer ativo com o seu arquivo para ser escrito é isso nd d+

fwrite($buffer, $string);
// test.txt:
// He4rtDevs melhor grupo!

fwrite($buffer, "To falando sério");
// test.txt:
// He4rtDevs melhor grupo!
// To falando sério

fclose($buffer);
// Result: arquivo devidamente finalizado.
```

## feof

A função **feof()** checa se o buffer aberto está na última linha do arquivo, se existir uma próxima linha ele retorna verdadeiro e caso estiver no final ele retorna falso.

Essa função é usada para auxiliar em leitura de arquivos. Em maiores casos serão usados junto com o fread ou algo que mude o ponteiro do arquivo e comumente serão vistos em laços **while**.

Argumentos/Parâmetros:

- Buffer da função fopen() ou fsockopen();

[Link para documentação](https://www.php.net/manual/pt_BR/function.feof)

### Exemplos

Exemplo #1 Checando se o arquivo está na última linha

```php
// test.txt (2 linhas)
// Primeira linha do arquivo
// Segunda Linha do arquivo

$fileName = "test.txt";

$buffer = fopen($fileName, 'r');

echo feof($buffer); // Verdadeiro

fclose($buffer);

// Como não há um ponteiro rodando o arquivo (não está sendo lido)
// ele sempre irá retornar verdadeiro, pois existem duas linhas.
// CASO o ponteiro seja mudado pra segunda linha, ele retornaria false
// pois o arquivo tem apenas duas linhas.

```

## fread

A função **fread()** lê uma quantidade de bytes em uma linha do arquivo aberto pelo buffer (fopen).

A leitura é interrompida caso uma das condições abaixo seja atingida.

    1. A quantidade de bytes informados como parâmetro são lidos;
    2. Quando o final do arquivo  (EOF - end of file - final do arquivo) é alcançado;
    3. um pacote tornou-se disponível (para network streams);
    4. 8192 bytes (ou a quantidade de bytes necessárias pro que você irá ler) foram lidos (depois de abrir um stream)

Argumentos/Parâmetros:

- Buffer da função fopen() ou fsockopen();
- A quantidade de bytes a serem lidos (caso não tenha ideia, coloque por padrão 8192).

[Link para documentação](https://www.php.net/manual/pt_BR/function.fwrite)

### Exemplos

Exemplo #1 Deixa o Prime

```php
// test.txt (2 linhas)
// He4rtDevs melhor grupo do mundo .........
// Entre no meu canal e

$buffer = fopen("test.txt","r");

while(!feof($buffer)){
	echo fread($buffer, 8192) . " deixa o prime";
}

fclose($buffer);

// Result:
// He4rtDevs melhor grupo do mundo ......... deixa o prime
// Entre no meu canal e deixa o prime
```
