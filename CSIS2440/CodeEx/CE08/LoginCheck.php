<?php

session_start();

unset($_SESSION['badPass']);

$myusername=$_POST['myusername'];
$mypassword = $_POST['mypassword'];

require_once 'DataBaseConnection.php';

$myusername =mysql_fix_string($con,$myusername);
$mypassword = mysql_fix_string($con,$mypassword);

$Hashed = hash("ripemd128",$mypassword);

$sql ="SELECT * FROM CSIS2440.Captains where Email = '$myusername' AND ThePass= '$Hashed'";
$result = $con->query($sql);

if(!result){
    $message ="Whole query" . $sql;
    echo $message;
    die('Invalid query:'.mysqli_errno());
}

$count = $result->num_rows;

if($count == 1){
    $row =$result->fetch_assoc();
    $_SESSION['user']=$myusername;
    $_SESSION['password']=$mypassword;
    $_SESSION['Captain']=$row['CaptainName'];
    $_SESSION['Command']=$row['Command'];
    $_SESSION['Combat']=$row['Combat'];
    $_SESSION['Commerce']=$row['Commerce'];
    $_SESSION['Couning']=$row['Cunning'];
    
    header("Location:Dashboard.php");
    //echo "<a herf='Catalogue.php'>To Shooping</a>";
}else{
    header("Location:LoginPage.php");
    $_SESSION['badPass'] ++;
    //echo "Wrong Username or Password";
}



