<?php
$item = "Bananas";
$quantity = 3;
$unitPrice = 3.40;
$total = $quantity * $unitPrice;
$people = 3;
$tip = ($total / 100) * 12.5;
$totalbill = $total + $tip;
$share = $totalbill / $people;

$formattedUnitPrice = number_format($unitPrice, 2);
$formattedTotal = number_format($total, 2);
$formattedTip = number_format($tip, 2);
$formattedTotalBill = number_format($totalbill, 2);
$formattedShare = number_format($share, 2);

echo "{$quantity} x {$item} @ £{$formattedUnitPrice} = £{$formattedTotal}" . PHP_EOL;
echo "Total with 12.5% tip: £{$formattedTotalBill}" . PHP_EOL;
echo "Each of {$people} pays £{$formattedShare}" . PHP_EOL;
?>



