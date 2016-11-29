<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
//****************************************************MAXIMIZAÇÃO*****************************************


$json = $_POST['json_min'];

//echo $json;

$json = json_decode($json);

$arrays = (array) $json;

$table = array();

	$parcial = [];
foreach ($arrays as $value){
	array_push($table,(array) $value);
}

//função que verifica a linha se está nula
function null_line($tabela, $line_pivo, $chave_menor){
	$contador = 0;
	for($i=0; $i < count($tabela); $i++){
		if($tabela[$i][$chave_menor] != 0 && $i != $line_pivo){
			$contador++;
		}
	}
	return $contador;
}
	
while(min(end($table)) < 0 ){
	
	
	//acho a chave do menor
	$table_base = end($table);
	$chave_menor = array_search(min(end($table)), end($table));
	reset($table);	
	
	//Pego o menor valor da tabela para depois ficar mais fácil de achar a linha do pivô
	$menor_div = 0;
	for($i=0; $i < count($table) -1; $i++){
		if(max(current($table)) > $menor_div){
			$menor_div = max(current($table));
		}
		$menor_div = max(current($table));
		next($table);
	}
	reset($table);	
	
	//faço a divisão da base pela coluna do menor número e acho a linha do pivô
	for($i=0; $i < count($table) -1; $i++){
		
		if(current($table)[$chave_menor] != 0 && current($table)["B"] != 0){
			//Dividir os elementos da última coluna pelos correspondentes elementos positivos da coluna da variável que vai entrar na base
			if(((current($table)["B"] / current($table)[$chave_menor]) <= $menor_div) && current($table)[$chave_menor] > 0){
				$menor_div = current($table)["B"] / current($table)[$chave_menor];
				$key_pivo  = array_search(current($table), $table); //pode dar erro aqui
			}//se não entrar ali a solução é ilimitada
		}
		next($table);
	}
	
	echo $menor_div;
	
	//divido cada elemento da linha do pivô pelo pivô
	$pivo = $table[$key_pivo][$chave_menor];

		foreach ($table[$key_pivo] as &$value) {
			if($value != 0 && $pivo != 0){
				$value = $value / $pivo;
			}
		}
		unset($value);
	
	//iteração pra zerar as colunas
		
	while(1){
		for($i=0; $i < count($table); $i++){
			if($table[$i][$chave_menor] != 0 && $i != $key_pivo){
				//echo null_line($table,$key_pivo,$chave_menor);
				//Crio um objeto paralelo pra eu conseguir andar com os dois arrays ao mesmo tempo, já que não sei o nome das chaves
				$iterator = new MultipleIterator;
				$iterator->attachIterator(new ArrayIterator($table[$i]));
				$iterator->attachIterator(new ArrayIterator($table[$key_pivo]));
				
				//vetor aux pra atualizar os valores na tabela
				$vAux = array();
				
				foreach ($iterator as $values) {
					$values[0] = $values[1] * ($table[$i][$chave_menor] * -1)+ $values[0];
					array_push($vAux,$values[0]);
				}
				
				$contAux = 0;
				foreach ($table[$i] as &$value) {
					$value = $vAux[$contAux];
					$contAux++;
				}
				unset($value);	
				$parcial[] = $table;		
				
				?>
				<div class="container">
				  <h2><center>Tabela Parcial</center></h2>            
				  <table class="table">
					<thead>
					  <tr>
						<?php
							foreach (array_keys($table[0]) as $value){
								?><td><?php echo $value?></td><?php 
							}
						?>
					  </tr>
					</thead>
					<tbody>
						<?php
						for($i=1; $i<count($table); $i++){
						?>
						<tr>
						<?php
							foreach ($table[$i] as $value){
								?><td><?php echo $value?></td><?php 
							}
						?>
						</tr>
						<?php
						}
						?>
					</tbody>
				  </table>
				</div>
				
				<?php
			}
		}
		if(null_line($table,$key_pivo,$chave_menor) == 0){
			//print_r($table);
			break;
		}
		//print_r($table); bom para printar a tabela;
		break;
	}
	
	
}
?>	
<div class="container">
  <h2><center>Tabela Final</center></h2>            
  <table class="table">
    <thead>
      <tr>
        <?php
			foreach (array_keys($table[0]) as $value){
				?><td><?php echo $value?></td><?php 
			}
		?>
      </tr>
    </thead>
    <tbody>
		<?php
		for($i=1; $i<count($table); $i++){
		?>
		<tr>
		<?php
			foreach ($table[$i] as $value){
				?><td><?php echo $value?></td><?php 
			}
		?>
		</tr>
		<?php
		}
		?>
    </tbody>
  </table>
</div>
<?php
	//echo json_encode(array("final"=>$table,"intermediario"=>$parcial));

?>
