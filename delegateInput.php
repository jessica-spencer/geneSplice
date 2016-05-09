<?
if(null!==($_POST["Run"])) {
    
    //-------------------------------------------//
    
    //----------- check for email, and email validity ---------------//
    $error = "";
    
    
    if(isset($_POST['Email']) && !empty($_POST['Email'])) {
            if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            // valid address
                $email=$_POST['Email'];
            }
            else {
                // invalid address
                $error = $error . " invalid email address";
                //echo("nope, try again\n");
            }
        }
        else{
            $error = $error . " invalid email address";
            //echo("no email\n");
            //echo($_POST['Email']);
        }
    
    //--------- check for file, and file validity ------------------//
    

    $name = $_FILES['fileName']['name'];
    $type = $_FILES['fileName']['type'];

    $extension= strtolower(substr($name, strpos($name, ".")+1));

    $tmp_name = $_FILES['fileName']['type'];

    if (isset($name)) {
    //remember to change to gtf
    if (($extension=='txt')&&$type=='text/plain') {
        $file = file_get_contents($_FILES['fileName']['tmp_name']);
    }
    else{
        $error = $error . " File must be have .gtf extension";
    }
        
    
}
else {
    $error=$error . " file not properly set";
    
}
}
if ($error != ""){
    //there is an error
    //go to infoPage.html
    include("information page.html");
}
else {
    include("Table_Setter.php");
}

?>