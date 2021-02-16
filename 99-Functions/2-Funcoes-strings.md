# 4.2 - Funções de manipulação de String

Nesse tópico, iremos abordar algumas funções importantes para manipulação de string e deixar links úteis para você pesquisar mais sobre caso queira.

## strlen

A função **`strlen()`** conta a quantidade de caracteres dentro de uma string.

[Link para documentação](https://www.php.net/manual/pt_BR/function.strlen.php)

Retornos Esperados:

- **Sucesso**: int
- **Erro**: null

### Exemplos

Exemplo #1 CountingNameCharacters

```php
$name = 'danielhe4rt';

echo 'O nome tem ' . strlen($name) . ' caracteres';
// Resultado
// O nome tem 11 caracteres
```

## str_repeat

A função **`str_repeat()`** repete uma quantidade de vezes uma string que você tenha em mente.

Argumentos/Parâmetros:

- String a ser repetida;
- Quantidade de vezes a ser repetido.

[Link para documentação](https://www.php.net/manual/pt_BR/function.str-repeat.php)

### Exemplos

Exemplo #1
Melhor Grupo <3

```php
$string = 'He4rtDevs ';
$qtd = 3;

$repeat = str_repeat($string, $qtd);

echo 'Melhor grupo é claramente ' . $repeat;

// Result
// Melhor grupo é claramente He4rtDevs He4rtDevs He4rtDevs

```

## str_replace

A função **`str_replace()`** substitui caracteres de uma string e te retorna uma nova string.

Argumentos/Parâmetros:

- String ou array de parâmetros a serem substituídos;
- String que irá repor os caracteres substituídos;
- String a ser examinada.

[Link para documentação](https://www.php.net/manual/pt_BR/function.str-replace.php)

### Exemplos

Exemplo #1
BetterLang

```php
$string = 'JS é a melhor linguagem';

echo str_replace('JS','PHP', $string);
// Resultado:
// PHP é a melhor linguagem
```

Exemplo #2 CursedWords

```php
$string = 'Palavras que devem ser censuradas: Java, BBB, Boninho, BBBot';

echo str_replace(['Java','BBB','BBBot'],'****', $string);

// Resultado:
// Palavras que devem ser censuradas: ****, ****, Boninho, ****
```

Exemplo #3: BetterCursedWords

```php
$string = 'Palavras que devem ser censuradas: Java, BBB, Boninho, BBBot';

$cursedWords = ['Java','BBB','BBBot'];

foreach ($cursedWords as $word) {
    $string = str_replace($word, str_repeat('*', strlen($word)), $string);
}

echo $string;
// Resultado:
// Palavras que devem ser censuradas: ****, ***, Boninho, *****
```

## substr

A função **`substr()`** retorna uma parte dos caracteres de uma string, podendo usar parâmetros de início ou início e fim.

O segundo e terceiro parâmetro são identificadores que se baseiam no tamanho da string.

Argumentos/Parâmetros:

- String a ser inspecionada;
- Identificador inicial da string a ser pega;
- Identificador final da string a ser pega;

[Link para documentação](https://www.php.net/manual/pt_BR/function.substr.php)

### Exemplos

Exemplo #1
Usando um início negativo

```php
$rest = substr('abcdef', -1);    // retorna "f"
$rest = substr('abcdef', -2);    // retorna "ef"
$rest = substr('abcdef', -3, 1); // retorna "d"
```

Exemplo #2
Usando um length negativo

```php
$rest = substr('abcdef', 0, -1);  // retorna "abcde"
$rest = substr('abcdef', 2, -1);  // retorna "cde"
$rest = substr('abcdef', 4, -4);  // retorna false
$rest = substr('abcdef', -3, -1); // retorna "de"
```

## strpos

A função **`strpos()`** retorna a posição numérica da primeira ocorrência do item buscado.
A Primeira posição da string é igual á 0, seguindo assim em diante. Como se fosse um vetor (array).

Argumentos/Parâmetros:

- String a ser buscada. (String maior, completa)
- String com o conteúdo que quero buscar.
- (Opcional) Procurar na String a partir da posição x.

Retornos Esperados:

- **Sucesso**: string
- **Erro**: false (boolean)

[Link para documentação](https://www.php.net/manual/pt_BR/function.strpos.php)

### Exemplos

Exemplo #1
Procurando por um caractere específico:

```php
    $stringCompleta = 'developers';
    $buscandoPor    = 'e';
    $posicao        = strpos($stringCompleta, $buscandoPor); // retorna 1
```

Exemplo #2
Caso a função não encontre nenhuma ocorrência.

```php
    $stringCompleta = 'developers';
    $buscandoPor    = '4devs';
    $posicao = strpos($stringCompleta, $buscandoPor); // retorna false
```

Exemplo #3
Procurando uma ocorrência, a partir de uma posição:

```php
    $stringCompleta = 'developers';
    $buscandoPor    = 'e';
    $posicaoInicial = 4; // ou seja, buscando a partir de ..."lopers".
    $posicao = strpos($stringCompleta, $buscandoPor, $posicaoInicial); // retorna 7
```

## trim

A função **`trim()`** remove espaços adjacentes (do lado esquerdo e direito). Esta função é muito utilizada, para tratar a entrada de dados do usuário.

Argumentos/Parâmetros:

- String a ser limpa.
- Tipo de espaço a ser retirado (Não precisamos, nos preocupar por agora).

Retornos Esperados:

- **Sucesso**: string

[Link para documentação](https://www.php.net/manual/pt_BR/function.trim.php)

### Exemplos

Exemplo #1
Espaçamento com espaço.

```php
$string  = '  He4rt Developers ';
trim($string); // retorna He4rt Developers (sem espaços)
```

Exemplo #2
Espaçamento com tab.

```php
$string  = '    He4rt Developers  ';
trim($string,'\t'); // retorna He4rt Developers (sem espaços)
```

Esta função ainda há duas variantes que são o [**`ltrim()`**](https://www.php.net/manual/pt_BR/function.ltrim.php), que retira apenas os espaços ao início (esquerda) da string. O outro é o [**`rtrim()`**](https://www.php.net/manual/pt_BR/function.rtrim.php) que remove o espaço ao final da string.

## strtoupper

A função **`strtoupper()`** converte todos os caracteres para maiúsculas. Esta função é muito utilizada, para tratar a entrada de dados do usuário ou destacar uma mensagem, para apresenta-la de forma mais amigável.

Argumentos/Parâmetros:

- String a ser transformada.

Retornos Esperados:

- **Sucesso**: string

[Link para documentação](https://www.php.net/manual/pt_BR/function.strtoupper.php)

### Exemplos

Exemplo #1

```php
$string  = 'Developers';
strtoupper($string); // retorna DEVELOPERS
```

## strtolower

A função **`strtolower()`** converte todos os caracteres para minúsculo. Esta função é muito utilizada, para tratar a entrada de dados do usuário ou destacar uma mensagem, para apresenta-la de forma mais amigável.

Argumentos/Parâmetros:

- String a ser transformada.

Retornos Esperados:

- **Sucesso**: string

[Link para documentação](https://www.php.net/manual/pt_BR/function.strtolower.php)

### Exemplos

Exemplo #1

```php
$string  = 'DEVelopers';
strtolower($string); // retorna developers
```

## str_contains

A função **`str_contains()`** Verifica se uma string está contida na outra. Muito utilizada para identificar se neste texto X, há palavra Y ?
Argumentos/Parâmetros:

- (string) Palheiro.
- (string) Agulha

Retornos Esperados:

- **Contido**: true
- **Não contido**: false

[Link para documentação](https://www.php.net/manual/pt_BR/function.str-contains.php)

### Exemplos

Exemplo #1

```php
$palheiro = 'He4rt devs é o melhor grupo';
$agulha = 'devs';
$contem  = str_contains($palheiro, $agulha); // retorna true

```

Exemplo #2

```php
$string  = 'He4rt devs é o melhor grupo';
$buscandoPor = 'developers';
$contem = str_contains($stringCompleta, $buscandoPor); // retorna false

```

Exemplo #3

Uma String vazia sempre está continda em qualquer string

```php
$string  = 'He4rt devs é o melhor grupo';
$buscandoPor = '';
$contem = str_contains($stringCompleta, $buscandoPor); // retorna true

```

## str_starts_with

A função **`str_starts_with()`**  Verifica se uma string *COMEÇA* com outra string.
Argumentos/Parâmetros:

- (string) Palheiro.
- (string) Agulha

Retornos Esperados:

- **Contido**: true
- **Não contido**: false

[Link para documentação](https://www.php.net/manual/pt_BR/function.str-starts-with.php)

### Exemplos

Exemplo #1

```php
$string = 'He4rt devs é o melhor grupo';
$buscandoPor = 'He4rt';
$contem  = str_starts_with($string, $buscandoPor); // retorna true

```

Exemplo #2

```php
$string  = 'He4rt devs é o melhor grupo';
$buscandoPor = 'devs';
$contem = str_starts_with($stringCompleta, $buscandoPor); // retorna false

```

Exemplo #3

Uma String vazia sempre está continda em qualquer string

```php
$string  = 'He4rt devs é o melhor grupo';
$buscandoPor = '';
$contem = str_starts_with($stringCompleta, $buscandoPor); // retorna true

```


## str_ends_with

A função **`str_ends_with()`**  Verifica se uma string *TERMINA* com outra string.
Argumentos/Parâmetros:

- (string) Palheiro.
- (string) Agulha

Retornos Esperados:

- **Contido**: true
- **Não contido**: false

[Link para documentação](https://www.php.net/manual/pt_BR/function.str-starts-with.php)

### Exemplos

Exemplo #1

```php
$string = 'He4rt devs é o melhor grupo';
$buscandoPor = 'grupo';
$contem  = str_ends_with($string, $buscandoPor); // retorna true

```

Exemplo #2

```php
$string  = 'He4rt devs é o melhor grupo';
$buscandoPor = 'devs';
$contem = str_ends_with($stringCompleta, $buscandoPor); // retorna false

```

Exemplo #3

Uma String vazia sempre está continda em qualquer string

```php
$string  = 'He4rt devs é o melhor grupo';
$buscandoPor = '';
$contem = str_ends_with($stringCompleta, $buscandoPor); // retorna true

```

## preg_replace

A função **`preg_replace()`** substitui caracteres de uma string e te retorna uma nova string baseado em um Ragex.

Argumentos/Parâmetros:

- String ou array de parâmetros a serem substituídos;
- Regex que irá repor os caracteres substituídos;
- String a ser substituida.

[Link para documentação](https://www.php.net/manual/pt_BR/function.preg-replace.php)

### Exemplos

Exemplo #1
Remove Some Word

```php
$string = 'Meu pé está quente';

echo preg_replace('/pé/', '', $string);
// Resultado:
// Meu está quente
```

Exemplo #2 
Remove HTML Tags

```php
$string = '<html><div><span>Hello World</span></div></html>';

echo reg_replace('/<[^<>]+>/', '', $string);

// Resultado:
// Hello World
```

Exemplo #3
Remove Special Characters

```php
$string = 'Meu pé está quente';

preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $string);

echo $string;
// Resultado:
// Meu pe esta quente
```

## ucfirst

A função **`ucfirst()`** altera a primeira letra da string para maiúscula.

Argumentos/Parâmetros:

- String a ser transformada.


[Link para documentação](https://www.php.net/manual/pt_BR/function.ucfirst)

### Exemplos

Exemplo #1

```php
$string  = 'daniel';
ucfirst($string); // retorna Daniel
```


Ir para: [4.3 - Funções de manipulação de Arrays](3-Funcoes-arrays.md)
