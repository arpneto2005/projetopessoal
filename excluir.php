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
                        <li role="presentation"> <a href="index.php">Home </a> </li>
                        <li role="presentation"> <a href="inserir.php"> Inserir </a> </li>
                        <li role="presentation"> <a href="lendo.php"> Lendo </a> </li>
                        <li role="presentation"> <a href="alterar.php"> Alterando </a> </li>
                        <li role="presentation" class="active"> <a href="#"> Excluir </a> </li>
                    </ul>
                    <br>
                    <div class="col-md-6 col-md-offset-3">
                        <form class="form-horizontal" action="service/excluir.php" method="post">
                            <h3 for="input1" class="text-center"> Excluir Usuario </h3>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"> Email </label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="input1" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"> Excluir Produto </button>
                                </div>
                            </div>
                        </form>
                        <!-- Divisão Entre Formulários  -->
                        <form class="form-horizontal" action="service/excluir.php" method="post">
                            <h3 for="inputEmail3" class="text-center"> Excluir Produto </h3>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label"> Nome </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nome"  class="form-control" id="input1" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"> Excluir Produto </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
<?php include('footer.php') ?>