<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crud
 *
 * @author Junior
 */
class crud {

    private $sql_ins = "";
    private $tabela = "";
    private $sql_sel = "";

    public function cadastrar($campos, $valores) { // funçao de inserção, campos e seus respectivos valores como parâmetros

        $this->sql_ins = "INSERT INTO " . $this->tabela . " ($campos) VALUES ($valores)";

        if (!$this->ins = mysql_query($this->sql_ins)) {

            die("<center>Erro na inclusão " . '<br>Linha: ' . __LINE__ . "<br>" . mysql_error() . "<br>
 
<a href='index.php'>Voltar ao Menu</a></center>");
        } else {

            print "<script>location='index.php';</script>";
        }
    }

}
