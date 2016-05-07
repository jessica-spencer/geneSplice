<?php
include("initDB.php");
include("Email.php");

$inFile = "sdfsdfsdfsf";
$email = "kjkjkj@yahoo.edu";

/******************************************************************************
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
        execPerl($perlCode, $parameter);
        //put output on server
        //then do email thing
        
    }

}
main($inFile,$email);
?>
