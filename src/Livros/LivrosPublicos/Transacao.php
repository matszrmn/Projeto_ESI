<?php
    $host = 'fdb15.biz.nf';
    $user = '2155673_project';                     
    $pass = 'password'; 
    $db = '2155673_project';
    $port = 3306;
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    $usuario = $_REQUEST['usuario'];
    $transacao = $_REQUEST['transacao'];
    
    
    $query = "DROP VIEW pedir".$usuario.";";
    $connection -> query($query);
    $query = "DROP VIEW livrosPegos".$usuario.";";
    $connection -> query($query);
    $query = "DROP VIEW minhasSolicitacoes".$usuario.";";
    $connection -> query($query);
    
    $connection -> close();
    include($transacao);
?>