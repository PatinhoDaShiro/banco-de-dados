<?php
require "config.php";
include TEMPLATE_BASE."/header.php";
include TEMPLATE_BASE."/nav.php";
?>
<main>

<h2>Escola</h2>

<section id="home"> 
            <div id="figs">
               
            <?php


$hostname="localhost:33";
$username="root";
$password="";
$dbname="estudantes";
$usertable="turma";


$banco=mysqli_connect($hostname,$username,$password) ;
mysqli_select_db($banco,$dbname);

$query = "SELECT * FROM $usertable";

//$result = mysqli_query($banco,$query);
$show="SHOW DATABASES";
$res=mysqli_query($banco,$show);

/*
imprime uma tabela que criei no banco mas como não faz parte da tarefa vou deixar em comentario

if($result){
    while($row = mysqli_fetch_array($result)){
        $idade = $row["idade"];
        $escola = $row["escola"];
        $nome = $row["nome"];
        ;
        echo "Nome: ".$nome."<br/>";
        echo "Idade: ".$idade."<br/>";
        echo "Escola: ".$escola."<br/>";
        echo "--------------------------------"."<br/>";
        
    }}*/
    if($res){
        while($row = mysqli_fetch_array($res)){
            
            $database = $row["Database"];
            echo "DATABASE : ".$database."<br/>"; 
        }
}