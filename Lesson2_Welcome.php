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
        <style type="text/css">
            .error { color: #FF0000; }
        </style>
    </head>
    <body>
      
        <?php
            $errName=""; $errEmail=""; $errFrequency="";
            $name=$email=$address="";
            $rdo1Checked=$rdo2Checked=$rdo3Checked="";
            $tech = array();
          
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                if (isset ($_POST["name"])){
                    
                    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
                        $errName= "Only letters and white space allowed"; 
                    }
                    else
                    {
                        $name=$_POST["name"];
                    }
                } 
                if (empty($_POST["name"])){
                    $errName="Please enter name.";
                }
            
                
                if (isset ($_POST["email"])){
                    
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $errEmail = "Invalid email format"; 
                    }
                    else{
                        $email=$_POST["email"];
                    }
                    
                    if (empty($_POST["email"])){
                        $errEmail="Please enter Email";
                    }
                }
                
                if (isset($_POST["address"])){
                
                    $address=$_POST["address"];
                }
                
                if (isset($_POST["frequency"])){
                    if ($_POST["frequency"]=="Weekly"){
                        $rdo1Checked="Checked";
                    }
                    else if ($_POST["frequency"]=="Monthly"){
                        $rdo2Checked="Checked";
                    }
                    else if ($_POST["frequency"]=="Ocassionaly"){
                        $rdo3Checked="Checked";
                    }
                }
                else{
                    $errFrequency="Please select any one option.";
                }
                
                if(isset($_POST["tech"])){
                    $tech=$_POST["tech"];
                }
                
            }  
            
            
            
        ?>
       
        <pre>
        <form name="SurveyForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="name">Name</label> 
            <input type="text" name="name" placeholder="Enter Name" size="50" value="<?php echo htmlspecialchars($name);?>"> 
            <span class="error"><?php echo $errName; ?></span>             
            <label for="address">Address</label>
            <textarea name="address" placeholder="Enter your address" rows="4" cols="50"> <?php echo htmlspecialchars($address) ?></textarea>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter Email ID" size="50" value="<?php echo htmlspecialchars($email);?>"><span class="error"><?php echo $errEmail; ?></span>
            <label for="linkedInURL">LinkedIn Profile</label>
            <input type="text" name="linkedinURL" placeholder="Enter your LinkedIn profile URL" size="50">
            
            
            Which technology you are interested in?
            
            <select name="tech[]" size=5>
                <?php 
                    
                
                    $techList = array ("PHP","Java","Android","iOS","Shell Scripting");
                    $cnt = count($techList);
                    
                    for($i=0;$i<$cnt;$i++){
                        
                        echo '<option value="' . $techList[$i] . '"';
                        
                        if(in_array($techList[$i],$tech)){
                            echo "Selected";
                        }
                        
                        echo '>' . $techList[$i] . '</option>';
                    }
                    
                ?>
               
            </select>
    
            Would you like to subscribe our newsletter?<input type="checkbox" name="newsletter" value="Yes">
            
            How frequent do you want to receive the newsletters?
            <input type="radio" name="frequency" value="Weekly" <?php echo htmlspecialchars($rdo1Checked); ?>> Weekly 
            <input type="radio" name="frequency" value="Monthly" <?php echo htmlspecialchars($rdo2Checked); ?>> Monthly
            <input type="radio" name="frequency" value="Occasionaly" <?php echo htmlspecialchars($rdo3Checked); ?>> Occasionally
            <span class="error"><?php echo $errFrequency; ?></span>             
            <input type="submit" name="submit" value="Submit">
        </form>
        </pre>
    </body>
</html>
