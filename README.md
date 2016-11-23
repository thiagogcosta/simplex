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
<li><p>Ruby 2.1.3p242  </p></li>
<li><p>Rails 4.1.6  </p></li>
<li><p>Bootstrap 3.3.5  </p></li>
<li><p>jQuery / AJAX / CoffeeScript 2.2.0 </p></li>
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

<p>É exibido o passo a passo das tabelas geradas pelo método simplex, com número máximo de 20 iterações.  </p>
