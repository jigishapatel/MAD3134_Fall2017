<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            //read n decode json
            $content = file_get_contents("Lesson5_myJSON.json");
            
            
            $json = json_decode($content,true);
            
            echo "<pre>" . print_r($json,true) . "</pre>";
           
            echo $json['address']['city'] . "<br>";
            echo $json['phoneNumbers'][0]['type']." : ".$json['phoneNumbers'][0]['number'];

        ?>
    </body>
</html>
