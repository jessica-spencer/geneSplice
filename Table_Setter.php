<?php
include("initDB.php");
include("Email.php");
include("testExecAGP.php");

/******************************************************************************

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$name (file name) and $email come frome delegateInput.php, which includes this file after it runs 
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

* Main completes the table. We check to see if the input file has already been
* used and has an output file. If this is true, we send the email. If this is
* false, we run the Winters-Hilt code and complete our table with the number,
* fileName, output, and date.
******************************************************************************/
function main($file,$email){
    // boolean operation variable for $inFile's session_status
    if(isFile($file)==TRUE){
        echo("<br> The file exists <br>");
        //get file ID
        $id = getID($file);
        print_r($id);
        //send mail
        sendMail($email,$id);
        
    }
    else {
        //run WH's code
        echo("<br> The file DOES NOT exist <br>");
        echo("<br> run code............ <br>");
        $perlCode = 'hello.pl';
        $parameter = '';
        // FIRST! create array of all files in directory 
        $dir = ".";
        $filesAtFirst = scandir($dir);
        
        //THEN! run WH's code 
        //execPerl($perlCode, $parameter);
        //for testing use helloExec()
         echo("0");
        helloExec($perlCode,$parameter);
        echo("1");
        //NEXT! see what files were created by comparing then to now
        $filesNow = scandir($dir);
        $outputFiles = array_diff($filesNow,$filesAtFirst);
        echo("2");
        print_r($outputFiles);
        //THEN! put those file names on the server
        //$diffLen = count($outputFiles);
        //echo($diffLen);
        echo("3");
        foreach ($outputFiles as &$outFile) {
            echo("name of out file is : ". $outFile . "<br>");
            insert($file, $outFile);
            
        }
        echo("4");
        //put output FILE NAMES on server so we can know which
        //ones to access later
        $id = getID($file);
        echo("5");
        //then do email thing
        sendMail($email,$id);
        
    }

}

main($name,$email);
?>
