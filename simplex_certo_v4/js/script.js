
$("#form_simplex_max").hide();
$("#form_simplex_min").hide();

$("#btminimzar").click(function(){
    minimzar();
});

$("#btmaximizar").click(function(){
    maximizar();
});



var formula = null;

function attFormula(){
    formula = $("#inputformula").val();
}

function isLetter(str) {
  a = str.length === 1 && str.match(/[a-z]/i);
  if(a==null) return false;
  return true;
}

function minimzar(){



    variaveis = [];
    tipos = [];
    regras = [];
    letras_encontradas = [];
    tabela = [];
    variaveis = [];
    tipos = [];
    regras = [];
    letras_encontradas = [];
    tabela = [];
    attFormula();
    $(".regra").each(function(e){
        regras.push($($(".regra")[e]).val());
    })
    $(".tipo_regra").each(function(e){
        tipos.push($($(".tipo_regra")[e]).val().split(" "));
    })

    contador = 0;
    $(".valor_regra").each(function(e){
        variaveis.push($($(".valor_regra")[e]).val().split(" "));
        variaveis[contador].push("+","1","*","F"+(contador+1));
        contador++;
    })


    for (var i = 0, len = formula.length; i < len; i++) {
        if(formula[i]!=" ")
            if(isLetter(formula[i])){
                if(letras_encontradas.indexOf(formula[i])<0)
                    letras_encontradas.push(formula[i]);
            }
    }

    if(variaveis[variaveis.length-1][0]==""){
        variaveis.pop();
    }

    formula = formula.split(" ");
    //console.log(formula,variaveis,tipos,regras,contador)

    var qtd_iii = letras_encontradas.length+contador+1;


    for(i=1;i<contador+1;i++){
        tabela["F"+i] = [];
        for(j=0;j<letras_encontradas.length;j++){ // x,y
            v_coloca=0;
            for(k=0;k<variaveis[i-1].length;k++){
                if(variaveis[i-1][k]==letras_encontradas[j]){
                    k-=2;
                    v_coloca = variaveis[i-1][k];
                    if(k>0){
                        k--;
                        if(variaveis[i-1][k]=="-")
                        v_coloca = "-"+v_coloca;
                    }

                    v_coloca = parseInt(v_coloca);
                    break;
                }

            }
            tabela["F"+i][letras_encontradas[j]] = v_coloca;
        }
        for(j=1;j<contador+1;j++){ //f1,f2
            v_coloca=0;
            for(k=0;k<variaveis[i-1].length;k++){
                if(variaveis[i-1][k]==("F"+j)){
                    v_coloca = 1;
                }
                v_coloca = parseInt(v_coloca);
            }
            tabela["F"+i]["F"+j] = v_coloca;
        }
        //regra
        tabela["F"+i]["B"] = parseInt(regras[i-1]);

        tabela["F"+i].length = qtd_iii;
    }




    tabela["Z"] = [];
    for(j=0;j<letras_encontradas.length;j++){ // x,y
        valor_a_colocar = -404;
        for(i=0;i<formula.length;i++){
            if(formula[i]==letras_encontradas[j]){
                i-=2;
                valor_a_colocar = formula[i];

                if(i>0){
                    i--;
                    if(formula[i]=="-")
                    valor_a_colocar = "-"+valor_a_colocar;
                }

                valor_a_colocar = parseInt(valor_a_colocar);
                break;
            }
        }
        tabela["Z"][letras_encontradas[j]] = valor_a_colocar;
    }
    for(j=1;j<contador+1;j++){ //f1,f2
        tabela["Z"]["F"+j] = 0;
    }
    //regra
    tabela["Z"]["B"] = 0;
    tabela["Z"].length = qtd_iii;

    tabela.length = contador+1;

    

    //console.log(tabela);
    tabela = $.extend({}, tabela);
    for (var key in tabela) {
        tabela[key] = ($.extend({},tabela[key]));
    }
    var json = JSON.stringify(tabela);
	console.log(json);
	
    $.each(tabela, function(key, value){
        $.each(value, function(key2, value2){
            //console.log(key+"_"+key2+"_"+value2);
        });
    });

    menor_valor = 0;
    menor_elemento = 0;
    i = 0;
    $.each(tabela.Z, function(key, value){
        if(i++==0){
            menor_valor = value;
            menor_pos = key;
        }else{
            if(value<menor_valor){
                menor_valor = value;
                menor_pos = key;
            }
        }
    });
	
	$("#json_min").val(json);
	$("#form_simplex_min").submit();
	
	
	

    /*$.ajax({
        method: "POST",
        url: "min.php",
        data: { json: json}
    }).done(function( msg ) {
        msg = JSON.parse(msg);
        preparaTabelas_min(msg);
	   //window.location.href = "min.php";
    });*/

}


