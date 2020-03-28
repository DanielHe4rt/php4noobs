# 3.3 - Tipo de dados

Programação é uma constante troca de dados entre a memória e o processador, onde a memória PRECISA saber o que está sendo enviado para existir uma melhor forma de processar essa informação e conhecer os tipos de dados padrões vai ajudar a você entender um conceito muito básico da programação de baixo nível (não muito bem aplicada em PHP, masss): a tipagem. <br>

Por que você deveria perder tempo com isso já que o PHP não te obriga a fazer essa parte de tipagem?<br>
Os tipos de dados são MUITO importantes para que sua aplicação não quebre por um erro bobo onde você "deveria ter mandando um número inteiro em vez de um flutuante".<br>

Vamos entender os tipos escalares do PHP:

## Boleanos

Este é o tipo mais simples. Um booleano expressa um valor de verdade. Ele pode ser TRUE ou FALSE e são valores case-insensitives. <br>
Vamos usar a função de saida **var_dump()** para entender um pouco de como o interpretador o dado boolean no código abaixo:

```php
<?php
var_dump(True);
var_dump(False);
var_dump(true);
var_dump(false);
var_dump(TrUe);
var_dump(fAlSe)
```

<center><i>Arquivo encontrado em: exemplos/boolean1.php</i></center>
Você pode executar o exemplo acima com o comando abaixo:<br>

```
    php /curso-php/3-PHP-Básico/3.3-Tipos-de-dados/exemplos/boolean1.php
```

<img src="https://i.imgur.com/b3wbeHh.gif">

## Inteiros

Um inteiro é um número do conjunto Z = {..., -2, -1, 0, 1, 2, ...}. <br>
Inteiros podem ser especificados em notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2), opcionalmente precedido de sinal (- ou +).

```php
<?php
var_dump(1234); // número decimal
var_dump(-123); // um número negativo
var_dump(0123); // número octal (equivalente a 83 em decimal)
var_dump(0x1A); // número hexadecimal (equivalente a 26 em decimal)
var_dump(0b11111111); // número binário (equivalente ao 255 decimal)
var_dump(1234); // número decimal
var_dump(-123); // um número negativo
var_dump(0123); // número octal (equivalente a 83 em decimal)
var_dump(0x1A); // número hexadecimal (equivalente a 26 em decimal)
var_dump(0b11111111); // número binário (equivalente ao 255 decimal)
```

<center><i>Arquivo encontrado em: exemplos/integer1.php</i></center>
Você pode executar o exemplo acima com o comando abaixo:<br>

```
    php /curso-php/3-PHP-Básico/3.3-Tipos-de-dados/exemplos/integer1.php
```

<img src="https://i.imgur.com/L022Olp.gif">
