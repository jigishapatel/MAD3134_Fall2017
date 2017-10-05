<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>File handling</title>
    </head>
    <body>
        <?php
            echo readfile("Lesson5_myTest.txt") . "<br>";
            
            $myfile = fopen("Lesson5_myTest.txt", "r") or die("Unable to open file!");
            
            echo fread($myfile,filesize("Lesson5_myTest.txt")) . "<br>";
            
            $myfile = fopen("Lesson5_myJSON.json", "r") or die("Unable to open file!");            
            
            while(!feof($myfile)) {
                echo "Line : " . fgets($myfile) . "<br>";
                //echo "character : " . fgetc($myfile) . "<br>";
            }
            fclose($myfile);
            
            $flWrite = fopen("Lesson5_myWrite.txt", "w") or die("Unable to open file!");
            fwrite($flWrite, "This is fwrite() function.");
            
            fclose($flWrite);
        ?>
    </body>
</html>
