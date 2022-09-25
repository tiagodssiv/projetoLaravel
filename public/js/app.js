
$(document).ready(function() {

 

   






  $('#btn_salvar').prop('disabled', true);
$("#cep").keyup(function(){
  var tamanho=$('#cep').val().length;


  if(tamanho < 8 ){
      
    $('#btn_editar').prop('disabled', true);
    $('#btn_salvar').prop('disabled', true);
    $("#uf").val("");
    $("#municipio").val("");
    $("#rua").val("");
    $("#bairro").val("");
  }else{$('#btn_editar').prop('disabled', false);
  $('#btn_salvar').prop('disabled', false);}

 // $('#btn_salvar').prop('disabled', true);
   var numCep = $("#cep").val();
    var url = "https://viacep.com.br/ws/"+numCep+"/json";

    $.ajax({
        url: url,
        type: "get",
        dataType: "json",

        success:function(dados){ 
          //caso digitarem cep errado ou inexistente retorna true no erro dados.erro
          
            if(dados.erro ){
              $('#btn_salvar').prop('disabled', true);
              $('#btn_editar').prop('disabled', true);
              $("#uf").val("");
              $("#municipio").val("");
              $("#rua").val("");
              $("#bairro").val("");
             }
            
           
              
        else{  $('#btn_salvar').prop('disabled', false);
        $('#btn_editar').prop('disabled', false);
      
        $("#uf").val(dados.uf);
        $("#municipio").val(dados.localidade);
        $("#rua").val(dados.logradouro);
        $("#bairro").val(dados.bairro);
      
      }
          
             
            
         
         
        }
    })

   
})

//provoar a tabela pesquisa contatos

$('#pesquisar').keyup(function(){

  if($('#pesquisar').val().length >= 3){
    $('#qtde').html("Pesquisando...");

    $.get("pesquisar') ", {pesquisar:$('#pesquisar').val()},function(data){
      $('#qtde').html(data.contatos.length.toString()+" Resultados");
var html="";
  


     
      for (var i = 0; i < data.posts.length; i++) {
      
      
        html+="<tr>";
       html+=' <th scope="row">'+data.contatos[i].id+'</th>';
          html+='<td>'+data.contatos[i].email+'</td>';
          html+='<td>'+data.contatos[i].telefone+'</td>';
          html+='<td>'+data.contatos[i].cep+'</td>';
          
          HTML+='<td> <td><a class="btn "href="edicao/'+data.contatos[i].id+'">editar</a> <a class="btn"href="excluir/'+data.contatos[i].id+'">Deletar</a> <a class="btn"href="'+data.contatos[i].id+'">Visualizar</a></td>';
    html+='</tr>';
    
      }

      if(data.contatos.length!=0){
        $("#textos").html(html);
      }else{
        $('#qtde').html("Nenhum Texto Foi Encontrado!!!");
     //   $("#textos").html("");
      }
    });
  }
});








})