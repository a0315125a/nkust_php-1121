<?php
$country=array(GBP,USD,JPY,CNY,EUR);
$rate = array(37.92,28.3,0.27,4.35,33.84);
$NTD = 30000;
//$data = array(30000,20000,45000,80000,120000);
 echo "NTD $NTD 元<br>";
for($i=0;$i<count($rate);$i++){
 echo " to $country[$i] = ".round($NTD/$rate[$i],2)."元<br>";	
}



?>