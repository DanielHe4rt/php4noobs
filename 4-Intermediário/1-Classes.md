# 4.1 - Classes

## O que é ?

As classes são responsáveis por criarem estruturas e comportamentos para conceitos das aplicações e do mundo real, elas são compostas basicamente por propriedades e métodos. As propriedades funcionam como característias de um objeto (representa uma analogia aos objetos do mundo real) e os métodos representam suas funcionalidades. Podemos ter como exemplo uma bola, onde definimos sua cor, seu tamanho como características e seu comportamento poderia ser quicar, veja este exemplo:

```php
<?php

class Bola {
    public $cor; //propriedade
    public $tamanho; //propriedade

    public function quicar() //método
    {
        //iniciar ação de quicar
    }
}
```

## Como Usar ?

As classes devem ser instânciadas para serem usadas, uma instância deve ser criado através da sintaxe:

```php
$bola = new Bola();
```

> ### Nota:

> - Podemos observar neste caso que $bola é um objeto instância da classe Bola();

Seus métodos e atributos podem ser chamados e acessados através do operador '->'.
Sintaxe:

```php
//Atributo:
echo $bola->cor;
echo $bola->tamanho;

//Métodos:
$bola->quicar();
```

Ir para: [4.2 Construtores e Destrutores](2-Construtores-e-destrutores.md)
