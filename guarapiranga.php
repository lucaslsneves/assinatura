<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<script src="jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>
<script type="text/javascript" src="alertify.js"></script>
<link rel="stylesheet" href="css/alertify.css">
<link rel="stylesheet" href="css/themes/default.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<script>

var myVar;

function minhafuncao() {
  
  myVar = setTimeout(alerta1, 3000);
  alertify.warning('Gerando Imagem, Aguarde 3s');
}

function alerta1() {
  alertify.alert('ASSINATURA GERADA', 'A assinatura será aberta para download em uma nova aba.');
  myVar = setTimeout(download, 1000);
}
function download(){
  window.open('uploads/assinatura-email.jpeg');
}

function doCapture() {
    window.scrollTo (0, 0);

    html2canvas(document.getElementById("about")).then(function(canvas){
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "save-capture.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
        
        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
            }
        };
    }); 
     
}

</script>


<body>
<div>
    <div ng-app="" class="ng-scope container">
      <div class="row">
    <div id="left" class="col-lg-6">
    <img src="imgs/ints-brasil.png" alt="" style="padding:15px;" align="center" class="img-fluid"><br><br><br><br>
    <h6 style="color:white;">Formulário de Geração</h6>
        <div class="input-group mb-3">
          <div class="input-group-prepend">            
          </div>
          <input type="text" ng-model="nome" class="form-control" placeholder="*Insira seu Nome" aria-label="Nome" aria-describedby="basic-addon1">
        </div>

      <!--<br><input type="text" ng-model="nome" placeholder="*Insira seu Nome" require="" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched">-->

        <div class="input-group mb-3">
          <div class="input-group-prepend">            
          </div>
          <input type="text" ng-model="cargo" class="form-control" placeholder="*Insira seu Cargo" aria-label="calgo" aria-describedby="basic-addon1">
        </div>

      <!--<input type="text" ng-model="cargo" placeholder="*Insira seu Cargo" require="" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched">-->

      <div class="input-group mb-3">
          <div class="input-group-prepend">            
          </div>
          <input type="text" ng-model="telefone" class="form-control" placeholder="*Numero de Tel da Unidade/Corporativo" aria-label="tel" aria-describedby="basic-addon1">
        </div>
      <!--<br><input type="text" ng-model="telefone" placeholder="*Numero de Tel da Unidade/Corporativo" require="" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched">-->

      <div class="input-group mb-3">
        <input type="text" ng-model="email" class="form-control" placeholder="Insira aqui seu e-mail" aria-label="e-mail" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">@ints.org.br</span>
        </div>
      </div>

      <!--<input type="text" ng-model="email" placeholder="*Insira aqui seu e-mail" require="" class="ng-valid ng-touched ng-not-empty ng-dirty ng-valid-parse"><br>-->
    <button  onclick="doCapture();minhafuncao();" type="button" class="btn btn-warning btn-block"><strong style="color:white;">GERAR</strong></button><br>
    <p style="color:white;">Dúvidas, sugestões, ou notificar erros encontrados:<br> rodrigosantos@ints.org.br</p>
<!--
      <br><select ng-model="filial" class="ng-valid ng-dirty ng-valid-parse ng-touched ng-not-empty">
        <option value="" disabled="" selected="selected">Selecione sua Unidade</option>
        <option value="Sede/Salvador(BA)">SEDE SALVADOR/BA</option>
        <option value="Upa de Feira">UPA DE FEIRA</option>
        <option value="Upa de Brotas">UPA DE BROTAS</option>
        <option value="Hospital de BERTIOGA">HOSPITAL DE BERTIOGA</option>
      </select><br><br>
      <button  onclick="doCapture();minhafuncao();"><strong>GERAR</strong></button>

      <p>Duvidas, sugestões, ou notificar erros encontrados:<br> rodrigosantos@ints.org.br</p>-->
    </div>

    <div id="right"class="col-lg-6"><br>
      <div class="text-center">
    <!--<img src="imgs/logo.png" width="20%" style="margin: auto;" class="img-fluid" align="center" />-->
    </div>
    <h6 style="color:#007201;">GERAÇÃO DE ASSINATURAS DE E-MAILS</h6>
    <p>Este é um sistema que foi desenvolvido com o objetivo de facilitar e padronizar
    a criação das assinaturas de e-mails para os colaboradores do INTS.</p>
    <h6>INSTRUÇÕES</h6>
    <p align="justify">1 - Primeiro insira suas informações no formulário ao lado (nome, cargo, telefone...)</p>
    <p align="justify">2 - Clique no botão “gerar” e aguarde os 3 segundos até que sua assinatura
    seja gerada e aberta automaticamente em formato de imagem em seu navegador.</p>
    <p align="justify">3 - Após a imagem gerada, clique com botão direito, salvar imagem como, e a salve em seu computador.</p>
	<p align="justify">4 - Vá nas configurações do seu e-mail e no campo de assinaturas insira a imagem baixada.</p><br>

    <table width="540px" height="190px">
      <tbody><tr>    
        <td id="about" class="img-fluid" style="margin:-5px;font-family:tahoma,arial,verdana; font-size:12px;background-repeat: no-repeat; width:559px; height:auto; background-size:103%; background-image:url('imgs/assinatura-guarapiranga.png');"><br>
          <strong style="color: #007129; font-size: 22px; padding-left: 18px;" class="ng-binding">{{nome}}</strong><br>
          <strong style="color: #007129; font-size: 12px; padding-left: 18px;" class="ng-binding">{{cargo}}</strong>
          <br><br>
          <strong style="color: #007129; padding-left: 18px; font-size: 12px;" class="ng-binding">{{telefone}}</strong>
          <br>
          <strong style="color: #007129;padding-left: 18px; font-size: 12px;" class="ng-binding">{{email}}@ints.org.br</strong><br>
          <strong style="color: #007129;padding-left: 18px; font-size: 12px;" class="ng-binding"><i class="fa fa-map-marker" aria-hidden="true"></i> INTS GUARAPIRANGA</strong>
          <br><br><br><br>
          </td>
        </tr></tbody></table>
        <br><br>
  </div>
  </div>
  </div>
</div>


<!--<a href="uploads/filename.jpeg" download="uploads/filename.jpeg">Após Gerar Clique aqui </a>-->

</body>
</html>