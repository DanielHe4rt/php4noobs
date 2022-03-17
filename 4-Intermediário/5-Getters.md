# 4.5 - Métodos Getters

## O que são?
  Os métodos getters servem para pegar a referência de um valor (geralmente de uma propriedade).
  
## Por que usar?
  Como vimos anteriormente em [4.4 - Modificadores de Acesso](4-Modificadores-de-acesso.md), temos os modificadores de acesso, e nem sempre queremos deixar
  as nossas propriedades e métodos públicos, mas se deixarmos privados como vamos acessar seu valor? podemos usar um getter. Veja o exemplo abaixo
  
  ```php
    class exemplo
    {
    
      private $propriedadePrivada = "Esta propriedade não pode ser alterada diretamente";
      public $propriedadePublica = "Esta propriedade pode ser alterada diretamente";
      
      
      //Esse método retorna o valor da $propriedadePrivada
      public function getterParaAPropriedadePrivada()
      {
        return $this->propriedadePrivada;
      }
    }
  ```
  No exemplo acima nós criamos duas propriedades, uma privada e uma pública. A propriedade pública pode ser lida e ter seu valor alterado, já a propriedade
  privada pode ser lida usando o método ```getterParaAPropriedadePrivada()```, porém não pode ser alterada.