variaveis = [];
tipos = [];
regras = [];
letras_encontradas = [];
tabela = [];
function maximizar(){
    variaveis = [];
    tipos = [];
    regras = [];
    letras_encontradas = [];
    tabela = [];
    variaveis = [];
    tipos = [];
    regras = [];
    letras_encontradas = [];
    tabela = [];
    attFormula();
    $(".regra").each(function(e){
        regras.push($($(".regra")[e]).val());
    })
    $(".tipo_regra").each(function(e){
        tipos.push($($(".tipo_regra")[e]).val().split(" "));
    })

    contador = 0;
    $(".valor_regra").each(function(e){
        variaveis.push($($(".valor_regra")[e]).val().split(" "));
        variaveis[contador].push("+","1","*","F"+(contador+1));
        contador++;
    })


    for (var i = 0, len = formula.length; i < len; i++) {
        if(formula[i]!=" ")
            if(isLetter(formula[i])){
                if(letras_encontradas.indexOf(formula[i])<0)
                    letras_encontradas.push(formula[i]);
            }
    }

    if(variaveis[variaveis.length-1][0]==""){
        variaveis.pop();
    }

    formula = formula.split(" ");
    //console.log(formula,variaveis,tipos,regras,contador)

    var qtd_iii = letras_encontradas.length+contador+1;


    for(i=1;i<contador+1;i++){
        tabela["F"+i] = [];
        for(j=0;j<letras_encontradas.length;j++){ // x,y
            v_coloca=0;
            for(k=0;k<variaveis[i-1].length;k++){
                if(variaveis[i-1][k]==letras_encontradas[j]){
                    k-=2;
                    v_coloca = variaveis[i-1][k];
                    if(k>0){
                        k--;
                        if(variaveis[i-1][k]=="-")
                        v_coloca = "-"+v_coloca;
                    }

                    v_coloca = parseInt(v_coloca);
                    break;
                }

            }
            tabela["F"+i][letras_encontradas[j]] = v_coloca;
        }
        for(j=1;j<contador+1;j++){ //f1,f2
            v_coloca=0;
            for(k=0;k<variaveis[i-1].length;k++){
                if(variaveis[i-1][k]==("F"+j)){
                    v_coloca = 1;
                }
                v_coloca = parseInt(v_coloca);
            }
            tabela["F"+i]["F"+j] = v_coloca;
        }
        //regra
        tabela["F"+i]["B"] = parseInt(regras[i-1]);

        tabela["F"+i].length = qtd_iii;
    }




    tabela["Z"] = [];
    for(j=0;j<letras_encontradas.length;j++){ // x,y
        valor_a_colocar = -404;
        for(i=0;i<formula.length;i++){
            if(formula[i]==letras_encontradas[j]){
                i-=2;
                valor_a_colocar = formula[i];

                if(i>0){
                    i--;
                    if(formula[i]=="-")
                    valor_a_colocar = "-"+valor_a_colocar;
                }

                valor_a_colocar = parseInt(valor_a_colocar)*-1;
                break;
            }
        }
        tabela["Z"][letras_encontradas[j]] = valor_a_colocar;
    }
    for(j=1;j<contador+1;j++){ //f1,f2
        tabela["Z"]["F"+j] = 0;
    }
    //regra
    tabela["Z"]["B"] = 0;
    tabela["Z"].length = qtd_iii;

    tabela.length = contador+1;

    

    //console.log(tabela);
    tabela = $.extend({}, tabela);
    for (var key in tabela) {
        tabela[key] = ($.extend({},tabela[key]));
    }
    var json = JSON.stringify(tabela);
	console.log(json);
	
    $.each(tabela, function(key, value){
        $.each(value, function(key2, value2){
            //console.log(key+"_"+key2+"_"+value2);
        });
    });

    menor_valor = 0;
    menor_elemento = 0;
    i = 0;
    $.each(tabela.Z, function(key, value){
        if(i++==0){
            menor_valor = value;
            menor_pos = key;
        }else{
            if(value<menor_valor){
                menor_valor = value;
                menor_pos = key;
            }
        }
    });

	$("#json_max").val(json);
	$("#form_simplex_max").submit();
	
    /*$.ajax({
        method: "POST",
        url: "max.php",
        data: { json: json}
    }).done(function( msg ) {

        msg = JSON.parse(msg);
		//window.location.href = "max.php";
        //preparaTabelas(msg)
    });*/

}

/*
function preparaTabelas(msg){
    final = msg.final;
    intermediarias = msg.intermediario;

    tabela = montaTabela(final);

    $(".div_completo").html(tabela);

    tabela = "";
    intermediarias.forEach(function(a){
        tabela += montaTabela(a)+"<br><br>";
    });

    $(".div_intermediarios").html(tabela);
}



function preparaTabelas_min(msg){
    final = msg.final;
    intermediarias = msg.intermediario;

    tabela = montaTabela(final);

    $(".div_completo").html(tabela);

    tabela = "";
    intermediarias.forEach(function(a){
        tabela += montaTabela(a)+"<br><br>";
    });

    $(".div_intermediarios").html(tabela);
}



function montaTabela(obj){
    var tabela = "<table class='bordered table'><thead><tr>";
    try{
        obj.forEach(function(e,ee){
            $.each(e,function(a,aa){
                tabela+= "<td>"+a+"</td>";
            });
            throw BreakException;
        });
    }catch(e){}
    tabela+= "</tr><tbody>";


        obj.forEach(function(e,ee){
            tabela+="<tr>";
            $.each(e,function(a,aa){
                tabela+= "<td>"+aa.toFixed(4)+"</td>";
            });
            tabela+="</tr>";
        });

    tabela+="</tbody>";


    return tabela;
}
*/

































