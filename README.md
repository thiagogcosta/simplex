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

<h3>Tecnologias e Ferramentas</h3>

<ul>
<li><p>HTML</p></li>
<li><p>CSS</p></li>
<li><p>PHP</p></li>
<li><p>Javascript</p></li>
<li><p>Bootstrap</p></li>
<li><p>jQuery </p></li>
<li><p>Editor de texto: Notepad++ </p></li>
<li><p>Editor de texto: Sublime </p></li>
<li><p>Hospedagem: Hostinger++ </p></li>
</ul>

<h3>Guia de utilização da solução do !Complex</h3>

<h4>Maximização</h4>

<p>Maximizar Z = 3*x1 + 5*x2<br></p>

<h4>Expressão</h4>

<blockquote>
<p>3*X + 5*Y</p>
</blockquote>

<h4>Restrições</h4>

<blockquote>
<p>X &lt;=4 <br>
Y &lt;=6 <br>
3*X + 2*Y &lt;=6 <br>
X, Y >= 0 </p>
</blockquote>

<p>Utilize o botão "+" para adicionar campos de textos adicionais para restrições.<br>
Utilize o botão "-" para remover campos de textos adicionais para restrições.<br>
Além disso, há a possibilidade da utilização de "tabs" para a adição automática de restrições.</p>

<p>Clique em "Maximizar"  </p>

<h4>Resultado</h4>

<blockquote>
<p>Z=36</p>
</blockquote>

</hr>

<p>Maximizar Z = 11*X + 12*Y<br></p>

<h4>Expressão</h4>

<blockquote>
<p>11*X + 12*Y</p>
</blockquote>

<h4>Restrições</h4>

<blockquote>
<p>1*X + 4*Y &lt;=1000 <br>
5*X + 2*Y &lt;=30000 <br>
X, Y >= 0 </p>
</blockquote>

<p>Utilize o botão "+" para adicionar campos de textos adicionais para restrições.<br>
Utilize o botão "-" para remover campos de textos adicionais para restrições.<br>
Além disso, há a possibilidade da utilização de "tabs" para a adição automática de restrições.</p>

<p>Clique em "Maximizar"  </p>

<h4>Resultado</h4>

<blockquote>
<p>Z=74444.444444444</p>
</blockquote>

<h4>Minimização</h4>

<p>Minimizar Z = 2*X - 3*Y<br></p>

<h4>Expressão</h4>

<blockquote>
<p>2*X - 3*Y</p>
</blockquote>

<h4>Restrições</h4>

<blockquote>
<p>1*X + 1*Y &lt;=4 <br>
1*X - 1*Y &lt;=6 <br>
X, Y >= 0 </p>
</blockquote>

<p>Utilize o botão "+" para adicionar campos de textos adicionais para restrições.<br>
Utilize o botão "-" para remover campos de textos adicionais para restrições.<br>
Além disso, há a possibilidade da utilização de "tabs" para a adição automática de restrições.</p>

<p>Clique em "Minimizar"  </p>

<h4>Resultado</h4>

<blockquote>
<p>Z=-12</p>
</blockquote>

<p>É exibido o passo a passo das tabelas geradas pelo método simplex. </p>

# Nota de Liberação Simplex versão 1.4

<h3>Introdução</h3>

<p>Este documento provê uma visão geral da versão do aplicativo Simplex. Logo, descreveremos as funcionalidades do aplicativo, bem como seus problemas e limitações conhecidos. Por último são descritas as demandas e os problemas que foram resolvidos para liberação da versão atual.</p>

<h3>1. Nota de release a ser publicado</h3>

* Não possuir número fixo de itens.
* Demonstrar tabela da programação dinâmica.
* Algoritmo Simplex para problemas de maximização.
* Algoritmo Simplex para problemas de minimização.
* Demonstrar o passo a passo de iterações na tabela.
* Não possuir número fixo para variáveis de decisão.
* Não possuir número fixo de restrições.
* Tratamento de erro para modelos com infinitas iterações.

<h3>2. Problemas conhecidos e limitações</h3>

<h4>Limitação</h4>

* As restrições devem ser estritamente menores ou iguais a 0 (<=) para o Simplex.


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
</table>

<table>

<tr>
<td>1</td>
<td>Maximizar</td>
<td>Montar a Tabela Simplex, e possibilitar o usuário a maximizar modelos de simplex com sistemas lineares.</td>
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
<td>Apenas restrições "menores iguais"</td>
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
<td>Tratamento de modelos sem solução</td>
<td>Tratar os erros com modelos sem solução e com iterações infinitas.</td>
<td>Concluído</td>
<td></td>
</tr>
</table>
