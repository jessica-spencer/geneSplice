<?
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


function insert($filename, $conn) {
    $date = date("Y/m/d");
    
    $request = "INSERT INTO fastaFiles(id," . $filename . ", outputFiles, reg_date) VALUES               (0,'jessica',';sakldjf;alskdjf;alsdkjf;asldkfjasd;lfkj','" . $date . "'";
    $results = $conn->query($request);   
}

function isFile($filename, $conn){
    $query = "SELECT * FROM `fastaFiles` WHERE fileName ='" . $filename . "'";
    $results = $conn->query($request);
    return($results);
    
}
    
function getFile($filename, $conn) {
    $query = "SELECT * FROM `fastaFiles` WHERE fileName ='" . $filename . "'";
    $results = $conn->query($request);
    return($results);
}

/*function emailInsert($email,$fileName) {
    $request = "INSERT INTO emailTable (email, fileName) VALUES (" . $email .  "," . $fileName . ")";
    $results = $conn->query($request);
    
}

function getEmail($)*/

?>