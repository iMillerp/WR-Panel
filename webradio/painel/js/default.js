
$(document).ready(function() {
  $("div#mws-login .mws-login-back").mouseover(function(event) {
    $(this).find("a").animate({
      'left':0
    })
  }).mouseout(function(event) {
    $(this).find("a").animate({
      'left':70
    })
  });
});

function reloadPedidos(){
  setTimeout("load_wr('?paginas=h_pedidos&local=__paginas/__home', 'pedidos', 'GET')",2000);
}

function closeDialog(){
  setTimeout(function(){
    $("#vizualizarpedido").dialog('close')
  }, 3000);
}

function cadastroUsers(){
  setTimeout(function(){
    if($.fn.filestyle) {
      $("input[type='file']").filestyle({
        imagewidth: 78,
        imageHeight: 28
      });
      $("input.file").attr("readonly", true);
    }
  },1800);
}

function verPedido(idpedido){
  var idpedido = idpedido;
  $( "#vizualizarpedido" ).dialog( "open" );
  $("#vizualizarpedido").dialog({
    autoOpen: false,
    title: "Vizualizar Pedido Nº "+idpedido,
    modal: true,
    width: "500",
    buttons: [{
      text: "Fechar",
      click: function() {
        $( this ).dialog( "close" );
      }
    },
    {
      text: "Marcar Como Atendido",
      click: function(){
        load_wr('?paginas=h_ver_pedido&local=__paginas/__home&atendido=1&idpedido='+idpedido, 'verpedidotext', 'GET');
        closeDialog();
        setTimeout("load_wr('?paginas=h_pedidos&local=__paginas/__home', 'pedidos', 'GET')",3100);
      }
    }]
  });
load_wr('?paginas=h_ver_pedido&local=__paginas/__home&idpedido='+idpedido, 'verpedidotext', 'GET');
$( "#vizualizarpedido" ).dialog( "open" );
}

setInterval(function(){
  $('#tabelapedidos').dataTable({
    'aaSorting': [[ 0, 'desc' ]],
    sPaginationType: "full_numbers",
    "oLanguage": {
      "oPaginate": {
        "sFirst":    "Primeiro",
        "sPrevious": "Anterior",
        "sNext":     "Próximo",
        "sLast":     "Último"
      }
    }
  })
}, 300);
setInterval(function(){

  $('#mws-validate').validate();
  $('#CadastrarUsers').click(function(){
    $('#processando').show('slow');
  });
  $('#excluirUsuario').click(function(){
    $('#processando2').show('slow');
  });
  $('#mws-validate').ajaxForm({
    target: '#teste',
    success: function() {
      $('#cadastroUsuariosClube').fadeIn('slow').addClass('off');
      $('#resutado').show('slow');
      $('#teste').fadeIn('slow');
    }
  });

  $('#FormAtualizarCadastro').validate();
  $('#AtualizarUser').click(function(){
    $('#processandoAtualizarUser').show('slow');
  });
  $('#FormAtualizarCadastro').ajaxForm({
    target: '#teste',
    success: function() {
      $('#FormAtualizarCadastro').fadeIn('slow').addClass('off');
      $('#resutado').show('slow');
      $('#teste').fadeIn('slow');
    }
  });
}, 300);
load_wr('?paginas=h_esta&local=__paginas/__home', 'esta', 'GET');
load_wr('?paginas=h_pedidos&local=__paginas/__home', 'pedidos', 'GET');
load_wr('?paginas=h_u_logs&local=__paginas/__home', 'ultimoslogs', 'GET');
load_wr('?paginas=h_users_on_panel&local=__paginas/__home', 'onlinepanel', 'GET');
setInterval("load_wr('?paginas=h_esta&local=__paginas/__home', 'esta', 'GET')", 60000);
setInterval("load_wr('?paginas=h_pedidos&local=__paginas/__home', 'pedidos', 'GET')", 60000);
setInterval("load_wr('?paginas=h_u_logs&local=__paginas/__home', 'ultimoslogs', 'GET')", 60000);
setInterval("load_wr('?paginas=h_users_on_panel&local=__paginas/__home', 'onlinepanel', 'GET')", 60000);