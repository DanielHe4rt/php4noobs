# 4.2 - Construtores e destrutores

## O que são ?

Os construtores e destrutores são metódos mágicos que executam determinadas tarefas assim que a classe é instânciada e antes de ser removida da memória

### Construtores

Os construtores são especificados por um metódo chamado `__construct` e são executados sempre que a classe é chamada. Você pode por exemplo, atribuir valores não-primitivos a atributos da classe antes de executar qualquer ação, o que não seria possível sem um construtor.

Vamos imaginar a classe `Pessoa`, iremos um atributo `nome` para ele e o seu construtor. Queremos que seu nome esteja sempre tenha a primeira letra maíscula, então faremos essa tratativa no construtor

```php
class Pessoa
{

    public $nome;

    public function __construct($nome)
    {
        $this->nome = ucfirst($nome);
        echo "Olá, meu nome é {$this->nome}";
    }
}

//Agora, quando formos instânciar a classe pessoa, passaremos seu nome como um argumento
$pessoa = new Pessoa('joão'); 
//Olá, meu nome é João
```

### Destrutores

Já os destrutores agem no momento oposto aos construtores, bem antes da classe ser removida da memória, sendo atribuídas `null` ou usando `unset`. Suas ações devem ser definidas no metódo `__destruct`.

```php
class Pessoa
{
    public function __destruct()
    {
        echo 'Até mais!';
    }
}

unset($pessoa);
//Até mais!
```

### Notas:
> - Ambos os metódos demostrados acima não devem retornar ou especificar tipo de retorno(apesar deste ser `void` por padrão). 
> - Classes que herdam outras usaram o construtor da classe-pai caso não definam um construtor própio.


Ir para: [4.3 Herança](3-Herança.md)
