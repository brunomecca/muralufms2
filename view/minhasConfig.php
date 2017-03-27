<?php
    require "header.php";
?>

        <h2 class="text-center">Edite os seus dados !</h2>
         <div id="form-cadastro" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <div id="panel-cadastro" class="panel panel-default">

                        <form name="form-edit-configs form-horizontal" onsubmit="return validarCadastro()" action="" method="post" enctype="multipart/form-data" class="form-signin">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="usuario" name="usuario" class="form-control"  required="true"
                                value="<?php echo $usuario->getUsername(); ?>" />
                                <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <label for="nome">
                                    <input type="text" id="nome" name="nome" class="form-control" required="true"
                                    value="<?php echo $usuario->getNome(); ?>">
                                    <span></span></label>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glypicon glyphicon-envelope"></i></span>
                                    <label for="email">
                                    <input type="text" id="email" name="email" class="form-control" required="true"
                                    value ="<?php echo $usuario->getEmail(); ?>">
                                        <span></span></label>
                            </div>
                            <p></p>
                            <input type="hidden" name="page" value="editar" />
                            <input type="submit" value="Efetuar mudanças" class="btn btn-lg btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
         </div>

<?php
    require "footer.php";
?>