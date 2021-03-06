<style>
*{
  padding: 0;
  margin: 0;
}
#menu-centro{
  background-color: white;
  padding: 0;
}
#botaoInicio{
  margin-top: 200px;
  margin-bottom: 50px;
  margin-left: 250px ;
}
#botaoMenu{
  margin-bottom: 16px;
  margin-left: 250px ;
  margin-bottom: 200px;

}
#formCadastro{
  padding: 0;
  margin: 0;
}

</style>

<button id="botaoInicio" class="w3-button w3-black w3-half w3-section botaoInicio" type="submit">Comece Aqui</button>
<button id="botaoMenu" class="w3-button w3-black w3-half w3-section botaoMenu" type="submit">Caso já tenha cadastrado algo</button>

<?php
include("formulario.php");
?>

<button id="botaoCadastrar" class="w3-button w3-blue w3-section botaoCadastrar" type="submit">Novo cadastro</button>
<button id="botaoAtualizar" class="w3-button w3-black w3-section botaoAtualizar" type="submit">Atualizar lista</button>
<button id="botaoVoltar" class="w3-button w3-pink w3-section botaoVoltar" type="submit">Voltar</button>

<div id="tabelaDados">

</div>

<script>

$(document).ready(function() {

  $("#formCadastroPessoais").hide();
  $(".botaoCadastrar").hide();
  $(".botaoAtualizar").hide();
  $(".botaoVoltar").hide();
  $("#dadosCadastrados").hide();
  $("#tabelaDados").hide();

  $("#botaoInicio").click(function(){
    $(".botaoInicio").hide();
    $(".botaoMenu").hide();
    $("#formCadastroPessoais").fadeIn();
  });

  $("#botaoMenu").click(function(){
    $("#tabelaDados").fadeIn();
    $("#tabelaDados").load("http://localhost/BE3/menu_principal.php");
    $(".botaoCadastrar").fadeIn();
    $(".botaoAtualizar").fadeIn();
    $(".botaoMenu").hide();
    $(".botaoInicio").hide();
  });

  $(".botaoAtualizar").click(function() {
    $("#tabelaDados").load("http://localhost/BE3/menu_principal.php");
  });

  $(".botaoCadastrar").click(function() {
    $("#tabelaDados").hide();
    $("#formCadastroPessoais").fadeIn();
    $(".botaoCadastrar").hide();
    $(".botaoAtualizar").hide();
    $(".botaoVoltar").fadeIn();
  });

  $(".botaoVoltar").click(function() {
    $("#formCadastroPessoais").hide();
    $(".botaoVoltar").hide();
    $("#tabelaDados").fadeIn();
    $("#tabelaDados").load("http://localhost/BE3/menu_principal.php");
    $(".botaoCadastrar").fadeIn();
    $(".botaoAtualizar").fadeIn();
  });
});
</script>
