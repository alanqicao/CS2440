<?php
//write your insert statment
$insert = "INSERT INTO `CSIS2440`.`Planets`(`PlanetName`,`PosX`,`PosY`,`PosZ`,`Desc`,`Faction`)"
        ."VALUES('$name','$posx','$posy','$posz','$desc','$faction')";

$success = $con->query($insert);

if ($success == FALSE) {
    $failmess = "Whole query ".$inset."<br>";
    echo $failmess;
    print('Invalid query: '.mysqli_error($con)."<br>");
} else {
    echo $name."was added<br>";
}
