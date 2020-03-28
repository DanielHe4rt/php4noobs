<h2 align="center">
  Curso PHP - Variáveis
</h2>

<p>Bem vindo ao módulo de PHP Básico, vamos dar ínicio a nossa aula de variáveis!</p>

<p>Pra começar, todos sabemos que para guardar informação as linguagens de programação utilizam variaveis certo? na maioria das linguagens você precisa especificar o tipo de variável antes de declara-lá, PHP é diferente.
No PHP existe a "tipagem dinâmica", onde você pode criar a variável sem precisar declarar seu tipo(float,string,int) e também você pode alterar o tipo de variável enquanto o programa roda, não importando o tipo anterior.
Antes de alguns exemplos, vamos determinar algumas regras para nomeação de variáveis.</p>

- Toda variável no PHP é declarada por \$ e em seguida o nome da variável.
- O jeito correto e válido para declarar o nome de uma variável no PHP é iniciar por sublinhado também chamado de underscore ou letra, após isso, seguido de qualquer número de letras, números ou sublinhados.
- As variáveis no PHP são case-sensitive, então, $He4rt não é o mesmo que $he4rt.
- O $this é uma variável que não pode ser atribuida, você irá entender o que significa $this nos próximos módulos do curso.

<p>Lembrando que para atribuirmos um valor a uma variável passamos o sinal de ( = ) e o seu valor.</p>
										
```php
<?php
//Mostrando o case sensitive
$He4rt = 'Eu ';
$he4rt = 'amo ';
$he4rT = 'a He4rt ';
$HE4RT = 'Developers';
echo $He4rt . $he4rt . $he4rT . $HE4RT;
?>
```
*Resultado no Navegador*

![Resultado do Primeiro Exemplo](https://i.imgur.com/Y0Fgggq.png)
  


## Observações

- Como vocês podem ver, o PHP por possuir case-sensitive, as variáveis $He4rt,$he4rt,$he4rT e $HE4RT não são a mesma coisa.
- O echo é uma forma de escrevermos na tela, como se fosse um print, lembrando também que o . é uma forma de concatenarmos variaveis e seus valores.
- É preciso sempre utilizar ponto e virgula no final de cada declaração ( ; ), se porventura você esquecer, irá dar erro, na última declaração não é preciso, mas por precaução sempre utilize.
- Lembrando que é sempre bom se antenar as boas práticas, use variáveis que condizem com o código escrito, não utilize nomes como $a, $b, \$c e se torne um programador alfabético.

<p>Como eu expliquei antes, variáveis podem mudar o valor no tempo de execução, ou seja, durante a execução do código, vamos para mais um exemplo!</p>

```php
<?php
$idade = '18 Anos';
echo "Me chamo João e tenho " .$idade . "<br>";
$idade = '19 Anos';
echo "Porém fiz aniversário e agora tenho " .$idade;
?>
```

_Resultado no Navegador_
![Resultado do Segundo Exemplo](https://i.imgur.com/Ov43zEd.png)
