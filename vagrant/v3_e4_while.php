<html><head><title>Uebung</title></head><body>
        <h1> While and Style</h1>
<p/>
<?php
ini_set('display_errors', 1);
?>
<?php
  $i = 1;
  while($i<100){
      echo $i."<br />";
      $i = $i+=$i;
      
  }
  echo "<br />";
  $i = 35;
  for ($i; $i>0; $i = $i-5){
      echo '<p><span style="font-size:'.$i.'px" > Isch voll '.$i.' Pixel!!</span></p>';
    
  }
    
?>

</body></html>
