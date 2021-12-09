
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atualizar</title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">
    </head>
    <body><div class="Topico">Atualizar Carro</div>
       
       
            <a href="./index.html"> <div class="adicionar"> </div></a>
       

        
              <a href="./buscar.html"><div class="buscar"></div></a>
        

       
             <a href="./deletar.html"><div class="deletar"></div></a>
        

       
            <a href="./atualizar.html"> <div class="atualizar"> </div></a>
<div class="eh">
    <center></br>
        <?php
require_once 'conexao.php';

$codigo1 = $_GET['codigo'];
$codigo2 = $_GET['novocodigo'];
$modelo = $_GET['novomodelo'];
$ano = $_GET['novoano'];
$preco = $_GET['novopreco'];
$fabricante = $_GET['fabricante'];

$sql = "update carro set cod_carro='$codigo2', modelo='$modelo', preco='$preco', ano='$ano', fabricante='$fabricante' where cod_carro='$codigo1'";
mysql_query($sql);

if (mysql_query($sql)) {
    $msg = "atualizado com sucesso!";
} else {
    $msg = "Erro ao atualizar!";
}
//mysql_close($con);
echo $msg;
?>

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
<div class="nome">By: Amanda Braga, Fabiola Costa, Vitoria Iris e Clara Mendonça</div>
    </body>
</html>