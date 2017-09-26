<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>"Hello World"</title>
    </head>
    <body>
        
        <h1> This is the Day 1</h1>
        <?php
        
        $x=20;
        $y=30;
        
        echo "x = " . $x . "<br>";        
        echo "y = " . $y  . "<br>";
        
        function getValue(){
            global $x, $y;
            
            echo "Values withing function" . "<br>";
            echo "x = " . $x  . "<br>";
            echo "y = " . $y  . "<br>";
            
            static $x = 0;
        echo $x;
        $x++;
        }
        
        getValue();
        
        echo "Values outside function" . "<br>";
            echo "x = " . $x  . "<br>";
            echo "y = " . $y  . "<br>";
        
            getValue();
        echo "<br>";
    
        print "<h2>PHP is Fun!</h2>" . " Isn't?";
        
        $str = "This is a text message.";
        echo "string length : " . strlen($str) . "<br>";
        echo strrev($str) . "<br>";
        
        //constant variable
        define ('CONSTVAR',"Sample");
        echo CONSTVAR . "<br>";
        
        $myArray = array("First value","Second value","Third value");
        for($i=0;$i<5;$i++){
            echo '$myArray[' . $i . '] = '. $myArray[$i] . "<br>";
        }
        echo "<br><br><br>";
        //associative array
        $grade = array("Ashley" => "B", "Bob" => "A+", "Charles" => "D");
        foreach ($grade as $myKey => $myValue) {
            echo "$myKey" . "secured grade " . $myValue . "<br>";
        }
        
        arsort($grade);

        foreach($grade as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
        
        //multidimensional array
        $stud = array(
            array("Ashley",20,15),
            array("Bob",30,10),
            array("Charles",40,35),
            array("Donna",20,45)
        );
        
        echo "Multidimensional array <br>";
        for ($row=0;$row<4;$row++){
            for($col=0;$col<3;$col++){
                echo $stud[$row][$col] . " ";
            }
            echo "<br>";
        }
        
        $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);

        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
        }
        
        

        ?>
    </body>
</html>
