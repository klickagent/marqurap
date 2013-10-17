<html><head><title>Uebung</title></head><body>
<h1>Zu viele Fehler im Script</h1>

<p/>
<?php
ini_set('display_errors', 1);
print 'Der Wert i ist:'.$i;
$i = 10/0;
error_repoting();


?>
</body></html>
