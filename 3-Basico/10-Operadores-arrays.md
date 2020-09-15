# 3.10 Operadores de Arrays

O PHP manda muito bem quando se trata de processamento de arrays/matrizes.
Existem muitas funções internas para auxiliar nisso.
Vejamos os operadores que podemos usar ao fazer **operações com arrays:**

## União `+`

Você pode unir um ou mais valores de arrays.

### Exemplo:

```php
<?php

$array1 = [0 => 'PHPBA', '1' => 'PHPSP', 2 => 'PHPSE'];
$array2 = [3 => 'he4rtdevs'];

print_r($array1 + $array2);

/**
Retorna:

Array
(
    [0] => PHPBA
    [1] => PHPSP
    [2] => PHPSE
    [3] => he4rtdevs
)
**/
```

## Igualdade `==`

Verifica se os valores dos arrays passados são iguais.

### Exemplo:

```php
<?php

$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 == $array2;

//Retorna: 1, significa que os valores dos arrays são iguais
```

## Diferença `!=` ou `<>`

Verifica se os valores dos arrays passados são diferentes.

### Exemplo:
```php
<?php

$array1 = [0 => 1];
$array2 = [0 => 2];

echo $array1 != $array2;

//Retorna: 1, significa que os valores dos arrays são diferentes
```

## Idêntico `===`

Verifica se valores dos arrays são iguais e do mesmo tipo.

### Exemplo:
```php
<?php

$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 === $array2;

//Retorna: 1, significa que os valores dos arrays são iguais e do mesmo tipo (número inteiro)
```
## Não idêntico `!==`

Verifica se valores dos arrays não são idênticos (valor e tipo do valor).

### Exemplo:
```php
<?php

$array1 = [0 => 1];
$array2 = [0 => '1'];

echo $array1 !== $array2;

//Retorna: 1, significa que os valores dos arrays não são iguais e/ou não são do mesmo tipo (número inteiro)
```

#### Notas

- No PHP, o índice de um array começa a partir de zero `0`;
- Um retorno zero significa falso;
- Arrays e matrizes são a mesma coisa;
- A função `print_r()` é muito útil para testar arrays;
- Se você estiver usando alguma versão antes do PHP 5.4 não vai dar certo escrever arrays como nos exemplos deste tópico, então faça assim:

### Escrevendo um Array antes do PHP 5.4
```php
<?php

$array1 = array(0 => 'PHPBA', '1' => 'PHPSP', 2 => 'PHPSE');

print_r($array1);

/**
Retorna:

Array
(
    [0] => PHPBA
    [1] => PHPSP
    [2] => PHPSE
)
**/
```

Ir para: [3.11 Operadores Lógicos](11-Operadores-logicos.md)
