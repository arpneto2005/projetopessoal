<?php include('header.php') ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col.lg-12">
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
                        <li role="presentation"> <a href="index.php"> Home </a> </li>
                        <li role="presentation"> <a href="inserir.php"> Inserir </a> </li>
                        <li role="presentation" class="active"> <a href="#"> Lendo </a> </li>
                        <li role="presentation"> <a href="alterar.php"> Alterando </a> </li>
                        <li role="presentation"> <a href="excluir.php"> Excluir </a> </li>
                    </ul>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <?php
                            require_once 'service/database.php';
                            $pdo = bd();
                        ?>
                        <!-- Tabela Usuario -->
                        <div class="panel panel-default">
                            <table class="table table-bordered">
                                <thead class="thead-inverse">
                                    <div class="panel-heading text-center"> <strong> Usuarios </strong> </div>
                                    <tr>
                                        <th> ID </th>
                                        <th> Nome </th>
                                        <th> Email </th>
                                        <th> Senha </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $usuarios = $pdo->prepare("SELECT * FROM usuario ORDER BY id");
                                        $usuarios->execute();
                                        $users = $usuarios->fetchAll(PDO::FETCH_OBJ);
                                        foreach($users as $user):
                                    ?>
                                    <tr>
                                        <td> <?php echo $user->id; ?> </td>
                                        <td> <?php echo $user->nome; ?> </td>
                                        <td> <?php echo $user->email; ?> </td>
                                        <td> <?php echo $user->senha; ?> </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!-- Tabela Produto -->
                        <div class="panel panel-default">
                            <table class="table table-bordered">
                                <thead class="thead-inverse">
                                    <div class="panel-heading text-center"> <strong> Produtos </strong> </div>
                                    <tr>
                                        <th> ID </th>
                                        <th> Nome </th>
                                        <th> Descrição </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $validar = $pdo->prepare("SELECT * FROM produto ORDER BY id");
                                    $validar->execute();
                                    $validauser = $validar->fetchAll(PDO::FETCH_OBJ);
                                    foreach($validauser as $user):
                                    ?>
                                        <tr>
                                            <td> <?php echo $user->id; ?> </td>
                                            <td><?php echo $user->nome; ?></td>
                                            <td><?php echo $user->descrcao; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
<?php include('footer.php') ?>