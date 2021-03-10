<?php

$update="UPDATE `CSIS2440`.`Planets` SET `Active` = 'Y'";
if ($desc != "A short description of the planet") {
    $update .= ", `Desc`='$desc'";//add the description
}
$update .= "WHERE(`PlanetName`='".$name."')";//add the where clause
$success = $con->query($update);
if ($success == FALSE) {
    $failmess = "Whole query".$update."<br>";
    echo $failmess;
    die('Invalid query: '. mysqli_error($con));//error if query did not run
} else {
    echo $name." was given a space station<br>";
    //let user know it worked
}
