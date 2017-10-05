<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //include_once 'Lesson4_OOP.php';
        //include 'Lesson4_OOP.php';
        require_once 'Lesson4_OOP.php';
        //require 'Lesson4_OOP.php';
        
        // put your code here
         $s2 = new Student();
         $sData = [];
         
         $s2->setData(101, "PN");
         $sData=$s2->getData();
        
         
         
         foreach ($sData as $i){
             echo "$i <br>";
         }
         
         for ($i=0;$i<count($sData);$i++){
             echo $sData[$i] . " ";
         }
         
        ?>
    </body>
</html>
