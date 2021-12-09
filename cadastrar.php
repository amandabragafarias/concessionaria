


<html>
    <head>
        <meta charset="UTF-8">
        <title>Adicionar</title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">
    </head>
    <body>
  <div class="Topico">Adicionar Carro</div>
        
       
            <a href="./index.html"> <div class="adicionar"> </div></a>
       

        
              <a href="./buscar.html"><div class="buscar"></div></a>
        

       
             <a href="./deletar.html"><div class="deletar"></div></a>
        

       
            <a href="./atualizar.html"> <div class="atualizar"> </div></a>
       
        <div class="eh">
    <center></br>
        
<?php

require_once 'conexao.php';

$codigo = $_GET['codigo'];
$modelo = $_GET['modelo'];
$preco = $_GET['preco'];
$ano = $_GET['ano'];
$fabricante = $_GET['fabricante'];

$sql = "INSERT INTO carro(cod_carro, modelo, preco, ano, fabricante) VALUES ('$codigo', '$modelo', '$preco', '$ano', '$fabricante')";

if (mysql_query($sql)) {
    $msg = "Gravado com sucesso!";
} else {
    $msg = "Erro ao gravar!";
}
//mysql_close($con);
echo $msg;
?>
        </div>

        </div>

      
 </br>
  </br>
   </br>
    </br>
     </br>
      </br>
       </br>
        </br>
         </br>
          </br>
           </br>
            </br>
             </br>
              </br>
               </br>
                </br>
                 </br>
                  </br>
                   </br>
                 

<div class="nome">By: Amanda Braga, Fabiola Costa, Vitoria Iris e Clara Mendonça</div>
</html>

