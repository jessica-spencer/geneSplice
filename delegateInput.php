<?
if(null!==($_POST["Run"])) {
    
    //----------Debug for email and file -------//
    
        $filePlace = $_FILES['fileName']['tmp_name'];
        $fileName = $_FILES['fileName']['name'];
    //-------------------------------------------//
    
    //----------- check for email, and email validity ---------------//
    
    if(isset($_POST['Email']) && !empty($_POST['Email'])) {
            if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            // valid address
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

    if (($extension=='txt')&&$type=='text/plain') {
        echo "File Uploaded";
    }else{
        echo"File must be txt";
    }
        
    }
}
else {
    echo("error - file and email not properly set");
    echo("<button href='Page2.html'>Return to Main Page</button>");
}
}
?>