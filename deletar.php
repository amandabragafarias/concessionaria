
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deletar</title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">
    </head>
    <body>
  <div class="Topico">Deletar Carro</div>
        <a href="./index.html"> <div class="adicionar"> </div></a>
       

        
              <a href="./buscar.html"><div class="buscar"></div></a>
        

       
             <a href="./deletar.html"><div class="deletar"></div></a>
        

       
            <a href="./atualizar.html"> <div class="atualizar"> </div></a>

<div class="eh">
    <center></br>
        <?php
require_once 'conexao.php';

$codigo = $_GET['codigo'];

$sql = "delete from Carro where cod_carro='$codigo'";
mysql_query($sql);

if (mysql_query($sql)) {
    $msg = "Deletado com sucesso!";
} else {
    $msg = "Erro ao deletar!";
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