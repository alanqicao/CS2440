<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
        <?php 
         /* 
             Page creat by Qi
             CSIS 2440 DAY1
         */
        $name="Qi Cao";
        $age = 33;
        $male = true;
        $icecream = "Pistachio";
        $imagefile="img/evalogo.jpeg";
        ?>
    </head>
    <body>
        <?php
        echo "<p style ='font:tahomn; color:red;'>Hello world I am a echo, this is my first PHP page!</p>";
        print("<p>My name:".$name."Who is $age years old, and likes $icecream ice-cream </p>");
        print('<p>We are using variables $name, $age, $icecream </p>');
        print("<img src='$imagefile' height='100'>")
                
        
        ?>
    </body>
</html>
