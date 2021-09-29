# 3.6 Operadores Bitwise (bit a bit)

Operadores Bitwise permitem a avaliação e modificação de bits específicos em um tipo inteiro.

- E `&`
- OU `|`
- OU exclusivo `^`
- Não `~`
- Deslocar à esquerda `<<`
- Deslocar à direita `>>`

## Explicando melhor

Os operadores bitwise: `&` , `|` , `^` comparam dois valores inteiros utilizando suas representações binárias, e retornam um novo valor.
Cada bit será comparado e a formação desse novo valor depende do operador que você usar.

## Exemplos

## Operador E `&`
Retorna `1` **se ambos** os bits comparados forem iguais a `1`, caso contrário, retorna `0`.

```php
<?php

echo 9 & 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00000001

//Retorna: "1" que é o binário 00000001 
```

## Operador OU `|`
Retorna `1` **se um dos** bits comparados for igual a `1`, caso contrário, retorna `0`.

```php
<?php

echo 9 | 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00001111

//Retorna: "15" que é o binário 00001111 
```

## Operador OU exclusivo `^`
Retorna `1` **se ambos os** bits comparados forem diferentes, caso contrário, retorna `0`.

```php
<?php

echo 9 ^ 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00001110

//Retorna: "14" que é o binário 00001110 
```

## Operador Não `~`
Tem a função de `Inverter bits`. O bit que era 0 se torna 1; e o bit que era 1 se torna 0.

```php
<?php

$a = -9;
$a = ~$a;

echo $a;

//diferente dos outros exemplos aqui representamos o valor com 20 bits
// -9 em binário é:                 11111111111111110111
// após a operação o é resultado:   00000000000000001000

//Retorna: "8" que é o binário 00000000000000001000
```

## Operador Deslocar à esquerda `<<`
Desloca os bits de $a, $b passos para a esquerda (cada passo significa "multiplicar por dois");
Ou seja, `$a << 7`, é o mesmo que multiplicar `$a` por 2 `sete vezes`.

```php
<?php

$a = 9;
$b = 7;
echo $a << $b;

//Retorna: "1152" que é o resultado de 9*2*2*2*2*2*2*2
```

## Operador Deslocar à direita `>>`
Desloca os bits de $a, $b passos para a direita (cada passo significa "divide por dois");
Ou seja, `$a << 7`, é o mesmo que dividir `$a` por 2 `sete vezes`.

```php
<?php

$a = 9;
$b = 7;
echo $a >> $b;

//Retorna: "0" que é o resultado de 9/2/2/2/2/2/2/2
//Se você fizer a operação acima na calculadora o resultado vai ser igual a 0.0703125
//o PHP retorna o valor inteiro nesta operação
```

### Notas

- Bit é a menor unidade de informação na computação e pode ser 0 (zero) ou 1 (um), ligado ou desligado;
- Um byte tem 8 bits;
- Nao se preocupe com os operadores bit a bit por hora, basta que você conheça eles;

Ir para: [3.7 Operadores de Atribuição](07-Operadores-atribuicao.md)
