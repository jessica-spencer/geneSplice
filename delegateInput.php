<?
if(null!==($_POST["Run"])) {
    
    //-------------------------------------------//
    
    //----------- check for email, and email validity ---------------//
    
    if(isset($_POST['Email']) && !empty($_POST['Email'])) {
            if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            // valid address
                $email=$_POST['Email'];
            }
            else {
                // invalid address
                echo("nope, try again\n");
            }
        }
        else{
            echo("no email\n");
            echo($_POST['Email']);
        }
    
    //--------- check for file, and file validity ------------------//
    

    $name = $_FILES['fileName']['name'];
    $type = $_FILES['fileName']['type'];

    $extension= strtolower(substr($name, strpos($name, ".")+1));

    $tmp_name = $_FILES['fileName']['type'];

    if (isset($name)) {
    if (!empty($name)){
    //remember to change to gtf
    if (($extension=='txt')&&$type=='text/plain') {
        echo "File Uploaded";
        //$file = file_get_contents($_Files['fileName']['tmp_name']);
    }
    else{
        echo"File must be txt";
    }
        
    }
}
else {
    echo("error - file and email not properly set");
    echo("<button href='Page2.html'>Return to Main Page</button>");
}
}

include("Table_Setter.php");


?>