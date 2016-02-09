<?php
$cmd = "kratikal.in";
$tool = "nmap";
$handle = popen($tool." ".$cmd." -v 2>&1", 'r');
while(!feof($handle)) {
    $buffer = fgets($handle);
    echo "$buffer<br/>\n";
    ob_flush();
    flush();
}
pclose($handle);

?>

