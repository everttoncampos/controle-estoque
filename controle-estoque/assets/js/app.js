function modal(id, op) {
  
  $.ajax({
    type: 'GET',
    dataType: 'html',
    url: "lancamentos.php",
    data: {
      id : id,
      op : op
    },
    success: function(msg) {
      var data = msg;
      $('.modal-body').html(data);
    }
  });
}

function modalAdd() {
  $.ajax({
    type: 'GET',
    dataType: 'html',
    url: 'cadastro-produto.php',
    success: function(html){
      var data = html;
      $('.modalAdd').html(data);
    }

  });
}

// function abaixoMedia() {
//   const qnt = document.querySelectorAll("#qnt");
//   console.log(qnt);
// }

