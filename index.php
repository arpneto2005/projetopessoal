<?php include('header.php') ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="index.php"> Ângelo </a>
                        </div>
                    </nav>
                   <ul class="nav nav-tabs">
                        <li role="presentation" class="active"> <a href="index.php"> Home </a> </li>
                        <li role="presentation"> <a href="inserir.php"> Inserir </a> </li>
                        <li role="presentation"> <a href="lendo.php"> Lendo </a> </li>
                        <li role="presentation"> <a href="alterar.php"> Alterando </a> </li>
                        <li role="presentation"> <a href="excluir.php"> Excluir </a> </li>
                    </ul>
                    <br>
                    <div class="list-group">
                        <a href="index.php" class="list-group-item active text-center">
                            Breve Apresentação
                        </a>
                        <a href="index.php" class="list-group-item text-center"> Página Criada para Demonstração de Conhecimento. 
                            <br>
                            Será demonstrado um CRUD, abaixo segue link do driver onde está  código do mesmo.
                            <br>
                            A interface foi totalmente feita com Bootstrap.
                            <br>
                            O banco foi usado Postgres onde foi feito duas tabelas, usuario e produto, onde as operações CRUD podem ser realizadas com sucesso.
                        </a>
                    </div>                
                </div>
            </div>
        </div>
        <!-- FOOTER -->
<?php include('footer.php') ?>