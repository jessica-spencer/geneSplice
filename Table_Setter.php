<?php
include("initDB.php");
function connectServer () {
    $servername = "localhost";
    // Create connection
    $conn = new mysqli($servername, "", "","AGP_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo("failure to connect to database");
    }
    return $conn;
}
/****************************************************************************
* isFile checks our data for a duplicate fileName. If not in data, make new
* entry, else returns results.
*****************************************************************************/
function isFile($filename){
   // checks for the file name
   $fileCheck = "SELECT * FROM `fastaFiles` WHERE fileName ='" . $filename . "'";
   // assigns the fileCheck to a new variable results
   $results = $conn->query($fileCheck);
   // returns the results
   return($results);
   // boolean comparison for fileCheck status, T/F
   if ($conn->query($fileCheck) !== null) {
     // file is already in table
     echo "File Already Exists";
     // returns true value
     return TRUE;
   //if not a file
   } else {
     // insert the file to the table, calling insert method
     insert($filename);
     // echos file does not Exists
     echo "File Does Not Exist";
     // return false value
     return FALSE;
   }
}
/****************************************************************************
* insert function takes data from isFile if the file does not exist in our
* table and "inserts" the file with a incrementing identification number, the
* fileName, the output file (all of it), and the date.
****************************************************************************/
function insert($filename) {
    $date = date("Y/m/d");

    $request = "INSERT INTO fastaFiles(id, fileName, outputFiles, reg_date) VALUES(0,'" . $filename ."'',';sakldjf;alskdjf;alsdkjf;asldkfjasd;lfkj','" . $date . "'";
    $results = $conn->query($request);
    if ($conn->query($request) === TRUE) {
    echo "New record created successfully";
    } else {
    echo  $sql . "<br>" . $conn->error;
    }
 }



/*function emailInsert($email,$fileName) {
    $request = "INSERT INTO emailTable (email, fileName) VALUES (" . $email .  "," . $fileName . ")";
    $results = $conn->query($request);

}
function getEmail($)*/
/******************************************************************************
* Main completes the table. We check to see if the input file has already been
* used and has an output file. If this is true, we send the email. If this is
* false, we run the Winters-Hilt code and complete our table with the number,
* fileName, output, and date.
******************************************************************************/
function main(){
    // input file variable
    $inFile = getFile();
    // boolean operation variable for $inFile's session_status
    $hasOutput == FALSE;

}
?>
