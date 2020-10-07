# PHP :elephant:

Estudos sobre PHP.

<h1> False, null e empty </h1>
Declare três variáveis, cada uma atribuídas respectivamente aos valores: null, "" e false.
Ao executar a verificação is_null(), somente a primeira variável, atribuída ao valor null, retornará true.<br>
Agora faça a verificação empty() em todas elas e verá que todas retornarão true.<br>
Portanto, o teste is_null() é true quando o valor é EXCLUSIVAMENTE null, <br>enquanto empty() é true quando o valor é tanto null quando vazio "" e quanto false
<br><br>
<h1> Método count()</h1>
Retorna o tamanho de um array.

<h1> Projeto Help Desk</h1>

<h3>Atributo action</h3>
Atributo HTML que determina para onde os dados do formulário serão enviados quando for dado o "submit".

<h3>Métodos de requisição HTTP</h3>
<ul>
  
  <li>
    <h4>GET</h4>
    Método que deve retornar apenas dados, ou seja, recuperar dados do servidor. Se nenhum valor é especificado para o atributo "method" no elemento form, então GET é tomado por padrão. Este método apresenta, na URL, o valor de todos aqueles elementos que haviam algum valor no atributo "name". Portanto, não deve-se utilizar esse método em formulários de login, uma vez que um input do tipo senha e name senha, aparecerá da seguinte maneira na URL: senha=123456. 
  </li>
  
  <li>
    <h4>POST</h4>
    Encaminha ao servidor dados armazenados no corpo do servidor. Método que faz o upload de um arquivo ou envio um formulário ao servidor, para    processamento ou armazenamento 
  </li>
</ul>

<h3>Importando script</h3>
Para importar scripts em diferentes códigos para aproveitar do reúso e manutenção de um código centralizado, pode-se fazer uso dos seguintes comandos:
<ul>
  <li>require</li>
  <li>require_once</li>
  <li>include</li>
  <li>include_once</li>
</ul>

São comandos um tanto redundantes, no entanto, a diferença está no fato de que o "require" faz com que ocorra um erro fatal caso haja algum problema com o script importado, isto impede o carregamento do resto da página. Já com o "include" é justamente o contrário, pois este só apresentará um warning em caso de erro, carregando o resto da página normalmente.
