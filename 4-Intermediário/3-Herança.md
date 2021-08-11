# 4.3 - Herança

## O que é?

Como já foi dito, a herança é um dos pilares da Progamação Orientada a Objetos. Com ela é possível fazer o reuso de classes que contém atributos e metódos em comum.

Vamos usar como exemplo a relação de um pai e um filho e seus idiomas nativos, onde o filho irá herdar as características de seu pai. Naturalmente, o pai sabe falar uma linguagem e eventualmente seu filho também aprenderá ela por meio do convívio.

```php 

class Pai
{
    public $nome = 'João';

    public $idioma = 'Português';

    public function apresentar()
    {
        echo "Olá, meu nome é {$this->nome} e meu idioma nativo é {$this->idioma}!" . PHP_EOL;
    }
}

class Filho extends Pai {
    public $nome = 'Enzo';
}

```

Neste exemplo, a classe Filho herda a propiedade `idioma` e o metódo `apresentar` da classe Pai. Mesmo não tendo implementado-as em seu corpo, ela tem acesso a elas porque as herdou.

```php

$pai = new Pai();
$pai->apresentar(); //Olá, meu nome é João e meu idioma nativo é Português!

//O filho herda as propiedades do pai
$filho = new Filho();
$filho->apresentar; //Olá, meu nome é Enzo e meu idioma nativo é Português!
```

Como você pode ver, apesar do Filho herdar as propiedades do Pai, é possível que estas sejam modificadas, como foi feito com a propiedade `nome`.


### Nota
> - No PHP não é possível herdar mais de uma classe, para isso são usadas as interfaces.
> - Você poderá aprender mais sobre a palavra chave `public` no capitulo sobre [modificadores de acesso](4-Modificadores-de-acesso.md).

Ir para: [4.4 Modificares de Acesso](4-Modificadores-de-acesso.md)
