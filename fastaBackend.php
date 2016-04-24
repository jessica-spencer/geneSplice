<?php
//this will handle all of the backend
$servername = "localhost";
// Create connection
echo("got here1");
$conn = new mysqli($servername, "", "","cars");
echo("got here");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo("failure");
} 
echo("connected successfully");

//turn this into a linear program

//SYNTAX ERROR HERE
$results = $conn->query("SELECT * FROM cars WHERE NAME IS fastaFiles"); //wrong syntax
echo('hello');
echo($results);
if (!$results){
    //make the table
    $sql = "CREATE TABLE fastaFiles(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fileName VARCHAR(30) NOT NULL,
        outputFiles VARCHAR(90) NOT NULL,
        reg_date TIMESTAMP
        )";
    if ($conn->query($sql)==TRUE) {
        echo "created successfully";
    }
    else{
        echo "not so much";
    }
//}
//else{
    echo('already created?');
//}
   
?>