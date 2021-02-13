<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>WFSystem - TESTE</title>
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
            <a class="btn btn-danger align-content-center" href="index.html">Inicio</a>
            <br>
            <br>
            <br>
            <div class="container-sm bg-secondary h-100 col-md-9">
                <form name="form1" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputName" class="h3 form-label">Usuario:</label>
                        <input placeholder="Nome de Usuario." id="cadUsu" name="cadUsu" type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword4" class=" h3 form-label">Senha:</label>
                        <input placeholder="Senha do Usuario." id="cadSenha" name="cadSenha" type="password" class="form-control">
                    </div>
                    <div class="col-6 g-3">
                        <input type="button" onclick="btnCreate(cadUsu.value,cadSenha.value)" value="create" class="btn btn-success">
                        <input type="button" onclick="btnRead(cadUsu.value,cadSenha.value)" value="read" class="btn btn-light">
                        <input type="button" onclick="btnUpdate(cadUsu.value,cadSenha.value)" value="update" class="btn btn-info">
                        <input type="button" onclick="btnDelete(cadUsu.value,cadSenha.value)" value="delete" class="btn btn-danger">
                    </div>
                </form>
            </div>



        </div>
        <!--RODAPE-->
        <footer class=" bg-dark linhadiv  rodape">
            <a class="hover text-decoration-none mouse" target="_blank" href="https://www.facebook.com/NegrillosBF/">WFSYSTEM - Welington Fernandes</a>

        </footer>

        <!-- COMENTARIO -->


    </div>



    <!--ARQUIVOS DE JAVASCRIPT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script language="JavaScript" type="text/javascript" src="./js/logica.js"></script>
  



</body>

</html>