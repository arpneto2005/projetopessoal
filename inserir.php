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
                        <li role="presentation" class="active"> <a href="#"> Inserir </a> </li>
                        <li role="presentation"> <a href="lendo.php"> Lendo </a> </li>
                        <li role="presentation"> <a href="alterar.php"> Alterando </a> </li>
                        <li role="presentation"> <a href="excluir.php"> Excluir </a> </li>
                    </ul>
                    <br>
                    <div class="col-md-6 col-md-offset-3">
                        <form class="form-horizontal" action="service/inserir.php" method="post">
                            <div class="form-group">
                                <h3 class="text-center"> Inserir Usuario </h3>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label"> Nome </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nome" class="form-control" id="input1" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label"> Email </label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="input2" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label"> Senha </label>
                                <div class="col-sm-10">
                                    <input type="password" name="senha" class="form-control" id="input3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"> Inserir Usuario </button>
                                </div>
                            </div>
                        </form>
                    </div>
                        <!-- Divisão de Formularios -->
                    <br><br><br>
                    <div class="col-md-6 col-md-offset-3">
                        <form class="form-horizontal" action="service/inserir.php" method="post">
                            <div class="form-group">
                                <h3 class="text-center">Inserir Produto</h3>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label"> Nome </label>
                                <div class="col-sm-10">
                                    <input type="text" name="produto" class="form-control" id="input1" placeholder="Nome do Produto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label"> Descrição </label>
                                <div class="col-sm-10">
                                    <input type="text" name="descricao" class="form-control" id="input2" placeholder="Descrição do Produto">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"> Inserir Produto </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
<?php include('footer.php') ?>