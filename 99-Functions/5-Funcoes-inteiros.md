# 4.5 - Funções de manipulação de Inteiros

Nesse tópico, iremos abordar algumas funções importantes para manipulação de inteiros e deixar links úteis para você pesquisar mais sobre caso queira.

## intval

A função **`intval()`** converte um valor para um inteiro.

[Link para documentação](https://www.php.net/manual/pt_BR/function.intval.php)

Argumentos/Parâmetros:

- Valor a ser convertido;
- Base de conversão (opcional).

### Exemplos

Exemplo #1 Convertendo strings para inteiros

```php
$var = '122.34343The';
$int = intval($var);

echo $int;
// Result
// 122
```

Exemplo #2 Convertendo valores com base

```php
$var = '1010';
$int = intval($var, 2);

echo $int;
// Result
// 10 (valor binário convertido para decimal)
```

Exemplo #3 Convertendo floats para inteiros

```php
$var = 122.34343;
$int = intval($var);

echo $int;
// Result
// 122
```

Exemplo #4 Se uma string não numérica for passada, a função retornará 0

```php
$var = 'The';
$int = intval($var);

echo $int;
// Result
// 0
```

## round

A função **`round()`** arredonda um valor para um inteiro.

[Link para documentação](https://www.php.net/manual/pt_BR/function.round.php)

Argumentos/Parâmetros:

- Valor a ser arredondado;
- Casas decimais (opcional);

### Exemplos

Exemplo #1 Arredondando floats

```php
$var = 122.34343;
$int = round($var);

echo $int;
// Result
// 122
```

Exemplo #2 Arredondando floats com casas decimais

```php
$var = 122.34343;
$int = round($var, 2);

echo $int;
// Result
// 122.34
```

## ceil

A função **`ceil()`** arredonda um valor para cima.

[Link para documentação](https://www.php.net/manual/pt_BR/function.ceil.php)

Argumentos/Parâmetros:

- Valor a ser arredondado;

### Exemplos

Exemplo #1 Arredondando floats para cima

```php
$var = 122.34343;
$int = ceil($var);

echo $int;
// Result
// 123
```

## floor

A função **`floor()`** arredonda um valor para baixo.

[Link para documentação](https://www.php.net/manual/pt_BR/function.floor.php)

Argumentos/Parâmetros:

- Valor a ser arredondado;

### Exemplos

Exemplo #1 Arredondando floats para baixo

```php
$var = 122.34343;
$int = floor($var);

echo $int;
// Result
// 122
```

## abs

A função **`abs()`** retorna o valor absoluto de um número.

[Link para documentação](https://www.php.net/manual/pt_BR/function.abs.php)

Argumentos/Parâmetros:
- Valor a ser retornado o absoluto;

### Exemplos

Exemplo #1 Retornando o valor absoluto de um número

```php
$var = -122.34343;
$int = abs($var);

echo $int;
// Result
// 122.34343
```

## rand

A função **`rand()`** retorna um número inteiro aleatório.

[Link para documentação](https://www.php.net/manual/pt_BR/function.rand.php)

Argumentos/Parâmetros:
- Valor mínimo;
- Valor máximo;

### Exemplos

Exemplo #1 Retornando um número aleatório

```php
$int = rand();

echo $int;
// Result
// random number
```

Exemplo #2 Retornando um número aleatório entre 1 e 10

```php
$int = rand(1, 10);

echo $int;
// Result
// random number entre 1 e 10
```

## min

A função **`min()`** retorna o menor valor de um array.

[Link para documentação](https://www.php.net/manual/pt_BR/function.min.php)

Argumentos/Parâmetros:
- Array de valores;

### Exemplos

Exemplo #1 Retornando o menor valor de um array

```php
$int = min([1, 2, 3, 4, 5]);

echo $int;
// Result
// 1
```

## max

A função **`max()`** retorna o maior valor de um array.

[Link para documentação](https://www.php.net/manual/pt_BR/function.max.php)

Argumentos/Parâmetros:
- Array de valores;

### Exemplos

Exemplo #1 Retornando o maior valor de um array

```php
$int = max([1, 2, 3, 4, 5]);

echo $int;
// Result
// 5
```

## pow

A função **`pow()`** retorna o valor de um número elevado a outro.

[Link para documentação](https://www.php.net/manual/pt_BR/function.pow.php)

Argumentos/Parâmetros:
- Valor base;
- Valor expoente;

Exemplo #1 Retornando o valor de um número elevado a outro

```php
$int = pow(2, 3);

echo $int;
// Result
// 8
```

## sqrt

A função **`sqrt()`** retorna a raiz quadrada de um número.

[Link para documentação](https://www.php.net/manual/pt_BR/function.sqrt.php)

Argumentos/Parâmetros:
- Valor a ser calculado a raiz quadrada;

Exemplo #1 Retornando a raiz quadrada de um número

```php
$int = sqrt(9);

echo $int;
// Result
// 3
```

## is_int

A função **`is_int()`** verifica se o valor passado é um inteiro.

[Link para documentação](https://www.php.net/manual/pt_BR/function.is-int.php)

Argumentos/Parâmetros:
- Valor a ser verificado;

Exemplo #1 Verificando se o valor é um inteiro

```php
$int = 9;

if (is_int($int)) {
    echo 'É um inteiro';
} else {
    echo 'Não é um inteiro';
}

// Result
// É um inteiro
```