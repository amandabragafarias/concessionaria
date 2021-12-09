
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">

    </head>
    <body>
        <div class="Topico">Todos os Carros</div>
        
       
            <a href="./index.html"> <div class="adicionar"> </div></a>
       

        
              <a href="./buscar.html"><div class="buscar"></div></a>
        

       
             <a href="./deletar.html"><div class="deletar"></div></a>
        

       
            <a href="./atualizar.html"> <div class="atualizar"> </div></a>
<div class="eh">
    <center>
      <?php
require_once 'conexao.php';
$sql = "select * from carro";
$sql = mysql_query($sql);
$t = "<a>Código: </a>";
$d = "<a>Modelo: </a>";
$a = "<a>Preço: </a>";
$c = "<a>Fabricante: </a>";
$f = "<a>Ano: </a>";
$br = "</br>";
while($exibe = mysql_fetch_assoc($sql)){
 echo $t;  echo $exibe['cod_carro'].' '; echo $br; echo $br;
 echo $d;  echo $exibe['modelo'].' ';echo $br;echo $br;
 echo $a;  echo $exibe['preco'].'<br>';echo $br;echo $br;
 echo $c;  echo $exibe['fabricante'].'<br>';echo $br;echo $br;
 echo $f;  echo $exibe['ano'].'<br>';echo $br;echo $br;
echo $br;
 echo $br;
 
}
?>

        </div>



 <div class="nome">By: Amanda Braga, Fabiola Costa, Vitoria Iris e Clara Mendonça</div>

      

    </body>
</html>