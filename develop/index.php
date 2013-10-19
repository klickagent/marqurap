<html><head>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css"><title>Uebung</title></head><body>
        <h1> Arrrrrrrray!</h1>
        
<p/>
<table border ="1">
    <tr>
        <th> Land</th>
        <th> Hauptstadt</th>
    </tr>
    <?php
ini_set('display_errors', 1);
?>
<?php
  $arr = array("Schweiz" => "Bern", "Frankreich" => "Paris");
  $arr["Deutschland"] = "Berlin";
  $arr["Italien"] = "Rom";
  $arr["Spanien"] = "Madrid";
  
  foreach ($arr as $key => $value) {
    print "<tr> <th> $key </th><th>$value </th></tr>";
}
    
?>
</table>
</body></html>