# Introdução a Orientação a Objetos

## O que é ?

A OO como se costuma chamar, é um dos paradigmas de programação surpotado pelo PHP.

### Aqui estão alguns exemplos de paradigmas:

- Procedural;
- Funcional;
- Lógico;
- **Orientação a Objetos;**
- Concorrente;
- Reativo.

## Certo, mas o que são paradigmas de programação ?

Bom, na programação paradigmas são formas de se fazer algo, um padrão, uma conduta.
No PHP se costuma escrever códigos usando os paradigmas Procedural e/ou Orientado a Objetos.
Mesmo que na teoria a OO foi o sucessor do paradigma procedural, na prática é comum misturar os dois.

### Um pouco sobre estes paradigmas:

- O Procedural consiste em:
  - Chamada de procedimenmtos para manipulação de dados, interpretação sequencial etc.
- Orientação a Objetos:
  - Estrutura de dados com atributos e métodos.
    Na OO é necessário pensar diferente, fazendo abstrações da realidade para o código(Neste caso transformando coisas e objetos do mundo real em Classes no PHP).

# Orientação a Objetos de forma bem resumida:

Em OO a estrutura do dado possui métodos(funções) dentro deles, ou seja o dado é quem tem seus respectivos métodos e atributos.
Diferente do procedural onde se chama funções para manipulação de dados já existentes;

# Pilares da Orientação a Objeto:

- Abstração:

  - Entidade: A partir de uma observação, "pegar" um objeto do mundo real e entender como traduzir este objeto para o seu código;
  - Identidade: Atribuição de uma identidade única a cada objeto originado da entidade;
  - Atributos: Características;
  - Métodos: Ações a serem realizadas.

- Encapsulamento:

  - Ter detalhes de implementação escondidos e mostrar somente quando necessário a partir dos "métodos mágicos" (conteúdo para os próximos capítulos).
  - Determinar o que será enxergado e o que não será.
    O encapsulamento portanto é uma forma de dar visibilidade(public, private, protected) para esses atributos e métodos de acordo com as nossas necessidades.

- Herança:

  - É basicamente reaproveitamento de código. Objetos(Classes) que herdam de outros, e/ou um conjunto de objetos ligados que geram outro determinado objeto.
  - Ou seja, a partir da composição de objetos mais simples gerar
    objetos mais complexos.

- Polimorfismo: Multiplas formas
  - Atribuição de conceitos concretos a outros mais genéricos.
  - Exemplo:
    - Objeto carro pode apontar hora para o objeto ferrari, hora outra para o objeto Uno.

## Classe vs Objeto:

- class: Estrutura que definirá seus objetos personalizados

  - Anatomia: `<?php class Nome { //corpo }`
  - Membros: - Atributos - Dados - Comportamentos - Métodos(funções) > Para acessar um membro use '->' ou '::'(Falaremos disso mais a frente);
    > Basicamente a classe define um tipo ou uma estrutura de dados, tipo este de acordo com suas necessidades.
        Uma classe representa no código uma abstração da realidade. É trazer conceitos da vida real para dentro do seu software

- Objeto: Toda instância de uma classe é um objeto mas nem todo objeto é uma instância.
  - Quando um dado é gerado a partir de uma classe, este dado é chamado de objeto

### Conclusão:

**Sim no começo, ao se deparar a primeira vez com OO é um pouco confuso, mas nada como a prática e a mão na massa para deixar tudo mais claro. Os próximos tópicos irão te levar a isso.
Bons estudos !!**

Ir para: [4.1 Classes](1-Classes.md)
