# 3.9 Combinação/concatenação de Strings

Concatenar significa **juntar as coisas**, no PHP existe um operador que faz isso, é o ponto `.` e é possível utilizar este operador de forma abreviada também, vamos aprender como ele funciona:

### Só concatenando `.`

```php
<?php

$euQuero = 'Eu quero ser um programador' . ' PHP';

echo $euQuero;

//Retorna: "Eu quero ser um programador PHP"
```

### Concatenando de forma abreviada `.=`

```php
<?php

$euQuero = 'Eu quero ser um programador';
$euQuero .= ' PHP';

echo $euQuero;

//Retorna: "Eu quero ser um programador PHP"
```

### Concatenando variáveis `.`

```php
<?php

$euQuero = 'Eu quero ser um programador';
$php = ' PHP';

echo $euQuero . $php;

//Retorna: "Eu quero ser um programador PHP"
```

#### Notas
 
- Algumas linguagens de programação usam o sinal `+`, pra concatenar;

Ir para: [3.10 Operadores de Arrays](10-Operadores-arrays.md)