<?php
	require "header.php";
?>
         <div id="form-cadastro" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <div id="panel-cadastro" class="panel panel-default">
                        <img id="imagem-cadastro" src="static/img/mural-ufms.png"/>
                    
                        <h2>Cadastre-se e tenha acesso a recursos exclusivos! </h2>
                        <form name="form-cadastro form-horizontal" onsubmit="return validarCadastro()" action="" method="post" enctype="multipart/form-data" class="form-signin">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Coloque seu nome!">
                                    <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glypicon glyphicon-envelope"></i></span>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Coloque seu e-mail!">
                                    <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Coloque o seu nome de usuario! " required="true" />
                                <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Coloque a sua senha! " required="true" />
                                <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Coloque a sua senha! " required="true" />
                                <span></span>
                            </div>
                            <p></p>
                            <input type="hidden" name="page" value="cadastrar" />
                            <input type="submit" value="Cadastrar" class="btn btn-lg btn-primary" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
        <script type="text/javascript" src="static/js/cadastro.js"></script>   
<?php
	require "footer.php";
?>