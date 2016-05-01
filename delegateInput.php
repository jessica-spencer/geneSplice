<?
if(isset($_POST['Run'])) {
        //get email name
        $email = $_POST['Email'];
        //echo($email);
        //get fileName
        $fileName = $_FILES['fileName'];
        //echo($fileName);
        //get filePlace
        $filePlace = $_FILES['fileName']['tmp_name'];
       // echo($filePlace);
        //get file contents
        $file = file_get_contents($filePlace);
        echo($file);
}
else {
    echo("error - file and email not properly set");
}

?>