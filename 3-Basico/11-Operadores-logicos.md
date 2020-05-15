# 3.11 Operadores Lógicos

Operadores lógicos operam com valores [booleanos](3-Tipos-de-dados.md). Por isso, eles convertem valores para um Booleano antes de tentar a operação.

## E `&&`, `and` 

Verdadeiro `true`, se ambos os operandos (valores a serem testados), forem verdadeiros.

### Exemplo
```php
<?php

$a = 2;
$b = 2;

echo $a && $b;


//Retorna: 1, que significa true
```

## OU `or`, `||`

Este operador lógico é conhecido como: **OU Inclusivo**, e vai retornar `true` se um dos operandos for verdadeiro.

### Exemplo
```php
<?php

$a = 0;
$b = true;

echo $a || $b;


//Retorna: 1
```

## XOR `^`, `xor`

Este operador lógico é conhecido como: **OU Exclusivo**, e vai retornar `true` se um dos operandos for verdadeiro, **mas não ambos**.

### Exemplos
```php
<?php

$a = 1;
$b = 1;

echo $a ^ $b;


//Retorna: 0, ou seja, falso, pois ambos os operandos é verdadeiro;
```

```php
<?php

$a = 1;
$b = 0;

echo $a ^ $b;


//Retorna: 1, ou seja, true, pois apenas um dos operandos é verdadeiro;
```

## NÃO `!`, `not`

É um operador de negação.

```php
<?php

$a = true;

echo !$a;

//Retorna: nada, pois é falso, aqui negamos uma variável verdadeira e ela se tornou falsa.
```

## Preste muita atenção pois:

Os símbolos `&&`, `||` e `^` têm maior ordem de precedência, e são avaliados primeiro que `and`, `or`, e `xor`.
Ná prática eles fazem a mesma coisa, mas os símbolos sempre vão ser avaliados primeiro nas expressões, evite mistura-los.