<?php
header("Content-Type: text/plain; charset=UTF-8");
echo "Nama 80:\n";
echo str_repeat("A", 80);
echo "\nNama 81:\n";
echo str_repeat("A", 81);
echo "\nPesan 500:\n";
echo str_repeat("A", 500);
echo "\nPesan 501:\n";
echo str_repeat("A", 501);
echo "\nEmail 120:\n";
echo str_repeat("a", 60) . "@" . str_repeat("b", 55) . ".com";
echo "\nEmail 121:\n";
echo str_repeat("a", 60) . "@" . str_repeat("b", 56) . ".com";
?>
