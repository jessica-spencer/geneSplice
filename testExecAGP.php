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
$returnVal = error_log("hello there error log HIIIIII");
error_log("\n" . $returnVal);
echo("START THE COOOOOODE ______________________");
$error = shell_exec("perl ..AGP_things/AGP/GFF_Collect_fromEnsembl3.pl");
echo($error);
error_log("yup")
?>