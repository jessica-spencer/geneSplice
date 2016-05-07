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
else {
    echo("all good");
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
$conn->close();
/****************************************************************************
* isFile checks our data for a duplicate fileName. If not in data, make new
* entry, else returns results.
*****************************************************************************/
function isFile($filename){
    //connect
    $servername = "localhost";
    // Create connection
    $conn = new mysqli($servername, "", "","AGP_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo("failure to connect to database");
    } 
    else {
        echo("all good");
    }
    
   // checks for the file name
   $fileCheck = "SELECT * FROM `fastaFiles` WHERE fileName ='" . $filename . "'";
    echo("<br><br> this is the first query isFile()<br>");
    echo($fileCheck . "<br><br>");
    
   // assigns the fileCheck to a new variable results
   $results = $conn->prepare($fileCheck);
    $results->execute();
    $results->store_result();
    $row = $results->num_rows;
    if ($row !== 0) {
         // file is already in table
         echo "File Already Exists";
         return TRUE;
    } 
    else {
         echo("file does not exist");
         return FALSE;
   }
    $conn->close();
}
/****************************************************************************
* insert function takes data from isFile if the file does not exist in our
* table and "inserts" the file with a incrementing identification number, the
* fileName, the output file (all of it), and the date.
****************************************************************************/
function insert($filename,$outputFiles) {
    //connect
        $servername = "localhost";
    // Create connection
    $conn = new mysqli($servername, "", "","AGP_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo("failure to connect to database");
    } 
    else {
        echo("all good");
    }
    $date = date("Y/m/d");

    $request = "INSERT INTO fastaFiles(id, fileName, outputFiles, reg_date) VALUES(0,'" . $filename . "','". $outputFiles . "','" . $date . "');";
    echo("request:  " . $request );
    $results = $conn->query($request);
    if ($results === TRUE) {
    echo "New record created successfully";
    } else {
    echo  $conn->error;
    }
    $conn->close();
 }

/****************************************************************************
* get ID function gets the ID of the row that contains the file + output files etc. 
****************************************************************************/
function getID($fileName) {
    //connect
    $servername = "localhost";
    // Create connection
    $conn = new mysqli($servername, "", "","AGP_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo("failure to connect to database");
    } 
    else {
        echo("all good");
    }

    $request = "SELECT * FROM `fastaFiles` WHERE fileName = '" . $fileName .  "';";
    $results = $conn->prepare($request);
    $results->execute();
   // $row = $results->num_rows;
   
    $results->store_result();
    $results->bind_result($id, $fileName, $outputFile, $date);
    while($results->fetch()){
        $idOut = $id;
        echo 'this is your out ID + File: ' . $id . "---   " . $outputFile . "<br>";
    }
    
    
    if ($id !== null) {
        return $idOut;
    } 
    else {
        echo("error: <br>");
        echo  $conn->error;
        return null;
    }
    
        
        
    $conn->close();
    
}

?>