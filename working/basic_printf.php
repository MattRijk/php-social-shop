<?php 
/*
Desired output
<table>
<tr><th>Name</th><th></th></tr>
<tr><td></td><td></td></tr>
</table>



*/

$name = 'Doug';
$accountNumber = 123456;
$balance = 1443.43;

echo '<table border="1" cellpadding="5">';
echo '<tr><th>Name</th><th>Account Number</th><th>Balance</th></tr>';
echo '<tr>';
// %s = string %d = digits %.2f = floating point with 2 decimal places
// try adding a number after the "%" sign
printf('<td><pre>%s</pre></td><td><pre>%d</pre></td><td><pre>%.2f</pre></td>', $name, $accountNumber, $balance);
echo '</tr>';
echo '<table>';


?>