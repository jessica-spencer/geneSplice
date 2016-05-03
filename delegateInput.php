<?
if(null!==($_POST["Run"])) {
        //get email name
        //$email = $_POST['Email'];
        //echo($email);
        /*if(null!==($_POST['Email'] or null!==$_FILES)){
            if(null==($_POST['Email'])) {
                echo("<p>email is not set</p>");
            }
            if(null==$_FILES) {
                print_r($_FILES);
                echo("<p>file not properly set</p>");
            }
        echo("<button href='Page2.html'>Return to Main Page</button>");
        }*/
    
    //----------Debug for email and file -------//
        echo("this is files");
        print_r($_FILES['fileName']);
        //$fileName = $_POST['fileName'];
        //echo($fileName);
        $filePlace = $_FILES['fileName']['tmp_name'];
        echo($filePlace);
        $fileName = $_FILES['fileName']['name'];
        echo($fileName);
        echo($_POST['Email']);
    //-------------------------------------------//
    
    //----------- check for email, and email validity ---------------//
    
    if(isset($_POST['Email']) && !empty($_POST['Email'])) {
            echo("You entered some email, but is it a valid email? \n");
            if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            // valid address
                echo("yes you did!\n");
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
    
    
        if(isset($_FILES) && !empty($_FILES)) {
            echo("there is a file, but is it the right file?\n");
       //     echo($_FILES);
            $fileName = $_FILES['fileName']['name'];
            $file_parts = pathinfo($filePlace);
            print_r($file_parts);
            
            if ($file_parts['extension']=="fasta.txt"){
                echo("hellllloooo right answer!");
            }
            else{
                echo("false");
            }
            switch($file_parts['extension'])
            {
                case "fasta.txt":
                    echo("this is the RIGHT ONE!");
                break;
                    
                case "": // Handle file extension for files ending in '.'
                case NULL: // Handle no file extension
                break;
            }

            
            
            
            
            
            
        }
        else{
            echo("files is emptly");
            echo($_FILES);
        }
        //get fileName
        $fileName = $_FILES['fileName'];
        echo($fileName);
        //get filePlace
        //$filePlace = $_FILES['fileName']['tmp_name'];
       // echo($filePlace);
        //get file contents
        //$file = file_get_contents($filePlace);
        //echo($file);
        }

else {
    echo("error - file and email not properly set");
    echo("<button href='Page2.html'>Return to Main Page</button>");
}



?>