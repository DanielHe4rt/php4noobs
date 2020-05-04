# 4.1 - Funções de manipulação de String

Nesse tópico, iremos abordar algumas funções importantes para manipulação de string e deixar links úteis para você pesquisar mais sobre caso queira.

## strlen

A função **strlen()** conta a quantidade de caracteres dentro de uma string.

### Exemplos

Exemplo #1 CountingNameCharacters

```php
$name = "danielhe4rt";

echo "O nome tem " . strlen($name) . " caracteres";
// Resultado
// O nome tem 11 caracteres
```

## str_repeat

A função **str_repeat()** repete uma quantidade de vezes uma string que você tenha em mente.

Argumentos/Parametros:

- String a ser repetida;
- Quantidade de vezes a ser repetido.

### Exemplos

Exemplo #1
Melhor Grupo <3

```php
$string = "He4rtDevs ";
$qtd = 3;

$repeat = str_repeat($string, $qtd);

echo "Melhor grupo é claramente " . $repeat;

// Result
// Melhor grupo é claramente He4rtDevs He4rtDevs He4rtDevs

```

## str_replace

A função **str_replace()** substitui caracteres de uma string e te retorna uma nova string.

Argumentos/Parametros:

- String ou array de parâmetros a serem substituidos
- String que irá repor os caracteres substituidos
- String a ser examinada

### Exemplos

Exemplo #1
BetterLang

```php
$string = "JS é a melhor linguagem";

echo str_replace("JS","PHP", $string);
// Resultado:
// PHP é a melhor linguagem
```

Exemplo #2 CursedWords

```php
$string = "Palavras que devem ser censuradas: Java, BBB, Boninho, BBBot";

echo str_replace(['Java','BBB','BBBot'],'****', $string);

// Resultado:
// Palavras que devem ser censuradas: ****, ****, Boninho, ****
```

Exemplo #3: BetterCursedWords

```php
$string = "Palavras que devem ser censuradas: Java, BBB, Boninho, BBBot";

$cursedWords = ['Java','BBB','BBBot']

foreach ($cursedWords as $word) {
    $string = str_replace($word, str_repeat('*', strlen($word)), $string);
}

echo $string;
// Resultado:
// Palavras que devem ser censuradas: ****, ***, Boninho, *****
```

## substr

A função **substr()** retorna uma parte dos caracteres de uma string, podendo usar parametros de inicio ou inicio e fim.

O segundo e terceiro parametro são identificadores que se baseiam no tamanho da string.

Argumentos/Parametros:

- String a ser inspecionada;
- Identificador inicial da string a ser pega;
- Identificador final da string a ser pega;

### Exemplos

Exemplo #1
Usando um início negativo

```php
$rest = substr("abcdef", -1);    // retorna "f"
$rest = substr("abcdef", -2);    // retorna "ef"
$rest = substr("abcdef", -3, 1); // retorna "d"
```

Exemplo #2
Usando um length negativo

```php
$rest = substr("abcdef", 0, -1);  // retorna "abcde"
$rest = substr("abcdef", 2, -1);  // retorna "cde"
$rest = substr("abcdef", 4, -4);  // retorna false
$rest = substr("abcdef", -3, -1); // retorna "de"
```

## strpos

A função **strpos()** retorna a posição númerica da primeira ocorrência do item buscado.
A Primeira posição da string é igual á 0, seguindo assim em diante. Como se fosse um vetor (array).

Argumentos/Parametros:

- String a ser buscada. (String maior,completa)
- String com o contéudo que quero buscar.
- (Opcional) Procurar na String a partir da posição x.

Retornos Esperados:

- **Sucesso**: string
- **Erro**: false (boolean)

### Exemplos

Exemplo #1
Procurando por um caracter em especifico:

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
    $posicaoInicial = 4 // ou seja, buscando a partir de ..."lopers".
    $posicao = strpos($stringCompleta, $buscandoPor, $posicaoInicial); // retorna 7
```
