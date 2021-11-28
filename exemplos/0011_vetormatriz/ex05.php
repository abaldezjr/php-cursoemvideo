<pre>
<?php

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

print_r($matriz);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$i][$j] . ' ';
    }
    echo '<br/>';
}

foreach($matriz as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        echo '['. $key1. ','.$key2. ']' . ' => ' . $value2 . '<br/>';
    }
}


?>
</pre>