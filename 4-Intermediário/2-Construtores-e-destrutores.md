# 4.2 - Construtores e destrutores

## O que são ?

Os construtores e destrutores são metódos mágicos que executam determinadas tarefas assim que a classe é instânciada e antes de ser removida da memória

### Construtores

Os construtores são especificados por um metódo chamado `__construct` e são executados sempre que a classe é chamada. Você pode por exemplo, atribuir valores não-primitivos a atributos da classe antes de executar qualquer ação, o que não seria possível sem um construtor.

Vamos imaginar a classe `Player`, que contem os atributos base de um personagem de um 
jogo: `username`, `password`, `money`. Quando criamos um novo objeto de uma classe e você tem um
construtor, ele é tido como uma "função" que recebe os parâmetros. Olhe a classe abaixo:
```php
// Player.php

class Player
{

    public string $username; // propriedade/atributo
    private string $password; // propriedade/atributo
    protected float $money; // propriedade/atributo

    /**
     * Método mágico: construtor
     */
    public function __construct(string $username, string $password, float $money)
    {
        $this->username = $username; // Setter do Construtor
        $this->password = password_hash($password, PASSWORD_ARGON2I); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }
}
```

Note que o construtor é uma função que recebe parâmetros na ordem que você quiser. E quando vamos 
instância-lá, usamos a palavra reservada `new` e o nome da classe `Player` e os parametros 
`('danielhe4rt','secret123', 1000)` na ordem que foram declaradas no escopo do construtor e atribuimos
a uma variavel. Fica assim: 

```php
$danielhe4rt = new Player('danielhe4rt', 'secret123', 1000);
```

Se você não passar algum dos parâmetros ou colocá-los fora de ordem, seu código apontará um erro
falando que falta argumentos ou que os dados passados não **segem os mesmos tipos** (lembre-se de tipar os parametros de suas funções).

Caso você queira deixar um argumento opcional, você deverá atribuir um valor padrão pra eles. Se liga:

```php
// Player.php

class Player
{

    public string $username; // propriedade/atributo
    private string $password; // propriedade/atributo
    protected float $money; // propriedade/atributo

    /**
     * Método mágico: construtor
     */
    public function __construct(string $username, string $password, float $money = 1500.0)
    {
        $this->username = $username; // Setter do Construtor
        $this->password = password_hash($password, PASSWORD_ARGON2I); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }
}
```

```php
// Instancia sem o valor do atributo money
$danielhe4rt = new Player('danielhe4rt', 'secret123');
```

Ele não foi necessário porquê falamos em nosso construtor que:
- Se não for passado o valor do atributo money, coloque-o como **1500.0** (valor padrão).
- Se for passado o valor do atributo money, sobrescreva o valor padrão de **1500.0** pelo valor passado na variavel.

Uma coisa bem importante sobre os atributos padrões em construtores é que eles devem ser declarados
da direita para a esquerda. Entenda o caso abaixo:

```php
// Player.php

class Player
{

    public string $username; // propriedade/atributo
    private string $password; // propriedade/atributo
    protected float $money; // propriedade/atributo

    /**
     * Método mágico: construtor
     */
    public function __construct(string $username = 'danielhe4rt', string $password, float $money = 1500.0)
    {
        $this->username = $username; // Setter do Construtor
        $this->password = password_hash($password, PASSWORD_ARGON2I); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }
}
```

```php
// Instancia sem o valor do atributo username
$danielhe4rt = new Player('secret123', 99999);
```

Esse código acima geraria um erro assim que a classe for lida pois se há mais de 1 argumento 
e o primeiro dos argumentos tiver um valor padrão e o segundo não, ele **não saberá como interpretar**
já que a declaração começa da esquerda para a direita.

Como poderiamos fazer esse cenário dar certo? Colocando os valores padrões a direita do escopo
do construtor e os que não tiverem valores padrões à esquerda.

```php
// Player.php

class Player
{

    public string $username; // propriedade/atributo
    private string $password; // propriedade/atributo
    protected float $money; // propriedade/atributo

    /**
     * Método mágico: construtor
     */
    public function __construct(string $password, string $username = 'danielhe4rt', float $money = 1500.0)
    {
        $this->username = $username; // Setter do Construtor
        $this->password = password_hash($password, PASSWORD_ARGON2I); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }
}
```

```php
// Instancia sem o valor do atributo username e o money
$danielhe4rt = new Player('secret123');

$danielhe4rt->username; // danielhe4rt
$danielhe4rt->money; // 1500.0
```

Construtores são bem simples assim que você entende algumas regras e há muito mais a ser explorado, mas vamos manter isso simples!

### Destrutores

Já os destrutores agem no momento oposto aos construtores, bem antes da classe ser removida da memória, sendo atribuídas `null` ou usando `unset`. Suas ações devem ser definidas no metódo `__destruct`.

```php
class Player
{

    public string $username; // propriedade/atributo

    /**
     * Método mágico: construtor
     */
    public function __construct(string $username)
    {
        $this->username = $username; // Setter do Construtor
        echo "Jogador Cadastrado!";
    }

    /**
     * Método mágico: destrutor
     */
    public function __destruct() 
    {
        echo "Conta do jogador " . $this->username . " encerrada!";
    }
}
```
Note que deixei a classe bem sucinta e coloquei um echo para quando a classe é construida e quando a varável que recebe
o objeto é removido da memória para dar um exemplo de como acontece o processo. Se liga:

```php
$danielhe4rt = new Player('danielhe4rt');
// Jogador Cadastrado!

unset($danielhe4rt);
// Conta do jogador danielhe4rt encerrad!

```

### Notas:
> - Ambos os metódos demostrados acima não devem retornar ou especificar tipo de retorno(apesar deste ser `void` por padrão). 
> - Classes que herdam outras usaram o construtor da classe-pai caso não definam um construtor própio.


Ir para: [4.3 Herança](3-Herança.md)
