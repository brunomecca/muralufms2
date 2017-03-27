<?php
    require "header.php";
?>

        <h2 class="text-center">Edite os seus dados !</h2>
         <div id="form-cadastro" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <div id="panel-cadastro" class="panel panel-default">

                        <form name="form-edit-configs form-horizontal" onsubmit="return validarCadastro()"  method="post" enctype="multipart/form-data" class="form-signin">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i>  Usuário:</span>
                                <input type="text" id="usuario" name="usuario" class="form-control"  required
                                value="<?php echo $usuario->getUsername(); ?>" />
                                <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> Nome:</span>
                                    <input type="text" id="nome" name="nome" class="form-control" required
                                    value="<?php echo $usuario->getNome(); ?>">
                                    <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glypicon glyphicon-envelope"></i> Email:</span>
                                    <input type="text" id="email" name="email" class="form-control" required
                                    value ="<?php echo $usuario->getEmail(); ?>">
                                        <span></span>
                            </div>
                            <p></p>
                            <input type="hidden" name="page" value="editar" />
                            <input type="submit" value="Efetuar mudanças" class="btn btn-lg btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
         </div>

    <script type="text/javascript" src="static/js/atualizaDados.js"></script>

<?php
    require "footer.php";
?>