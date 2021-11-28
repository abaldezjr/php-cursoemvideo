<?php

$vetor = array(
    1 => "A",
    3 => "C",
    5 => "E"
);

$vetor[] = "Z";
unset($vetor[1]);

print_r($vetor);