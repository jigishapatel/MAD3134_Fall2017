<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    /*
    // Create database
    $sql = "CREATE DATABASE mad3134";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully . <br>";
    } else {
        echo "Error creating database: " . $conn->error . " <br>";
    }
     
     */
    
    //Use database
    $sql = "USE mad3134";
    if ($conn->query($sql) === TRUE) {
        echo "Database changed successfully . <br>";
    } else {
        echo "Error connecting database: " . $conn->error. " <br>";
    }
    
    /*
    $sql = "CREATE TABLE student ("
            . "studId int(4) AUTO_INCREMENT PRIMARY KEY,"
            . "studName varchar(40),"
            . "gender varchar(6),"
            . "age int(2))";
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully . <br>";
    } else {
        echo "Error creating table: " . $conn->error. " <br>";
    }
    */
    
    
    /*
    //Insert data
    //$sql = "INSERT INTO student (studName,gender,age) VALUES ('Ashley','Female',20)";
    $sql = "INSERT INTO student (studName,gender,age) VALUES ('Bob','Male',23); ";
    $sql .= "INSERT INTO student (studName,gender,age) VALUES ('Charles','Male',22); ";
    $sql .= "INSERT INTO student (studName,gender,age) VALUES ('Donna','Female',21);";
    
    if ($conn->multi_query($sql) === TRUE) {
    //if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "Record inserted successfully : ". $last_id . " <br>";
    } else {
        echo "Error inserteing record: " . $conn->error. " <br>";
    }
     */
    
    /*
    //insert using prepare statement
    $stmt = $conn->prepare("INSERT INTO student (studName,gender,age) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $studName, $gender, $age);

    // set parameters and execute
    $studName = "Jenny";
    $gender = "Female";
    $age = 23;
    $stmt->execute();
    */
    
    //select records
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    
    
	
    /*
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["studId"]. " - Name: " . $row["studName"]. " " . $row["gender"]. " " . $row["age"]."<br>";
        }
    } else {
        echo "0 results";
    }
    */
    
    echo "<br>Total Records Fetched : " . mysqli_num_rows($result) . "<br>";
    if(mysqli_num_rows($result)>0)
    {
	echo "<table border=1> <tr><th>Student ID</th><th> Name</th><th>Gender</th><th>Age</th></tr>";
	while($row = mysqli_fetch_row($result))
	{
            //var_dump($row);
            echo "<tr><td>" .$row[0] ."</td><td> " . $row[1] . " </td><td> " . $row[2] . " </td><td> " . $row[3] . " </td></tr>";
	}
	echo "</table>";
    }
    
    // sql to delete a record
    $sql = "DELETE FROM student WHERE studId=7";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    //close connection
    //$stmt->close();
    $conn->close();
?>