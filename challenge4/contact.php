<?php
 if (isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];

     $mailTo ="info@raikoboyen.nl";
     $headers = "from: ".$mailFrom;
     $txt = "Je hebt een mail van: " .$name.".\n" .$email. ".\n\n".$subject;

     mail($mailTo, $subject, $txt, $headers);
     header("Location: index.php?");
 }
?>