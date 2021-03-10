<?php
//write the search statment
$search ="SELECT * FROM CSIS2440.Products where ProductName like '%$name%'"
        . "Order By ProductName";
$return = $con->query($search);

if (!$return) {
    $message = "Whole query " . $search;
    echo $message;
    die('Invalid query: ' . mysqli_error($con));
}
echo "<table>"
        . "<th>Name</th>"
      //  . "<th width='10%'>X,Y,Z</th>"
        . "<th>Price</th>"
        . "<th>Image</th>"
        . "<th>Description</th>";
while ($row = $return->fetch_assoc()) {
    echo    "<tr><td>".$row['ProductName']
            //."</td><td>".$row['PosX']." ,".$row['PosY']." ,".$row['PosZ']
            ."</td><td>".$row['ProductCost']
            
            ."</td><td>".$row['ProductImage']
            ."</td><td>".$row['ProductDesc']
            
            ."</td</tr>";
    //print out a table row with the data in it
}
echo "</table>";
