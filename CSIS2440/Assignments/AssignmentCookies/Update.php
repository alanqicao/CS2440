<?php

$update="UPDATE `CSIS2440` . `Products` SET ";
if ($desc != "A short description of the product") {
    $update .= "`ProductDesc`='$desc'";//add the description
}

$update .= "`ProductDesc`='$desc', `ProductName` = '$name',`ProductCost`='$priceP',`ProductImage`='$imageP'";
$update .= "WHERE(`ProductName`='%".$name."%')";//add the where clause
$success = $con->query($update);
if ($success == FALSE) {
    $failmess = "Whole query".$update."<br>";
    echo $failmess;
    die('Invalid query: '. mysqli_error($con));//error if query did not run
} else {
    echo $name." was succeed update<br>";
    //let user know it worked
}
