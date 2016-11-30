<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>!Complex - Not Complex</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

<br>
<br>
<br>
<br>
<br>

        <div class="container jumbotron">
            <div class="row">
                <h2 style="text-align: center;">!Complex - Not Complex</h2>
                <div class="col-md-12">Fórmula
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Fórmula</span>
                        <input type="text" class="form-control" value='' aria-describedby="basic-addon1" id="inputformula" value="">
                    </div>

                    <br>
                    <div class="div_regras">Regras
                        <br>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Variável</span>
                                    <input value="" type="text" class="form-control last_regra valor_regra" placeholder="X" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Tipo</span>
                                    <label style="text-align: center;" class="form-control"><=</label>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Valor</span>
                                    <input type="text" class="form-control regra" value="" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                    </div>


<br>
<br>
<div class="btn_add" role="group" aria-label="...">
  <button type="button" class="btn btn-primary" id="btadd" style='width: 150px;margin-bottom: 20px;'>Adicionar</button>
</div>
<div class="btn-group pull-right" role="group" aria-label="...">
  <button type="button" class="btn btn-success" id="btminimzar">Minimizar</button>
  <button type="button" class="btn btn-success" id="btmaximizar">Maximizar</button>
</div>

                </div>
            </div>
        </div>
		
		<form id="form_simplex_max" action="max.php" method="POST">
		  <input type="hidden" name="json_max" id="json_max" value="aqui">
		  <input type="submit" value="Submit">
		</form>
		
		<form id="form_simplex_min" action="min.php" method="POST">
		  <input type="hidden" name="json_min" id="json_min" value="aqui">
		  <input type="submit" value="Submit">
		</form>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/controle.js"></script>
    </body>
</html>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Regras Versão 1.2</h4>
      </div>
      <div class="modal-body">
            <b>Guia de utilização da solução do !Complex</b><br>
            <br>
            Maximização<br>
            <br>
            Maximizar Z = 11 * X + 12 * Y<br>
            <br>
            <b>Informe os valores separados por espaço</b><br><br>
            <b>Expressão</b><br>
            <br>
            11 * X + 12 * Y<br>
            <b>Restrições</b><br>
            <br>
            1 * X + 4 * Y <= 10000 <br>
            5 * X + 2 * Y <= 30000 <br>
            X , Y >= 0<br>
            Utilize o botão "Adicionar" para adicionar campos de textos adicionais para restrições.<br>
            Utilize o botão "-" para remover campos de textos adicionais para restrições.<br>
            Além disso, há a possibilidade da utilização de "tabs" para a adição automática de restrições. Observação: o campo "valor" precisa estar preenchido<br>
            <br>
            Clique em "Maximizar"<br>
            <br>
            <b>Resultado</b><br>
            <br>
            Z=74444.444444444<br><br>


João Ricardo Ito Messias 53681 - 4 <br>
Leonardo Ademir Tonezi dos Santos 54020 - 1 <br>
Matheus Ferraroni Sanches 53574 - 5 <br>
Thiago Aparecido Gonçalves da Costa 53724 - 1<br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


