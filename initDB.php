<?php
//this will handle all of the backend
$servername = "localhost";
// Create connection
$conn = new mysqli($servername, "", "","AGP_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo("failure to connect to database");
} 

$results = $conn->query("SELECT * FROM AGP_db WHERE NAME IS fastaFiles"); //wrong syntax
echo($results);
if (!$results){
    //make the table
    
    $sql = "CREATE TABLE fastaFiles(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fileName VARCHAR(30) NOT NULL,
        outputFiles VARCHAR(90) NOT NULL,
        reg_date TIMESTAMP
        )";
    if ($conn->query($sql)!=TRUE) {
        echo "Table creation was not successfull";
    }
}


?>