# simplex
<h3>Repositório contendo o trabalho de Pesquisa Operacional - !Complex </h3>
*version 1.2*</br>

João Ricardo Ito Messias                53681 - 4 </br>
Leonardo Ademir Tonezi dos Santos       54020 - 1 </br>
Matheus Ferraroni Sanches               53574 - 5 </br>
Thiago Aparecido Gonçalves da Costa     53724 - 1

<h3>Projeto de Pesquisa Operacional</h3>
 * 6º Semestre de Bacharelado em Ciência da Computação
  
<p>Implementação do método simplex em Javascript para resolução de sistemas lineares, a aplicação resolve problemas de maximização e minimização para expressões e restrições menores ou iguais a zero (&lt;=).</p>

<h3>Ferramentas</h3>

<ul>
<li><p>Javascript</p></li>
<li><p>Bootstrap 3.3.5  </p></li>
<li><p>jQuery </p></li>
</ul>

<h3>Guia de utilização da solução do Simplex</h3>

<p>Minimizar Z = 2x1 - 3x2<br></p>

<h4>Expressão</h4>

<blockquote>
<p>2x1 - 3x2</p>
</blockquote>

<h4>Restrições</h4>

<blockquote>
<p>x1 + x2 &lt;=4 <br>
x1 - x2 &lt;=6 <br>
x1, x2 >= 0 </p>
</blockquote>

<p>Utilize o botão "+" para adicionar campos de textos adicionais para restrições.<br>
Utilize o botão "-" para remover campos de textos adicionais para restrições.<br>
Além disso, há a possibilidade da utilização de "tabs" para a adição automática de restrições.</p>

<p>Clique em "Minimizar"  </p>

<h4>Resultado</h4>
<p>É exibido o passo a passo das tabelas geradas pelo método simplex. </p>

# Nota de Liberação Simplex versão 1.4

<h3>Introdução</h3>

<p>Este documento provê uma visão geral da versão do aplicativo Simplex e algoritmo da Mochila que está sendo liberada. Aqui descreveremos as funcionalidades do aplicativo, bem como seus problemas e limitações conhecidos. Por último são descritas as demandas e os problemas que foram resolvidos para liberação da versão atual.</p>

<h3>1. Nota de release a ser publicado</h3>

* Não possuir número fixo de itens.
* Demonstrar tabela da programação dinâmica.
* Algoritmo Simplex para problemas de maximização.
* Algoritmo Simplex para problemas de minimização.
* Demonstrar o passo a passo de iterações na tabela.
* Tabela de Sensibilidade.
* Não possuir número fixo para variáveis de decisão.
* Não possuir número fixo de restrições.
* Tratamento de erro para modelos sem solução.
* Tratamento de erro para modelos com infinitas iterações.

<h3>2. Problemas conhecidos e limitações</h3>

<h4>Limitação</h4>

* Os pesos devem ser inteiros e diferentes para o algoritmo.
* As restrições devem ser estritamente menores ou iguais a 0 (<=) para o Simplex.
* O tempo de latência pode variar, sendo algumas vezes alto ou baixo.


<h3>3. Datas Importantes</h3>
<p>Segue abaixo as datas importantes do desenvolvimento:</p>

<table border="2">
<tr>
<td><b>Data</b></td>
<td><b>Evento</b></td>
</tr>
<tr>
<td>31/10/2016</td>
<td>Resolver Problemas de Programação Linear</td>
</tr>
<tr>
<td>04/11/2016</td>
<td>Interpretação econômica dos resultados</td>
</tr>
<tr>
<td>06/11/2016</td>
<td>Interpretação completa dos resultados</td>
</tr>
<tr>
<td>08/11/2016</td>
<td>Apresentar todas as iterações do Simplex</td>
</tr>
<tr>
<td>09/11/2016</td>
<td>Início de Criação dinâmica de um modelo de aplicativo</td>
</tr>
</table>


