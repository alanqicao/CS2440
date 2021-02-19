<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = "localhost"; 
$user="root";
$password = "DBAdmin";
$dbname="CSIS2440";
$con = new mysqli($host,$user,$password,$dbname)
        or die('could not connect to the database server.'.mysqli_connect_error($con));

if($con->connect_error == FALSE){
    echo"<h2> We Connected</h2>";
}else{
        echo $con->connect_error;
        
    }

print_r($con);

?>