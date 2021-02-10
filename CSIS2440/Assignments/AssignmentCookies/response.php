<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$UserName = htmlentities($_POST['UserName']);
$UserName = strtolower($UserName);
$UserName = ucwords($UserName);
$Products = $_POST['Products'];
$ShipState = htmlentities($_POST['ShipState']);
$ShipState = strtoupper($ShipState);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/response.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        //print out name and welcome message
        print("<p class='title'>Wellcome $UserName, to Craft Cookie Cottage. A fun way to buy cookies online</p>");
        
        //show an image of the product or service they slect    and 
        //show the product text from productinfo for the product
  
               $ProductArray = file('text/productinfo.txt');
        switch($Products){
            case 0:
                print(" <img class='products__image' src='img/product1.jpg' alt=''> ");
                print( "</br>".$Product = $ProductArray[0].$ProductArray[1].$ProductArray[2]);
                break;
            case 1:
                print(" <img class='products__image' src='img/product2.jpg' alt=''> ");
                print("</br>".$Product = $ProductArray[3].$ProductArray[4]);
                break;
            case 2:
                print(" <img class='products__image' src='img/product3.jpg' alt=''> ");
                print("</br>".$Product = $ProductArray[5].$ProductArray[6]);
                break;
            case 3:
                print(" <img class='products__image' src='img/product4.jpg' alt=''> ");
                print("</br>".$Product = $ProductArray[7].$ProductArray[8]);
                break;
             case 4:
                 print(" <img class='products__image' src='img/product5.jpg' alt=''> ");
                print("</br>".$Product = $ProductArray[9].$ProductArray[10]);
                break;
             default:
                echo "Pleas make a new selection";
        }
        
        //check if the asking location is in the listed service area
        //read file
         $AvailablState = explode(",",file_get_contents("text/servicearea.txt"));
         
         $check = False; 
         
        for($i=0; $i<count($AvailablState);$i++){

            if($ShipState==$AvailablState[$i]){
               $check = True;    
            }     
        }
           
           
         if($check)
         {
             print("</br></br> Your state: ".$ShipState." are available for shipping.");
         
         }
         else{
             print("</br> </br> Your state: ".$ShipState." is not in our service area.");
         }
        
        ?>
    </body>
</html>