<h3>Compatibilidade</h3>
<p>Segue abaixo os requisitos</p>
<table border="2">
<tr>
<td><b>Requisitos</b></td>
<td><b>Ferramentas</b></td>
</tr>
<tr>
<td>Navegadores</td>
<td>Mozila Firefox, Chrome, Internet Explorer</td>
</tr>
<tr>
<td>Sistema Operacional</td>
<td>Ubuntu, RedHat, Windows, Mac</td>
</tr>
</table>
<p>Tecnologias</p>
<table border="2">
<tr>
<td><b>Tecnologias</b></td>
<td><b>Ferramentas</b></td>
</tr>
<tr>
<td>Front-End</td>
<td>HTML, CSS</td>
</tr>
<tr>
<td>Back-End</td>
<td>---</td>
</tr>
<tr>
<td>Framework WEB</td>
<td>---</td>
</tr>
<tr>
<td>IDE</td>
<td>---</td>
</tr>
<tr>
<td>Editor de Texto</td>
<td>---</td>
</tr>
<tr>
<td>Design Pattern</td>
<td>---</td>
</tr>
<tr>
<td>Servidor WEB</td>
<td>---</td>
</tr>
</table>

<h3>5. Procedimento E ALTERAÇAO DE CONFIGURAÇÃO do Ambiente</h3>

<p>Para alteração no ambiente é necessário possuir o Git e o kit de ferramenta do Heroku instalados, efetuar o login como administrador do repositório no Heroku e adicionar o repositório remoto com o comando “Heroku Create”. Após as etapas de configurações serem concluídas basta realizar um “push” da branch da aplicação no Git diretamente para o repositório remoto do Heroku. Exemplo: “git push heroku master”.</p>

<h3>6. Atividades Realizadas no Período</h3>
<p>Nessa liberação foram contemplados os seguintes itens:</p>

<table border="2">
<tr>
<td><b>Cód</b></td>
<td><b>Título</b></td>
<td><b>Tarefa</b></td>
<td><b>Situação</b></td>
<td><b>OBS</b></td>
</tr>

<tr>
<td>1</td>
<td>Calcular</td>
<td>Montar a Tabela programação dinâmica, e possibilitar o usuário a calcular o algoritmo da mochila.</td>
<td>Concluído</td>
<td>Apenas números inteiros e com pesos diferentes</td>
</tr>

<tr>
<td>2</td>
<td>Adição de itens</td>
<td>Possibilitar o usuário a adicionar inputs para os itens.</td>
<td>Concluído</td>
<td></td>
</tr>

<tr>
<td>3</td>
<td>Tabela de Programação Dinâmica</td>
<td>Demonstrar ao usuário a tabela da programação dinâmica.</td>
<td>Concluído</td>
<td></td>
</tr>

<tr>
<td>1</td>
<td>Maximizar</td>
<td>Montar a Tabela Simplex, e possibilitar o usuário a maximizar modelos de simplex com sistemas lineares.</td>
<td>Concluído</td>
<td>Apenas números inteiros e com pesos diferentes</td>
</tr>

<tr>
<td>1</td>
<td>Calcular</td>
<td>Montar a Tabela programação dinâmica, e possibilitar o usuário a calcular o algoritmo da mochila.</td>
<td>Concluído</td>
<td>Apenas restrições "menores iguais"</td>
</tr>

<tr>
<td>2</td>
<td>Minimizar</td>
<td>Montar a Tabela Simplex, e possibilitar o usuário a minimizar modelos de simplex com sistemas lineares.</td>
<td>Concluído</td>
<td>Apenas restrições "menores iguais"</td>
</tr>

<tr>
<td>3</td>
<td>Adição de Restrições</td>
<td>Possibilitar o usuário a adicionar inputs para maiores números de restrições.</td>
<td>Concluído</td>
<td></td>
</tr>

<tr>
<td>4</td>
<td>Remoção de Restrições</td>
<td>Possibilitar o usuário a remover inputs para menores números de restrições.</td>
<td>Concluído</td>
<td></td>
</tr>

<tr>
<td>5</td>
<td>Demonstrar passo-a-passo</td>
<td>Demonstrar ao usuário as alterações na tabela causada pelas iterações do método simplex.</td>
<td>Concluído</td>
<td></td>
</tr>

<tr>
<td>6</td>
<td>Tabela de sensibilidade</td>
<td>Demonstrar ao usuário a tabela de sensibilidade.</td>
<td>Concluído</td>
<td></td>
</tr>

<tr>
<td>7</td>
<td>Tratamento de modelos sem solução</td>
<td>Tratar os erros com modelos sem solução e com iterações infinitas.</td>
<td>Concluído</td>
<td></td>
</tr>
</table>
