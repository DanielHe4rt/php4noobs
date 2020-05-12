# 4.4 - Funções de manipulação de Arquivos

Nesse tópico, iremos abordar algumas funções importantes para manipulação de arquivos e deixar links úteis para você pesquisar mais sobre caso queira.

## fopen

A função **fopen()** abre um buffer de arquivo baseado em um **diretório** e **modo** passado por parametros.

Argumentos/Parametros:

- Diretório onde você deseja buscar o arquivo;
- Modo de leitura/escrita.

| Modo | Descricao                                                                                                                                                                                                                                                                                    |
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
$directory = "/utils/seila.txt";
$file = fopen($directory, "a+");
// Result: buffer ativo com o seu arquivo para ser escrito é isso nd d+


```

## fclose

A função **fclose()** fecha um buffer de arquivo. Essa função deve ser usada em todo fim de leitura/escrita de arquivos para evitar vazamento de memória (memory leak).

Argumentos/Parametros:

- Buffer da função fopen() ou fsockopen();

[Link para documentação](https://www.php.net/manual/pt_BR/function.fclose)

### Exemplos

Exemplo #1
Fechando um arquivo (?)

```php
$directory = "/utils/seila.txt";
$file = fopen($directory, "a+");
// Result: buffer ativo com o seu arquivo para ser escrito é isso nd d+

fclose($file);
// Result: arquivo devidamente finalizado.
```

## fwrite

A função **fwrite()** escreve em um buffer de arquivo algum dado que você insira como parametro.

Argumentos/Parametros:

- Buffer da função fopen() ou fsockopen();
- String a ser escrita.

[Link para documentação](https://www.php.net/manual/pt_BR/function.fwrite)

### Exemplos

Exemplo #1
Fechando um arquivo (?)

```php
$directory = "/utils/seila.txt";
$string = "He4rtDevs melhor grupo!";
$file = fopen($directory, "a+");
// Result: buffer ativo com o seu arquivo para ser escrito é isso nd d+

fwrite($file, $string);
// fileText:
// He4rtDevs melhor grupo!

fwrite($file, "To falando sério");
// fileText:
// He4rtDevs melhor grupo!
// To falando sério

fclose($file);
// Result: arquivo devidamente finalizado.
```

## fwrite

A função **fwrite()** escreve em um buffer de arquivo algum dado que você insira como parametro.

Argumentos/Parametros:

- Buffer da função fopen() ou fsockopen();
- String a ser escrita.

[Link para documentação](https://www.php.net/manual/pt_BR/function.fwrite)

### Exemplos

```php


$fopen = fopen("test.txt","r");

while(!feof($fopen)){
	echo fread($fopen, 8192);
}

```
