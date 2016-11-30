$('body').on('keydown', '.check_ultimo', function(e) {
    
    var value = $(this).val();
    var keyCode = e.keyCode || e.which; 

    if(value && keyCode == 9){
        console.log('aqu');
         e.preventDefault(); 
        _addLine();
    }
    
}); 

function _addLine(){
    $(".check_ultimo").removeClass("check_ultimo");

    var html = "\
                        <div class=\"row\"><br>\
                            <div class=\"col-md-5\">\
                                <div class=\"input-group\">\
                                    <span class=\"input-group-addon\" id=\"basic-addon1\">Variável</span>\
                                    <input type=\"text\" class=\"form-control input-variavel last_regra valor_regra\" placeholder=\"X\" aria-describedby=\"basic-addon1\">\
                                </div>\
                            </div>\
                            <div class=\"col-md-3\">\
                                <div class=\"input-group\">\
                                    <span class=\"input-group-addon\" id=\"basic-addon1\">Tipo</span>\
                                    <label style=\"text-align: center;\" class=\"form-control\"><=</label>\
                                </div>\
                            </div>\
                            <div class=\"col-md-3\">\
                                <div class=\"input-group\">\
                                    <span class=\"input-group-addon\" id=\"basic-addon1\">Valor</span>\
                                    <input type=\"text\" class=\"form-control input-value regra check_ultimo\">\
                                </div>\
                            </div>\
                            <div class=\"col-md-1\">\
                                <button type=\"button\" class=\"btn btn-danger pull-right btn_remove\">-</button>\
                            </div>\
                        </div>";

    $(".div_regras").append(html);

    $('.div_regras').find('> div').last().find('.input-variavel').focus();
}

$('body').on('click', '.btn_remove', function(e) {
    $(e.target).parent().parent().remove();
    $(".check_ultimo").removeClass("check_ultimo");

    var nd = null;
    $(".valor_regra").each(function(ee,eee){
        nd = eee;
    });
    nd = $(nd);
    console.log(nd);
    nd.addClass("check_ultimo");
});

$('body').on('click', '.btn_add', function(e) {
    _addLine();
});
