/*=============================================================
    Authour URL: www.designbootstrap.com
    
    http://www.designbootstrap.com/

    License: MIT

    http://opensource.org/licenses/MIT

    100% Free To use For Personal And Commercial Use.

    IN EXCHANGE JUST TELL PEOPLE ABOUT THIS WEBSITE
   
========================================================  */           

$(document).ready(function () {

    /*====================================
           METIS MENU 
     ======================================*/

    $('#main-menu').metisMenu();

    /*======================================
    LOAD APPROPRIATE MENU BAR ON SIZE SCREEN
    ========================================*/

    $(window).bind("load resize", function () {
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    });
    /*======================================
   WRITE YOUR SCRIPTS BELOW
   ========================================*/
    // jquery para chamar a modal
    $("table").on('click',"#btnAlterar", function(){
        var codProd = $(this).attr('data-id');  // pega o id do botão

        $.post('frmAlterarProduto.php', {acao: 'alterar',codProd: codProd}, function(retorno){
            $("#modalAlterar").modal({ backdrop: 'static' });
            $("#conteudoModal").html(retorno);
        });
    });

    $("table").on('click',"#btnVisualizar", function(){
        var codProd = $(this).attr('data-id');  // pega o id do botão

        $.post('frmVisualizarFoto.php', {acao: 'alterar',codProd: codProd}, function(retorno){
            $("#modalFoto").modal({ backdrop: 'static' });
            $("#conteudoModalFoto").html(retorno);
        });
    });
});
      