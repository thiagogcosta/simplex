<?php
//****************************************************MAXIMIZAÇÃO*****************************************
//$json = '{"F1":{"X":1,"Y":0,"F1":1,"F2":0,"F3":0,"B":4},"F2":{"X":0,"Y":1,"F1":0,"F2":1,"F3":0,"B":6},"F3":{"X":3,"Y":2,"F1":0,"F2":0,"F3":1,"B":18},"-z":{"X":-3,"Y":-5,"F1":0,"F2":0,"F3":0,"B":0}}';




$json = $_POST['json'];
$json = json_decode($json);

$arrays = (array) $json;

$table = array();

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
			if((current($table)["B"] / current($table)[$chave_menor]) <= $menor_div){
				$menor_div = current($table)["B"] / current($table)[$chave_menor];
				$key_pivo  = array_search(current($table), $table); //pode dar erro aqui
			}
		}
		next($table);
	}
	
	//divido cada elemento da linha do pivô pelo pivô
	$pivo = $table[$key_pivo][$chave_menor];
	
		foreach ($table[$key_pivo] as &$value) {
			if($value != 0 && $pivo != 0){
				$value = $value / $pivo;
			}
		}
		unset($value);
	
	//print_r($table);
	
	//iteração pra zerar as colunas

	$parcial = [];
	while(true){
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
			}

		}
		if(null_line($table,$key_pivo,$chave_menor) == 0){
			break;
		}
		//print_r($table); bom para printar a tabela;
	}
	
	
}

	echo json_encode(array("final"=>$table,"intermediario"=>$parcial));

?>