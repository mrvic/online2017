<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "db_connection.php";

$q = "SELECT nazPred FROM pred ";
$q .= "ORDER BY nazPred ASC";

if($stmt = $mysqli->prepare($q)){
    
    $stmt->execute();

    $stmt->bind_result($col);

    while ($stmt->fetch()){
        echo $col . "<br/>";
    }
    
    $stmt->close();
}

$mysqli->close();
