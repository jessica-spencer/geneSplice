<?php

function sendMail($address,$id) {
    $mailacc = $address;

    $subject = "Gene Output";

    $message = "Here is your output file:
    <html>
    <head>
      <title>Test Mail</title>
    </head>
    <body>
        <p>" . $id . "
        <p><a href='http://www.w3schools.com/html/html_links.asp'>Open Link</a></p>
    </body>
    </html>
    ";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Noreply <noreply@example.com>' . "\r\n";

    $mail = mail($mailacc, $subject, $message, $headers);
}
?>
