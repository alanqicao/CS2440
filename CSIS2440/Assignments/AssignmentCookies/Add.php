<?php
//write your insert statment
$insert = "INSERT INTO `CSIS2440`.`Products`(`ProductName`,`ProductCost`,`ProductImage`,`ProductDesc`,`ProductCatagory`)"
        ."VALUES('$name','$priceP','$imageP','$desc','5')";

$success = $con->query($insert);

if ($success == FALSE) {
    $failmess = "Whole query ".$inset."<br>";
    echo $failmess;
    print('Invalid query: '.mysqli_error($con)."<br>");
} else {
    echo $name."was added<br>";
}
