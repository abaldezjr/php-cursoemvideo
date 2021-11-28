<?php

$texto = "Curso em video";

echo str_word_count($texto, 0);

echo '<br/>';

print_r(str_word_count($texto, 1));

echo '<br/>';

print_r(str_word_count($texto, 2));