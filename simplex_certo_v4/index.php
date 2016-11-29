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
                <div class="col-md-7">Fórmula
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Fórmula</span>
                        <input type="text" class="form-control" placeholder='3 * X + 5 * Y' aria-describedby="basic-addon1" id="inputformula" value="">
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
                <div class="col-md-5">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Intermediários
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="overflow: auto;max-height: 450px;">
                                <div class="panel-body div_intermediarios">

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Resultado Final
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" style="overflow: auto;max-height: 450px;">
                                <div class="panel-body div_completo">

                                </div>
                            </div>
                        </div>
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