<html><head><title>Uebung</title></head><body>
        <h1> Packete</h1>
<p/>
<?php
ini_set('display_errors', 1);
?>
<?php
    $pack = rand(0, 80);
    switch(TRUE){
       
       case($pack <= 20):
           print "Packet Kategorie: S <br /> Gewicht: $pack KG";
           break;
       case($pack > 20 && $pack <=40):
           print "Packet Kategorie: M <br /> Gewicht: $pack KG";
           break;
       case($pack > 40 && $pack <=60):
           print "Packet Kategorie: L <br /> Gewicht: $pack KG";
           break;
       case($pack > 60):
           print "Packet Kategorie: XL <br /> Gewicht: $pack KG";
           break;
    }
    
?>
<p> Packet Kategorien: <br />
    S: 0-20 KG <br />
    M: 20-40KG <br />
    L: 40-60KG <br />
    XL: 60+ KG <br />
</p>
</body></html>
