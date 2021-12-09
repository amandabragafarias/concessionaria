
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar</title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">
    </head>
    <body>  <div class="Topico">Buscar Carro</div>
        

        <a href="./index.html"> <div class="adicionar"> </div></a>
       

        
              <a href="./buscar.html"><div class="buscar"></div></a>
        

       
             <a href="./deletar.html"><div class="deletar"></div></a>
        

       
            <a href="./atualizar.html"> <div class="atualizar"> </div></a>
<div class="eh">

    <center>

         <?php
require_once 'conexao.php';
$codigo = $_GET['codigo'];
$sql = "select * from carro where cod_carro='$codigo'";
$sql = mysql_query($sql);
$d = "<a>Modelo:  </a>";
$a = "<a>Preço:  </a>";
$br ="<br>";

while($exibe = mysql_fetch_assoc($sql)){
 echo $br; echo $br; echo $exibe['cod_carro'].'<br>';
   echo $d; echo $exibe['modelo'].'<br>';
 echo $a; echo $exibe['preco'].'<br>';

}
if ( mysql_num_rows($sql) == 0 ) {
   echo "Sua pesquisa não retornou resultados, tente novamente"; 
}



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
 <div class="nome">By: Amanda Braga, Fabiola Costa, Vitoria Iris e Clara Mendonça</div>
 </body>
</html>