# Interfaces
Neste tópico abordaremos o assunto do que são interfaces no PHP e como implementá-las

## O que são interfaces? 

<br>

Bom, para entendermos interfaces, vamos pegar uma definição da própria página do PHP:

> Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados.

<br>

***Mas então, o que isso significa?*** 
  
  - Significa que interfaces são nada mais, nada menos do que modelos de métodos que podemos implementar em uma classe 
  (ou até mesmo estende-lá em outra interface como veremos mais a seguir), e que ao fazer essa implementação a classe passa a ser obrigada à conter os métodos declarados 
  na interface, resultando em um erro caso não seja feito;
  - Em outras palavras, podemos entender interfaces como um contrato, a partir do momento que você assina esse contrato (implementa ele), você passa a ser obrigado a 
  seguir as especificações previstas nele, o descumprimento delas seria punitivo (que no nosso caso seria um erro fatal do código).

  
 A partir desse entendimento podemos seguir para o próximo assunto :arrow_down: <br>
 
 ## Como implementar uma interface?
 
 <br>
 
  Ao trabalharmos com interfaces, usaremos principalmente duas palavras reservadas próprias para o seu uso:  ```interface``` e ```implements``` , onde:
  
  - **interface:** Palavra reservada para definir a criação de uma interface;
  - **implements:** Operador usado para realizar a implementação de interfaces;

  Veremos sobre sua síntaxe no código abaixo: 
  
```php
  // sintaxe para a criação:
  interface nome_interface 
  {
      // declaração de métodos
  }
  
  // sintaxe para a implementação:
  class nome_classe implements nome_interface
  {
      // métodos e atributos da classe
  }
```
<br>

  Agora para você entender melhor sobre seu uso, daremos alguns exemplos de como utilizar:
  
- **Implementação correta de uma interface:**

```php
  // criamos a interface HelloWorld:
  interface HelloWorld 
  {
	  // definimos que as classes que implementarem essa interface, deverá conter o método público helloWorld:
	    public function helloWorld();
  }


  // criamos a classe Saudar e definimos que ela irá implementar a interface HelloWorld:
  class Saudar implements HelloWorld
  {
	  public function helloWorld()
	  {
		  echo "Olá mundo!";
	  }
  }

  // instanciamos um objeto através da classe criada e o atribuimos para a váriavel cumprimentos:
  $cumprimentos = new Saudar();
  // acessamos e executamos o método recebido ao objeto:
  $cumprimentos->helloWorld();

```
  O output do código acima será: ```Olá mundo!```
  
  <br>
  
- **Implementação errada de uma interface:**
    
```php
  // criamos a interface HelloWorld:
    interface HelloWorld 
    {
	    // definimos que as classes que implementarem essa interface, deverá conter o método público helloWorld:
	       public function helloWorld();
    }

  // criação da classe Somar e definimos que ela irá implementar a interface HelloWorld:
    class Somar implements HelloWorld
    {
	      public function somar($n1, $n2)
	      {
		        return $n1 + $n2;
	      }
    }

  // instanciamos um objeto através da classe criada e o atribuimos para a váriavel metodosMatematicos:
    $metodosMatematicos = new Somar();
  // acessamos e executamos o método recebido ao objeto:
    echo $metodosMatematicos->somar(1,2);

```

  Note que agora nosso código possui dois erros. O primeiro erro é semântico, onde estamos implementando uma interface com o método helloWorld em uma classe criada para o intuito de realizar somas, onde não faria tanto sentido a classe possuir esse método. E o segundo erro é que definimos a implementação da interface em uma classe que não contém o método definido na mesma, devido a isso é gerado um erro fatal pelo interpretador que impossibilita de executar o programa, tendo o seguinte output: ``` Fatal error: Class Somar contains 1 abstract method and must therefore be declared abstract or implement the remaining methods... ```.
  
<br>

- **Implementação de duas interfaces:**

Para implementarmos duas ou mais interfaces em uma mesma classe usaremos uma vírgula ```,``` para separarmos elas:

```php
  // criamos a interface Nome e definimos os métodos para ela:
    interface Nome 
    {
        public function setNome($nome);
        public function getNome();
    }

  // criamos a interface Idade e definimos seu métodos:
    interface Idade 
    {
        public function setIdade($idade);
        public function getIdade();
    }

  // criamos a classe Pessoa e definimos que ela deverá conter os métodos definidos nas interfaces Nome e Idade:
    class Pessoa implements Nome, Idade 
    {
        private $nome;
        private $idade;
        
        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public static function apresentarPessoa($pessoa)
        {
            echo "Olá, eu me chamo {$pessoa->getNome()} e tenho {$pessoa->getIdade()} anos.";
        }
    }

  // instanciamos um novo objeto através da classe Pessoa:
    $novaPessoa = new Pessoa();
  // atribuimos valores aos seus atributos com os setters:
    $novaPessoa->setNome('João');
    $novaPessoa->setIdade(36);
  // acessamos e executamos o método estático para apresentação de pessoas:
    Pessoa::apresentarPessoa($novaPessoa);
```

  A execução do código acima irá gerar o seguinte output: ```Olá, eu me chamo João e tenho 36 anos.```

<br>

 - **Implementação interfaces estendíveis:**

 Interfaces estendíveis são interfaces que recebem métodos por herança de outra através do operador ```extends``` (usado também em heranças de classes), veja um exemplo:

```php
  // definimos a interface CalculosBasicos e seus métodos:
    interface CalculosBasicos
    {
        public function somar($n1, $n2);
        public function subtrair($n1, $n2);
    }

  // definimos a interface Matematica, seu métodos e que ela será um interface estendida de CalculosBasicos,
  // a partir de agora a classe que implementar Matematica deverá possuir tanto métodos definidos na própria
  // interface, quanto métodos definidos em Calculos Basicos;
    interface Matematica extends CalculosBasicos
    {
        public function calcularHipotenusa($cateto1, $cateto2);
    }

  // definimos uma classe Matematico que implementa a interface estendível Matematica:
    class Matematico implements Matematica
    {
        public function somar($n1, $n2)
        {
            return $n1 + $n2;
        }

        public function subtrair($n1, $n2)
        {
            return $n1 - $n2;
        }

        public function calcularHipotenusa($cateto1, $cateto2)
        {
          // calculamos a hipotenusa e devolvemos seu valor
            $hipotenusa = ($cateto1**2 + $cateto2**2)**0.5;
            return $hipotenusa;
        }
    }
  
  // instanciamos um objeto e acessamos seu atributos
    $professor = new Matematico();
    echo $professor->somar(2,4)."-"; // 6
    echo $professor->subtrair(12, 10)."-"; // 2
  // usamos o método number_format para mostrar apenas 2 casas decimais do resultado
    echo number_format($professor->calcularHipotenusa(12, 15), 2); // 19.21

```

  Ao rodar o código acima, deverá sair o seguinte output: ```6-2-19.21```.

  <br>

  - **Usando constantes em interfaces:**

  Apesar de não ser possível definir atributos para uma classe através de uma interface, o PHP permite a criação de constantes nessas estruturas, e caso essa constante não seja redeclarado, classes que implementarem essa interface também vão conseguir acessar essa constante, exemplo:

```php
  interface Exemplo 
  {
    const testando = 'Valor em Exemplo';
  }

  echo Exemplo::testando.' - ';

  class ClasseTeste implements Exemplo
  {
    // ...
  }

  echo ClasseTeste::testando;
```

O código acima terá o output: ```Valor em Exemplo - Valor em Exemplo```.
