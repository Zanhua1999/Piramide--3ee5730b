<?php
$line = readline("Hoeveel stapels wil je hebben?");
// $blabla = '';
for($i = 1; $i <= $line; $i++){
    echo str_repeat("*", $i);
    echo PHP_EOL;
//     $blabla = $blabla . "*";
//  echo $blabla . "\n";
}

?>