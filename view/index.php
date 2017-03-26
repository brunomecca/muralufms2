<?php
  require "header.php";
      $naTela = "";
      $number = 0;
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
                $naTela = $naTela . '<br><button class="btn btn-default btn-xs" data-target="#mensagem' .  $number . '" data-toggle="modal">Ler mais</button></div></div>';
                $naTela = $naTela . '<div class="modal fade" id="mensagem' . $number .'" role="dialog">
                      <div class="modal-dialog modal-md">
                      
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

                    $number = $number + 1;
              }else
                $naTela = $naTela . '</div></div>';

              $naTela = $naTela . '


                <div class="rodape-mensagem">

                         <div class="text-right" id="data-mensagem">'
                              . $lnMsg['data'] .   


                            '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>'

                              .$lnMsg['positivo'].

                            '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>'
                              .$lnMsg['negativo'].
                          '</div>

                </div>

              </div>';
              $naTela = $naTela . '</div>';
                
            }
  
  echo $naTela;
  require "footer.php";
?>
