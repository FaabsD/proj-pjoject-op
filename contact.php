<?php 

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "19959@ma-web.nl";
    $headers = "From: ".$mailFrom;
    $txt = "Je hebt een bericht ontvangen van ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?Mailsent");
}
?>