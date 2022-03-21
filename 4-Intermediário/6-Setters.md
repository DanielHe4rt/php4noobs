# 4.6 Métodos setters

## O que são?
Setters são métodos usados para alterar valor de propriedades que não podem ser alteradas diretamente.




## Como usar
Como mostrado em [4.5 Getters](5-Getters.md), podemos usar as palavras reservadas do php ```this``` e ```self``` para manipular propriedades privadas. Antes vimos como ler o valor, agora vamos ver como alterar o valor, Veja o exemplo abaixo.

>### não estático:
```php
    class Exemplo
    {
        private $propriedadePrivada = "Esta propriedade não pode ser alterada ou lida diretamente";

        //Este método define um valor para $propriedadePrivada
        public function SetterParaPropriedadePrivada($novoValor)
        {
            $this->propriedadePrivada = $novoValor;
        }
    }
```

>### estático:
```php
    class Exemplo
    {
        private static $propriedadePrivada = "Esta propriedade não pode ser alterada ou lida diretamente";

        //Este método define um valor para $propriedadePrivada
        public static function SetterParaPropriedadePrivada(string $novoValor)
        {
            self::$propriedadePrivada = $novoValor;
        }
    }
```
Dessa maneira podemos alterar o valor de uma propriedade sem permitir sua leitura (caso você queira permitir a leitura e alteração de valor, é recomendado o uso dos modificadores de acesso ```public``` ou ```protected``` no lugar de getters e setters).
