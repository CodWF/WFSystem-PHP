<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>WFSystem - Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/photon.css">



</head>

<body onload="time()">

  <div class=" bg-dark bg-gradient font-monospace fw-bolder window text-center">

    <!--CABECALHO-->
    <header class="linhadiv">
      <div class="text-light  text-center " id="txt"></div>
    </header>
    <!--CORPO-->
    <div class="CORPO">
      <br>
      
      <div style="margin-top:100px;" class="btn-group-lg text-center ">
        &nbsp;<button type="button" class="grad btnIni underlineHover fw-bolder text-wrap btn bg-gradient btn-secondary" onclick="indexOs()"><img src="./img/user.svg"> <br>Ordem de Servico</button>&nbsp;
        &nbsp;<button type="button" class=" grad btnIni underlineHover fw-bolder text-wrap btn bg-gradient btn-secondary" onclick="indexCli()"><img src="./img/user.svg"><br>Clientes</button>&nbsp;
        &nbsp;<button type="button" class="btnIni underlineHover fw-bolder text-wrap btn bg-gradient btn-secondary" onclick="indexProd()"><img src="./img/user.svg"> <br>Produtos</button>&nbsp;
        &nbsp;<button type="button" class="btnIni underlineHover fw-bolder text-wrap btn bg-gradient btn-secondary" onclick="indexCaixa()"><img src="./img/user.svg"> <br>Caixa</button>&nbsp;
      </div>
      <br>
      <br>
      <a class="btn btn-danger align-content-center" href="./banco.php"> AREA DE TESTE</a>


    </div>
    <!--RODAPE-->
    <footer class=" bg-dark linhadiv  rodape">

      <a class="hover text-decoration-none  mouse" target="_blank" href="https://www.facebook.com/NegrillosBF/">WFSYSTEM - Welington Fernandes</a>

    </footer>
    <!-- COMENTARIO -->


  </div>



  <!--ARQUIVOS DE JAVASCRIPT -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <!-- Javascript -->
  <script language="JavaScript" type="text/javascript" src="./js/logica.js"></script>


</body>

</html>