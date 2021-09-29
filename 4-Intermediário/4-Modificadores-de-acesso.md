# 4.4 - Modificadores de Acesso

## O que são?

Os modificadores de acesso são palavras-chave reservadas para definir quais metódos e/ou
propriedades podem ser acessadas à partir de um ponto especifíco do seu código. 

## Quais são?

No PHP, existem 3 níveis de visibilidade: 
**public**, **protected** e **private**.


### public

O nível de visibilidade public é o padrão de todas as propriedades de uma classe, fazendo-as serem
acessíveis dentro do escopo da própria classe e por quaisquer classes externas, não somente as que herdam a classe pai.

Por exemplo, temos uma classe Pessoa, com uma propriedade nome e um metódo apresentar,
ambas as propriedades podem ser utilizadas fora da classe.
```php
<?php

class Pessoa {
    public $nome = 'João';
    
    public function apresentar()
    {
        echo "Meu nome é {$this->nome}";
    }
}

$pessoa = new Pessoa();
echo $pessoa->nome . PHP_EOL; //Output: João
$pessoa->apresentar() . PHP_EOL; //Output: Meu nome é João
```

### protected

Já o nível de visibilidade protected faz com que as propriedades sejam acessíveis somente dentro do escopo da própria classe e de classes que herdam a classe pai.


```php
<?php

class Pai {

    protected $nomePai = 'João';

}

class Filho extends Pai {

    public $nome = 'Pedro';

    public function apresentar()
    {
        echo "Meu nome é {$this->nome} e o do meu pai é" . $this->nomePai;
    }
}

$pai = new Pai();
$pai->nomePai . PHP_EOL; //Erro fatal

$filho = new Filho();

$flho->nomePai . PHP_EOL; //Erro fatal
$filho->apresentar(); //Output: Meu nome é Pedro e o do meu pai é João
```

### private

As propriedades com nível de acesso privado só estão disponíveis dentro do escopo da própria classe que a criou, não sendo possível acessar elas à partir de classes que herdam a classe pai.

Voltando ao exemplo anterior, podemos criar um método e um atributo adicional para demonstrar o nível de visibilidade private.
```php

<?php

class Pai {

    protected $nomePai = 'João';

    private $cpf = '999.999.999.99';

    public function apresentar()
    {
        echo "Meu nome é {$this->nomePai} e meu CPF é: {$this->cpf}";
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
        echo "O CPF do meu Pai é: " . $this->cpf; //Propriedade inexistente
    }
}

$pai = new Pai();
$pai->cpf . PHP_EOL; //Erro fatal
$pai->mostrarCpf() . PHP_EOL; //Erro fatal
$pai->apresentar() . PHP_EOL; //Ok

$filho = new Filho();
$filho->mostrarCpfPai(); //Erro fatal
```

