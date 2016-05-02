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
function insert($filename) {
    $date = date("Y/m/d");
    
    $request = "INSERT INTO fastaFiles(id," . $filename . ", outputFiles, reg_date) VALUES               (0,'jessica',';sakldjf;alskdjf;alsdkjf;asldkfjasd;lfkj','" . $date . "'";
    $results = $conn->query($request);  

    if ($conn->query($request) === TRUE) {
    echo "New record created successfully";
    } else {
    echo  $sql . "<br>" . $conn->error;
    }
 }

function isFile($filename){
    $query = "SELECT * FROM `fastaFiles` WHERE fileName ='" . $filename . "'";
    $results = $conn->query($request);
    return($results);
    
    if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
    } else {
    return FALSE;
    }
}
    
function getFile($filename) {
    $query = "SELECT * FROM `fastaFiles` WHERE fileName ='" . $filename . "'";
    $results = $conn->query($request);
    return($results);

    if ($conn->query($query) === TRUE) {
    $last_id = $conn->insert($filename);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
    echo "Error: there is not file with that name" . $sql . "<br>" . $conn->error;
    }
}
/*function emailInsert($email,$fileName) {
    $request = "INSERT INTO emailTable (email, fileName) VALUES (" . $email .  "," . $fileName . ")";
    $results = $conn->query($request);
    
}
function getEmail($)*/

function run(){
    if($conn->insert()){
        $results.insert()
    }
    if ($conn->isFile()) {
        $results.isFile()
    }
    if ($conn->getFile) {
        $results.getFile()
    }
}

?>