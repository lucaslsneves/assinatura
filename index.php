<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="html2canvas.js"></script>
    <script type="text/javascript" src="alertify.js"></script>
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/default.css">
    <link rel="icon" href="imgs/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div>
        <div ng-app="" class="ng-scope container">
            <div class="row">
                <div id="left" class="col-lg-6">
                    <img src="imgs/ints-brasil.png" alt="" style="padding:15px;" align="center" class="img-fluid"><br><br><br><br>
                    <h6 style="color:white;">Formulário de Geração</h6>
                    <form class="needs-validation" action="save-capture.php" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input id="nome" type="text" ng-model="nome" class="form-control" maxlength="30" placeholder="* Primeiro e último nome" aria-label="Nome" aria-describedby="basic-addon1" name="nameId" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input id="cargo" type="text" ng-model="cargo" class="form-control" maxlength="55" required placeholder="* Cargo" aria-label="cargo" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" ng-model="telefone" id="telefone" class="form-control mr-2" required placeholder="* Telefone/Celular" aria-label="tel" aria-describedby="basic-addon1">
                            <input type="text" onkeypress=telDivisor() ng-model="telefone2" id="telefone2" class="form-control" placeholder="Telefone/Celular" aria-label="tel" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" id="email" ng-model="email" class="form-control" maxlength="25" placeholder="* Email" required aria-label="e-mail" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@ints.org.br</span>
                            </div>
                        </div>
                        <!--<input type="text" ng-model="email" placeholder="*Insira aqui seu e-mail" require="" class="ng-valid ng-touched ng-not-empty ng-dirty ng-valid-parse"><br>-->

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Unidades</label>
                            </div>
                            <select onchange="backgroundImg()" ng-model="filial" class="custom-select" required id="inputGroupSelect01">
                                <option value="" disabled selected>Selecione sua unidade</option>
                                <option value="Sede - Salvador/BA">Sede Salvador/BA</option>
                                <option value="Escritório de São Paulo">Escritório de São Paulo</option>
                                <option value="Upa Feira de Santana">Upa Feira de Santana</option>
                                <option value="UPA 24h Brotas"> UPA 24h Brotas</option>
                                <option value="Bertioga">Bertioga</option>
                                <option value="CRESAMU Mogi das Cruzes">CRESAMU - Mogi das Cruzes</option>
                                <option value="UPA Oropó - Mogi das Cruzes">Upa Oropó - Mogi das Cruzes</option>
                                <option value="Suzano">Suzano</option>
                                <option value="Hospital Espanhol">Hospital Espanhol</option>
                                <option value="Hospital Regional de Itumbiara">Hospital Regional de Itumbiara</option>
                                <option value="Hospital HUGO">Hospital HUGO</option>
                                <option value="Região SACA">Região SACA</option>
                                <option value="Hospital Municipal de Guarapiranga">Hospital Municipal de Guarapiranga</option>
                                <option value="Hospital Manoel Victorino">Hospital Manoel Victorino</option>
                            </select>
                        </div>
                        <button onclick="isEmpty()" id="buttonId" type="button" class="btn btn-warning btn-block"><strong style="color:#fff;letter-spacing: 1.4px;">GERAR</strong></button><br>
                    </form>
                    <p style="color:white;">Dúvidas, sugestões, ou notificar erros encontrados:<br> rodrigosantos@ints.org.br ou lucasneves@ints.org.br</p>
                </div>

                <div id="right" class="col-lg-6"><br>
                    <div class="text-center">
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

                    <table width="540px" height="185px">
                        <tbody>
                            <tr>
                                <td id="about" class="img-fluid" style="background-image:url('imgs/sede5.png');">
                                    <div id="dados">
                                        <div id="signature-container">
                                            <div id="wrapper-nome-cargo">
                                                <strong id="nomeCard" class="ng-binding">{{nome}}</strong>
                                                <strong id="cargoCard" class="ng-binding">{{cargo}}</strong>
                                            </div>
                                            <div id="wrapper-tel-email-local">
                                                <div style="display:flex; position:absolute;top:1%; width:100%;">
                                                    <span style="margin-right: 10px;" id="telCard1" class="ng-binding">{{telefone}}</span>
                                                    <span class="ng-binding">{{telefone2}}</span>
                                                </div>   

                                                <strong style="position:absolute;top:28.5%; font-size:12.5px;" class="ng-binding">{{email}}@ints.org.br</strong><br>
                                                <strong style="margin-bottom: 10px;position:absolute;top:57%;" class="ng-binding">{{filial}}</strong>
                                            </div>
                                        </div>

                                        <div class="footer2">
                                            <p>Canal de Ética e Transparência <strong id="bolder">0800 799 9056</strong></p>
                                            <p id="social-media">/INTSBrasil</p>
                                            <p id="site">www.ints.org.br</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var behavior = function(val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {
            onKeyPress: function(val, e, field, options) {
                field.mask(behavior.apply({}, arguments), options);
            }
        };
    $('#telefone').mask(behavior, options);
    $('#telefone2').mask(behavior, options);

    $('#telefone2').change(function() {
        var x = $('#telefone2').val();
        document.getElementById("divisor").style.visibility = "visible";

        if (!$('#telefone2').val())
            document.getElementById("divisor").style.visibility = "hidden";

    });

    function backgroundImg() {
        var backgroundStatus = $('select option').filter(':selected').val()
       

        if (backgroundStatus == "Região SACA" || backgroundStatus == "Escritório de São Paulo") {
            document.getElementById("about").style = "background-image:url('imgs/saca4.png')"
        } else if (backgroundStatus == "Hospital HUGO") {
            document.getElementById("about").style = "background-image:url('imgs/hugo4.jpeg')"
        } else if (backgroundStatus == "Hospital Municipal de Guarapiranga") {
            document.getElementById("about").style = "background-image:url('imgs/guarapiranga4.png')"
        } else if (backgroundStatus == "Upa Feira de Santana") {
            document.getElementById("about").style = "background-image:url('imgs/feira4.png')"
        } else if (backgroundStatus == "UPA 24h Brotas") {
            document.getElementById("about").style = "background-image:url('imgs/brotas4.png')"
        } else if (backgroundStatus == "Hospital Espanhol") {
            document.getElementById("about").style = "background-image:url('imgs/espanhol4.png')"
        } else if (backgroundStatus == "Hospital Regional de Itumbiara") {
            document.getElementById("about").style = "background-image:url('imgs/itumbiara4.png')"
        } else if (backgroundStatus == "Hospital Manoel Victorino") {
            document.getElementById("about").style = "background-image:url('imgs/mv4.png')"
        } else {
            document.getElementById("about").style = "background-image:url('imgs/sede5.png')"
        }

    }

    function isEmpty() {
        var nome = document.getElementById("nome").value;
        var cargo = document.getElementById("cargo").value;
        var telefone = document.getElementById("telefone").value;
        var email = document.getElementById("email").value;
        var unidade = document.getElementById("inputGroupSelect01").value;
        console.log(unidade)
        if (nome && cargo && telefone && email && unidade)
            doCapture()
        else
            alert("Por favor, preencha os dados corretamente.")
    }

    function ajaxGetNome() {
        html2canvas(document.getElementById("about")).then(function(canvas) {
            var data = document.getElementById("nome").value;
            var img = canvas.toDataURL("image/jpeg", 0.9);
            $.ajax({
                url: 'response.php',
                type: 'POST',
                data: {
                    var_PHP_data: data,
                    var_PHP_img: img
                },
                success: function(data) {},
                error: function(XMLHttpRequest, textStatus, errorThrown) {}
            });
        })
    };

    function minhafuncao() {
        myVar = setTimeout(alerta1, 3000);
        alertify.warning('Gerando Imagem, Aguarde 3s');
    }

    function alerta1() {
        alertify.alert('ASSINATURA GERADA', 'A assinatura será aberta para download em uma nova aba.');
        myVar = setTimeout(download, 1000);
    }

    function download() {
        var nome = document.getElementById("nome").value;
        window.open('uploads/assinatura-email-' + nome + '.jpeg');
    }

    async function doCapture() {
        window.scrollTo(0, 0);
        ajaxGetNome();
        minhafuncao();
    }
</script>


</html>