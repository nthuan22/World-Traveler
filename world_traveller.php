<?php
$cam_riel = 2103942;
$myan_kyat = 19092;
$norway_krone = 109;
$albania_lek = 9094;  

$cam_riel_to_usd =  0.00026;
$myan_kyat_to_usd = 0.00066;
$norway_krone_to_usd = 0.11;
$albania_lek_to_usd = 0.0090;

echo "We have spend $cam_riel riel in Cambodia, $myan_kyat kyat in Myanmar, $norway_krone krones in Norway, and $albania_lek lek in Albania.\n";

echo "\n";
echo "The amount of USD will be exchanged for:\n";

echo "- Cambodia Riel to USD: $".$cam_riel * $cam_riel_to_usd."\n";
echo "- Myanmar kyat to USD: $".$myan_kyat * $myan_kyat_to_usd."\n";
echo "- Norway krones to USD: $".$norway_krone * $norway_krone_to_usd."\n";
echo "- Albania lek to USD: $".$albania_lek * $albania_lek_to_usd."\n";

echo "\n";
echo "After conversion fee: \n";
echo "- Cambodia riel to USD: $".($cam_riel * $cam_riel_to_usd - 1)."\n";
echo "- Myanmar kyat to USD: $".($myan_kyat *$myan_kyat_to_usd - 1)."\n";
echo "- Norway krones to USD: $".($norway_krone * $norway_krone_to_usd - 1)."\n";
echo "- Albania lek to USD: $".($albania_lek * $albania_lek_to_usd - 1)."\n";

echo "Final amount: $".(546.02492 + 11.60072 + 10.99 + 80.846)."\n";





?>
