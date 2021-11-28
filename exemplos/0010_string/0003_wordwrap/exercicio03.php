<?php

$texto = "Aqui temos um texto gigante criado no php e vai mostrar como funciona a função wordwrap";
$r = wordwrap($texto, 8, "<br/>");
echo $r;