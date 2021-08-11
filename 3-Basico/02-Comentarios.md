# 3.2 - Comentários

Iremos usar um sistema muito interessante para poder nos guiar enquanto programamos. **Comentários** é um dos princípios de qualquer programadeiro que não quer criar algo e esquecer no dia seguinte.

Os comentários não são interpretados quando o código está sendo lido, então você pode usar e abusar dos mesmos pra documentar tudo que você achar necessário.
Observe que nem sempre comentar códigos é bom, mas isso é assunto pra outro momento.

Existem duas formas de comentar no PHP, vamos conhecer as duas e entender quando usar cada uma delas.

### Comentário de linha única

Os comentários de linha única são iniciados com duas barras " **//** " no nosso querido PHP.
Veja o exemplo abaixo:

```php
<?php
// Este é um comentário muito foda q vai explicar tudo abaixo
// Mentira nem vai nada não
echo "He4rtDevs <3";
// Será que isso vai ser interpretado?
// To com fome
```

<center><i>Arquivo encontrado em: exemplos/comentarios1.php</i></center>

Você pode executar o exemplo acima com o seguinte comando:<br>

```bash
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php comentarios1.php
He4rtDevs <3
```

Como podemos observar, não foi mostrado nada fora do esperado. Os comentários são totalmente anulados na hora de qualquer tipo de processamento e só serve de fato para leitura do desenvolvedor.

### Comentário de múltiplas linhas

Para comentar múltiplas linhas, é usado um padrão um pouco diferente do que é acostumado.

- Inicia a linha com **/\*\***
- Para cada nova linha é inserido um novo asterisco **\***
- Para fechar o comentário é inserido <strong>\*/</strong>

Veja o exemplo abaixo:

```php
<?php
/**
 * Script para visualização de comentarios
 * e mostrar o nome do melhor grupo de devs do mundo
 *
 * @author danielhe4rt - hey@danielheart.dev // Opcional
 * @return void // Opcional
 */

echo "He4rtDevs <3";
```

<center><i>Arquivo encontrado em: exemplos/comentarios2.php</i></center>

Podemos ver o resultado novamente na execução abaixo onde não é lido nenhum tipo de comentário.

```bash
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php comentarios2.php
He4rtDevs <3
```

Ir para: [3.3 Tipos de dados](03-Tipos-de-dados.md)
