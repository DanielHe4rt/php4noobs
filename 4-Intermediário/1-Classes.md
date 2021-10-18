# 4.1 - Classes

## O que é ?

As classes são responsáveis por criarem estruturas e comportamentos para conceitos das aplicações e do mundo real, elas são compostas basicamente por propriedades e métodos. As propriedades funcionam como característias de um objeto (representa uma analogia aos objetos do mundo real/virtual) e os métodos representam suas funcionalidades. Podemos ter um exemplo de um jogador de qualquer jogo virtual, onde ele se registra, tem uma quantidade X de dinheiro, e caso queira pode trocar de senha, veja este exemplo:

```php
// Player.php
class Player {

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

    /**
     * Metodo: canBuy - Checa se o jogador tem dinheiro suficiente para comprar um item
     * @param itemPrice float
     * @return bool 
     */

    public function canBuy(Item $item): bool 
    {
        return $this->getMoney() >= $item->getPrice();
    }

    /**
     * Metodo: updatePassword (Setter) - Altera a senha do jogador
     * @param oldPassword string
     * @param newPassword string
     * @return void 
     */

    public function updatePassword(string $oldPassword, string $newPassword): void
    {
        if (!password_verify($oldPassword, $this->password)) {
            throw new Exception('A senha anterior está incorreta.');
        }

        $this->password = password_hash($newPassword, PASSWORD_ARGON2I);
    }

    /**
     * Método: getMoney (Getter) - retorna a quantidade de dinheiro do jogador
     * @return float
     */
    public function getMoney(): float 
    {
        return $this->money;
    }
}
```

```php
// Item.php
class Item {

    private string $name; // propriedade/atributo
    private float $price; // propriedade/atributo

    /**
     * Método mágico: construtor
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Método: getName (Getter) - retorna o nome do item
     * @return string
     */
    
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Método: getPrice (Getter) - retorna o preço do item
     * @return float
     */
    public function getPrice(): string 
    {
        return $this->price;
    }
}
```

Uma boa prática e um jeito de não tomar tapa na cara dos seus colegas do projeto é manter 
**uma classe por arquivo**, por motivos de localização e indexação de arquivos. Se você ver o coleguinha
colocando mais de uma classe por arquivo pode mete a mão na cara desse maluco >:@

## Como Usar ?

As classes devem ser instânciadas para serem usadas, uma instância deve ser criado através da sintaxe:

```php
$woodenSword = new Item('Wooden Sword', 800);

$silverSword = new Item('Silver Sword', 5640);

$danielhe4rt = new Player('danielhe4rt','secret123', 1000);
```


> ### Nota: podemos notar que quando instanciamos a classe Item e a Player, houveram paramêtros sendo passados. Essa sequência de parametros é devido ao método CONSTRUTOR que colocamos na classe. 

Seus métodos e atributos podem ser chamados e acessados através do operador '->' (também conhecido pelos devs BR's como setinha :p).
Sintaxe:

```php
//Atributo:
echo "Nome de usuário: " . $danielhe4rt->username;

//Métodos:
echo "Saldo: "  . $danielhe4rt->getMoney();

if ($danielhe4rt->canBuy($woodenSword)) {
    echo $danielhe4rt->username . ', você pode comprar a' . $woodenSword->name . '!';
} else {
    echo $danielhe4rt->username . ', caraio tiozão ce tá liso hein? Vai ter como comprar a ' . $woodenSword->name . ' não!';
}

if ($danielhe4rt->canBuy($silverSword)) {
    echo $danielhe4rt->username . ', você pode comprar a' . $silverSword->name . '!';
} else {
    echo $danielhe4rt->username . ', caraio tiozão tem nem pra espada de madeira e quer a ' . $silverSword->name . ' num fode né!';
}
```

Ir para: [4.2 Construtores e Destrutores](2-Construtores-e-destrutores.md)
