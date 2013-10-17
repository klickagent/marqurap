<html><head><title>Uebung</title></head><body>
<h1>Zu viele Fehler im Script</h1>

<p/>
<?php
ini_set('display_errors', 1);
?>
<?php
    $euro = 500;
    $kurs = 340.75;
    $drachme = $euro * $kurs;
    
    $string = "Peter sagt: ' Meine $drachme griechischen Drachmen sind $euro Euro wert.' <br />";
    echo $string;
    echo "Peter sagt: ' Meine $drachme griechischen Drachmen sind $euro Euro wert.'<br />";
    echo 'Peter sagt: \' Meine $drachme griechischen Drachmen sind $euro Euro wert.\'<br />';
    echo 'Peter sagt:  \' Meine '.$drachme.' griechischen Drachmen sind '.$euro.' Euro  wert. \' <br />';
    
?>
</body></html>
