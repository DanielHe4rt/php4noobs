# 4.4 - Modificadores de Acesso

## O que são ?

Os modificadores de acesso são palavras-chave reservadas para definir quais metódos e/ou
propiedades podem ser acessadas a partir um ponto especifíco do seu código. Existem 3 níveis de visibilidade: 
**public**, **protected** e **private**.


### Public

O nível de visibilidade publica é o padrão de todas as propiedades de uma classe, fazendo-as serem
acessíveis de qualquer lugar do código.

Por exemplo, temos uma classe Pessoa, com uma propriedade nome e um metódo apresentar,
ambas as propiedades podem ser utilizadas fora da classe.
```php
<?php

class Pessoa {
    public $nome = 'João';
    
    public function apresentar()
    {
        echo "Meu nome é $this->nome";
    }
}

$pessoa = new Pessoa();
echo $pessoa->nome . PHP_EOL; //Output: João
$pessoa->apresentar() . PHP_EOL; //Output: Meu nome é João
```

### Protected

Já o nível protegido faz com que as propiedades só sejam acessíveis dentro do escopo de classes que herdam a classe pai.


```php
<?php

class Pai {

    protected $nomePai = 'João';

}

class Filho extends Pai {

    public $nome = 'Pedro';

    public function apresentar()
    {
        echo "Meu nome é $this->nome e o do meu pai é" . $this->nomePai;
    }
}

$pai = new Pai();
$pai->nomePai . PHP_EOL; //Erro fatal

$filho = new Filho();

$flho->nomePai . PHP_EOL; //Erro fatal
$filho->apresentar(); //Output: Meu nome é Pedro e o do meu pai é João
```

### Private

As propiedades com nível de acesso privado só estão disponíveis dentro da própia classe que a criou, não é possível acessar elas a partir de classes que a herdam.

Voltando ao exemplo anterior, podemos criar um metodo e um atributo adcional para demostrar o nível privado.
```php

<?php

class Pai {

    protected $nomePai = 'João';

    private $cpf = '999.999.999.99';

    public function apresentar()
    {
        echo "Meu nome é $this->nomePai e meu CPF é: $this->cpf";
    }

    private function mostrarCpf()
    {
        echo $this->cpf;
    }

}

class Filho extends Pai {

    public $nome = 'Pedro';

    public function mostrarCpfPai()
    {
        echo "O CPF do meu Pai é: " . $this->cpf; //Propiedade inexistente
    }
}

$pai = new Pai();
$pai->cpf . PHP_EOL; //Erro fatal
$pai->mostrarCpf() . PHP_EOL; //Erro fatal
$pai->apresentar() . PHP_EOL; //Ok

$filho = new Filho();
$filho->mostrarCpfPai(); //Erro fatal
```
