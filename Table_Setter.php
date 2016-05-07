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
        $id = '123456';
        //send mail
        sendMail($email,$id);
        
    }
    else {
        //run WH's code
        echo("<br> The file DOES NOT exist <br>");
        echo("<br> run code............ <br>");
        $perlCode = 'hello.pl';
        $parameter = '';
        
        //execPerl($perlCode, $parameter);
        
        //for testing use helloExec()
        helloExec($perlCode,$parameter);
        
        //put output FILE NAMES on server so we can know which
        //ones to access later
        
        $id = 'WAT NOW BITCHES SENT AN EMAIL';
        //then do email thing
        sendMail($email,$id);
        
    }

}


main($name,$email);
?>
