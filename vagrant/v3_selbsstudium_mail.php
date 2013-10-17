
<!-- This E-Mail Script only works with a valid postfix configuration (please 
use my vagrant file (Vorlesung 1) and fill in your valid postscript tags in to bootstrap.sh
if you do not have a valid postfix setup)
Cheers
Raphael Marques
-->
<!doctype html>
<html>
<head>
<?php

if (isset($_POST['submit'])) {
        $to = $_POST['email'];
        $sub = $_POST['subject'];
        $body = $_POST['body'];
        $from = "marqurap@students.zhaw.ch";
        if (mail($to, $subject, $body, 'From: ' . $from)) {
                echo 'Nachricht wurde an '.$to.' gesendet';
        } else {
                echo 'Nachricht konnte nicht gesendet werden';
        }
        
        print '<title>Raphaels E-Mail Generator</title>
</head>
<body>
    <h1> Raphaels E-Mail Generator</h1>
<form method="post">
e-Mail:	<input type="email" name="email" value="'.$to.'"><br>
    
Subject: <input type="text" name="subject" value="'.$sub.'"><br>

Nachricht:	<textarea rows="5" cols="80" name="body" >'.$body.'</textarea><br>
<input type="submit" name="submit" value="Abschicken">
</form>

</body>';
}
else{
    print '<title>Raphaels E-Mail Generator</title>
</head>
<body>
    <h1> Raphaels E-Mail Generator</h1>
<form method="post">
e-Mail:	<input type="email" name="email"><br>
    
Subject: <input type="text" name="subject"><br>

Nachricht:	<textarea rows="5" cols="80" name="body"></textarea><br>
<input type="submit" name="submit" value="Abschicken">
</form>

</body>';
    
    
}

?>


</html>