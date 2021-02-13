<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>WFSystem - Ordem de Servicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/photon.css">


</head>

<body onload="time()">

    <div class=" bg-dark bg-gradient font-monospace align-content-center fw-bolder window text-center">

        <!--CABECALHO-->
        <header class="linhadiv">
            <div class="text-light  text-center " id="txt"></div>
        </header>
        <!--CORPO-->
        <div class=" align-content-center hover CORPO">
            <!--HEADER2-->
            <div class="text-light d-flex justify-content-center linhadiv bg-dark bg-gradient window-content">
                <button class="fw-bolder mouse btn btn-dark bg-gradient">
                    <a onclick="indexHome()">Inicio</a>
                </button>
                <button class=" fw-bolder mouse btn btn-dark bg-gradient">
                    <a onclick="indexOs()">Ordem de Servicos</a>
                </button>
                <button class=" fw-bolder mouse btn btn-dark bg-gradient">
                    <a onclick="indexCli()">Clientes</a>
                </button>
                <button class=" fw-bolder mouse btn btn-dark bg-gradient">
                    <a onclick="indexProd()">Produtos</a>
                </button>
                <button class=" fw-bolder mouse btn btn-dark bg-gradient">
                    <a onclick="indexCaixa()">Caixa</a>
                </button>
                <button class=" fw-bolder mouse btn btn-dark bg-gradient">
                    <a>Sobre</a>
                </button>

            </div>
            <br>
            <!-- Button trigger modal -->
        </div>
        <div class="container-fluid">
            <button type="button" class="btn pull-left btn-success" data-bs-toggle="modal" data-bs-target="#addUsuarioModal">
                Cadastrar
            </button>
            <br>
            <!-- Modal -->
            <div class="modal fade" id="addUsuarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUsuarioModalLabel">Cadastro usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Nome do Cliente:</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
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