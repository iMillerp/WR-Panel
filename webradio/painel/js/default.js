
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
  setTimeout("load_wr('?paginas=h_pedidos&local=paginas/home', 'pedidos', 'GET')",2000);
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
        load_wr('?paginas=h_ver_pedido&local=paginas/home&atendido=1&idpedido='+idpedido, 'verpedidotext', 'GET');
        closeDialog();
        setTimeout("load_wr('?paginas=h_pedidos&local=paginas/home', 'pedidos', 'GET')",3100);
      }
    }]
  });
  load_wr('?paginas=h_ver_pedido&local=paginas/home&idpedido='+idpedido, 'verpedidotext', 'GET');
  $( "#vizualizarpedido" ).dialog( "open" );
}

function editarUsuarioDialog(login,acao){
  var login = login;
  var acao = acao;
  if(acao == 'editar'){
    $( "#vizualizarDadosUsuario" ).dialog( "open" );
    $("#vizualizarDadosUsuario").dialog({
      autoOpen: false,
      title: "Editar Usuario. Login: "+login,
      modal: true,
      position: {
        my: "center top",
        at: "center top"
      },
      width: "600",
      buttons: [{
        text: "Fechar",
        click: function() {
          setTimeout("load_wr('?paginas=users_todos&local=paginas/usuarios', 'container', 'GET')",100);
          $( this ).dialog( "close" );
        }
      }]
    });
    load_wr('?paginas=users_editar_excluir&local=paginas/usuarios&AtualizarDados=1&login='+login, 'vizualizarDadosUsuarioForm', 'GET');
    $( "#vizualizarDadosUsuario" ).dialog( "open" );
  }
  if(acao == 'excluir'){
    $( "#vizualizarDadosUsuario" ).dialog( "open" );
    $("#vizualizarDadosUsuario").dialog({
      autoOpen: false,
      title: "Excluir Usuario. Login: "+login,
      modal: true,
      width: "600",
      position: {
        my: "center top",
        at: "center top"
      },
      buttons: [{
        text: "Fechar",
        click: function() {
          setTimeout("load_wr('?paginas=users_todos&local=paginas/usuarios', 'container', 'GET')",100);
          $( this ).dialog( "close" );
        }
      }]
    });
    load_wr('?paginas=users_editar_excluir&local=paginas/usuarios&excluirUsuario=1&login='+login, 'vizualizarDadosUsuarioForm', 'GET');
    $( "#vizualizarDadosUsuario" ).dialog( "open" );
  }
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
load_wr('?paginas=h_esta&local=paginas/home', 'esta', 'GET');
load_wr('?paginas=h_pedidos&local=paginas/home', 'pedidos', 'GET');
load_wr('?paginas=h_u_logs&local=paginas/home', 'ultimoslogs', 'GET');
load_wr('?paginas=h_users_on_panel&local=paginas/home', 'onlinepanel', 'GET');
setInterval("load_wr('?paginas=h_esta&local=paginas/home', 'esta', 'GET')", 60000);

setInterval(function(){
  load_wr('?paginas=h_pedidos&local=paginas/home', 'pedidos', 'GET');
  $.jGrowl("Hello World!", {position: "bottom-right"});
}, 60000);

setInterval("load_wr('?paginas=h_u_logs&local=paginas/home', 'ultimoslogs', 'GET')",60000);
setInterval("load_wr('?paginas=h_users_on_panel&local=paginas/home', 'onlinepanel', 'GET')", 60000);