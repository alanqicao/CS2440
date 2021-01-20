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
        //this should print each round out in the table.
        print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");

        //Year of the---

        $year = date("Y");
        print("It is the year of the:<br>");
        //Here you will write out a switch that will print out the year using the modulo(% 12)
        //Monkey, roster, dog, boar, rat, ox, tiger, rabbit, dragon, snake, horse, and lamb is the order, do not forget a default case
        ?>
    </body>
</html>