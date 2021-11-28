<pre>
<?php

$vetor = array(1, 2, 3, 4);

echo "O vetor tem ". count($vetor). " elementos <br/>";

$vetor[] = 5;
array_push($vetor, 6);
array_pop($vetor);

array_unshift($vetor, 0);
array_shift($vetor);

array_push($vetor, -2);

sort($vetor);
rsort($vetor);

asort($vetor);
arsort($vetor);

ksort($vetor);
krsort($vetor);

echo "O vetor tem ". count($vetor). " elementos <br/>";

print_r($vetor);

var_dump($vetor);
?>
</pre>