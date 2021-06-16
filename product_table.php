<?php
$file = fopen("Database.txt",'r') or die("Unable to open file!");
while(!feof($file)){
    $line = fgets($file);
    if($line == ""){
        continue;
    }
    $linearr = explode(" ", $line);
    $namer = str_replace('|',' ',$linearr[0]);
    $pricer = $linearr[1];
    $idr = $linearr[2];
    $qtyr = $linearr[3];
    $aisler = $linearr[5];
    $saler = $linearr[6];
    $initPricer = $linearr[7];
    $pic = $linearr[8];
    $link = $linearr[9];
    if($aisler == $givenaisle){
        echo "<tr>
        <td><img src='images/$pic'></td>
        <td>$namer</td>";
        if($saler == "Yes"){
            echo "<td style='color:red;'><del style='color:black;'>$" . "$initPricer</del>$" . "$pricer</td>";
        }
        else echo"<td>$" . "$pricer</td>";
        echo " <td><a href='$link'>Click For More Info</a></td>
        </tr>";
    }
}
fclose($file);
?>