<?php
$file = fopen("Database.txt",'r') or die("Unable to open file!");
$found = false;
$total = 0;
while(!feof($file) and  !$found){
    $line = fgets($file);
    if($line == ""){
        continue;
    }
    $linearr = explode(" ", $line);
    $namer = str_replace('|',' ',$linearr[0]);
    $idr = $linearr[2];
    if($idr == $product_id){
        $found = true;
        $price = $linearr[1];
        $qty = $linearr[3];
        $aisle = $linearr[5];
        $sale = $linearr[6];
        $initPrice = $linearr[7];
        $pic = $linearr[8];
        $link = $linearr[9];
    }
}
fclose($file);
?>