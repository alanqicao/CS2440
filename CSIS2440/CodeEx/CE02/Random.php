<html>
    <head>
        <meta charset="UTF-8">
        <title>Rando Page</title>
    </head>
    <body>
        <?php
        $score = 0;
        print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
        //here write a loop that will run 10 times and compare the scores, increment the score if grater, decrementing if less and leaving it if equal
        for($round=0;$round<10;$round++){
            $playerscore =rand(1,100);
            $compscore = rand(1,100);
            print("<tr><td>$playerscore </td><td>$compscore </td>");
            if($playerscore < $compscore){
                print("<td>Player lost this round</td></tr>\n");
                $score--;
            }elseif($playerscore >$compscore){
                print("<tb>Player won this round</tb></rt>\n");
                $score++;
            }else{
                print("<tb>Player tied this round</tb></tr>\n");
            }
        }
          
        //this should print each round out in the table.
        print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");
        ($score>0)?print("<p>Good Job</p>"):print("<p>Sorry you lost</p>");

        //Year of the---

        $year = date("Y");
        print("<p>It is the year of the:<br>");
        switch($year % 12){
            case 0:
                echo 'Money</p>';
                break;
            case 1:
                echo 'Rooster</p>';
                break;
            case 2:
                echo 'Dog</p>';
                break;
            case 3:
                echo 'Boar</p>';
                break;
            case 4
                :
                echo 'Rat</p>';
                break;
            case 5:
                echo 'Ox</p>';
                break;
            case 6:
                echo 'Tiger</p>';
                break;
            case 7:
                echo 'Rabbit</p>';
                break;
            case 8:
                echo 'Dragon</p>';
                break;
            case 9:
                echo 'Snake</p>';
                break;
            case 10:
                echo 'Horse</p>';
                break;
            case 11:
                echo 'Lamb</p>';
                break;
            default:
                echo "Something broke";
        }
        
        //Here you will write out a switch that will print out the year using the modulo(% 12)
        //Monkey, roster, dog, boar, rat, ox, tiger, rabbit, dragon, snake, horse, and lamb is the order, do not forget a default case
        ?>
    </body>
</html>