# 3.11 Operadores Lógicos

Operadores lógicos operam com valores [booleanos](3-Tipos-de-dados.md). Por isso, eles convertem valores para um **Booleano** antes de tentar a operação.

## E `&&`, `and` 

Verdadeiro `true`, se ambos os operandos (valores a serem testados), forem verdadeiros.

### Exemplo:
```php
<?php

$a = true;
$b = true;

var_dump($a && $b);

//Retorna: bool(true)
```

## OU `or`, `||`

Este operador lógico é conhecido como: **OU Inclusivo**, e vai retornar `true` se um dos operandos for verdadeiro, ou ambos.

### Exemplo:
```php
<?php

$a = false;
$b = true;

var_dump($a || $b);

//Retorna: bool(true)
```

## XOR `^`, `xor`

Este operador lógico é conhecido como: **OU Exclusivo**, e vai retornar `true` se um dos operandos for verdadeiro, **mas não ambos**.

### Exemplos
```php
<?php

$a = true;
$b = true;

var_dump($a ^ $b);

//Retorna: int(0) zero, ou seja, falso, pois ambos os operandos é verdadeiro;
```

```php
<?php

$a = true;
$b = false;

var_dump($a ^ $b);

//Retorna: int(1), ou seja, true, pois apenas um dos operandos é verdadeiro;
```

## NÃO `!`, `not`

É um operador de negação.

```php
<?php

$a = true;

var_dump(!$a);

//Retorna: bool(false), aqui negamos uma variável verdadeira e ela se tornou falsa.
```

## Preste muita atenção pois:

Os símbolos `&&`, `||` e `^` têm maior ordem de precedência, e são avaliados primeiro que `and`, `or`, e `xor`.
Na prática eles fazem a mesma coisa, mas os símbolos sempre vão ser avaliados primeiro nas expressões, evite mistura-los.

#### Notas

- Nos exemplos deste tópico usamos a função `var_dump()`, caso você tenha esquecido como ela funciona, clica [AQUI](/3-Basico/1-Saida.md);
- Lembre-se que: `0` é `false` (falso) e `1` é `true` (verdadeiro).

Ir para: [3.12 Operador de Execução](12-Execucao.md)