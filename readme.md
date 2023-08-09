# Inicio de Projeto

### Aula 1 - consistiu na instalação do Composer, e configuraçãoes gerais
 - Composer init
 - Configuraçòes iniciais do Composer
 - json-composer -> Foi colocado como a versão >=7.2.0
 - Criação da Class Search
 - Utilizando {namespace}
 - Criação da lógica para buscar o cep requerido
 - Criação do da variável `$zipCode` -> No caso essa ideia de regex (é algo que eu preciso estudar sobre para enteder o que foi passado e a lógica do mesmo, no entando eu entendi o que estava sendo passado nesse trecho de código).
 - O Objeto `exemplo.php` foi feito e ao adentrar no código, tivemos que fazer o apontamento do `namespace` novamente, no entanto, agora como seguinte nome `use Wead\DigitalCep\Search;`.
 - Houve um erro, quando invocamos o objeto `exemplo`, e por isso tivemos que fazer uma inserção no `composer.json` dos PSR-0 e PSR4. 
 - Foi inserido também no Objeto `exemplo.php` --> no cabeçalho da aplicação o `require_once 'vendor/autoload.php';`, onde qualquer alteração que fizermos nos arquivos/composer.json é necessário informar isso ao COMPOSER, o mesmo já faz os mapeamentos das classes. Inclusive caso o seu não esteja funcionando mesmo apontando para `require_once 'vendor/autoload.php` no seu projeto, podemos usar o seguinte código no terminal em nossa aplicação `composer dump-autoload` -> Essa linha de comando vai lhe ajudar, confie 😁😁😁..

<div align="center">
Resultado sobre a consulta:<br>
<img src="/images-project/Aula-01.png"></div>


## Aula 2 Testes Unitários com PHPUnit


