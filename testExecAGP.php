<? 
// trying with the server side execution of the AGP
//include("initDB.php");
echo("here we go");
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
error_log("START THE COOOOOODE ______________________");
//error_log("AGAIN _______________________________");
error_log(exec('pwd'));
//chdir('../AGP_things/AGP');
error_log("----running code ----");
//error_log(exec('cd ../AGP_things/AGP'));
error_log(exec('pwd'));
error_log(exec('perl ../AGP_things/AGP/Ensembl_Parser2.pl Mus_musculus.GRCm38.84.gtf'));
//error_log($result);
error_log("end-----------------------")
?>