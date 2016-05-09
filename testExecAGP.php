<? 
// trying with the server side execution of the AGP
function execPerl ($perlFile,$parameters) {
    echo("here we go");
    $servername = "localhost";
    $username = "";
    $password = "";

    // Create connection
  /*  $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } */
    
    
    echo "Connected successfully";
    error_log("START THE COOOOOODE ______________________");
    //error_log("AGAIN _______________________________");
    error_log(exec('pwd'));
    chdir('../AGP_things/AGP');
    error_log("----running code ----");
    //error_log(exec('cd ../AGP_things/AGP'));
    error_log(exec('pwd'));
    $cmd = 'perl ' . $perlFile . ' ' . $parameters;
    echo($cmd);
    error_log(exec($cmd));
    //error_log(exec('perl ../AGP_things/AGP/Ensembl_Parser2.pl Mus_musculus.GRCm38.84.gtf'));
    //error_log($result);
    error_log("end-----------------------");
    
}
//execPerl('Ensembl_Parser2.pl','Mus_musculus.GRCm38.84.gtf');
execPerl('Ensembl_Parser2.pl','Mus_musculus.GRCm38.84.gtf');


function helloExec ($perlFile,$parameters) {
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
    //error_log(exec('cd ../AGP_things/AGP'));
    error_log(exec('pwd'));
    $cmd = 'perl ' . $perlFile . ' ' . $parameters;
    echo($cmd);
    error_log(exec($cmd));
    //error_log(exec('perl ../AGP_things/AGP/Ensembl_Parser2.pl Mus_musculus.GRCm38.84.gtf'));
    //error_log($result);
    error_log("end-----------------------");
    
}

?>