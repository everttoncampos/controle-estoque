$(document).ready(function() {  

  load_dados(null, "retornoPesquisa.php", "#ResultadoFiltro");

  function load_dados(valores, page, div) {

    $.ajax({
      type: 'POST',
      dataType: 'html',
      url: page,
      data: {
        filtroProduto : valores,
      },
      success: function(msg) {
        var data = msg;
        $(div).html(data);
        
        const qnt = document.querySelectorAll("#qnt");
        const media = document.querySelectorAll("#media");

        // console.log(qnt);
               
        for(var i=0; i<=qnt.length; i++) {
          
          let q = parseInt(qnt[i].innerText);
          let m = parseInt(media[i].innerText);

          // console.log(q);
          // break;

          if( q < m ) {
            qnt[i].innerHTML = "<strong class='colorRed'>" + q + "</strong>";
            
          }
          
        }       
      }
    });
  }  

  $('#key').keyup(function(){
    var parametro = $(this).val();

    if (parametro.length >= 1){
      load_dados(parametro,  "retornoPesquisa.php", "#ResultadoFiltro");
    } else {
      load_dados(null, "retornoPesquisa.php", "#ResultadoFiltro");
    }
  });


});

