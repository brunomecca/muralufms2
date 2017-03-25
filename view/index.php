<?php
  require "header.php";
      $naTela = "";
      foreach($homeMensagens as $lnMsg){
              $naTela = $naTela . "<div class='col-md-3'>";
                if($lnMsg['opiniao'] == 'positivo'){
                  $naTela = $naTela . '<div class="panel panel-default panel-success">';
                    $naTela = $naTela . '<div class="panel-heading">'. limitar($lnMsg['titulo'],30) .'</div>';
              }
              else{
                $naTela = $naTela . '<div class="panel panel-default panel-danger">';
                $naTela = $naTela . '<div class="panel-heading">'. limitar($lnMsg['titulo'],30) . '</div>';
              }
              $naTela = $naTela . '<div class="limitadorPanel"><div class="panel-body">' . limitar($lnMsg['mensagem'],100);



              if(strlen($lnMsg['mensagem']) > 100){
                $naTela = $naTela . '<br><button class="btn btn-default btn-xs" data-target="#conteudoMensagem" data-toggle="modal">Ler mais</button></div></div>';
                $naTela = $naTela . '<div class="modal fade" id="conteudoMensagem" role="dialog">
                      <div class="modal-dialog">
                      
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">'.$lnMsg['titulo'].'</h4>
                          </div>
                          <div class="modal-body">
                            <p>'. $lnMsg['mensagem'] .'</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>';
              }else
                $naTela = $naTela . '</div></div>';

              $naTela = $naTela . '


                <div class= "text-right">

                  <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>'

                    .$lnMsg['positivo'].

                  '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>'

                    .$lnMsg['negativo'].

                '</div>

              </div>';
              $naTela = $naTela . '</div>';
                
            }
  
  echo $naTela;
  require "footer.php";
?>
