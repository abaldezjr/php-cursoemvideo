<?php

$pessoa = array(
    "nome" => "Alexandre",
    "idade" => 20,
    "pessoa" => 78.5,
    "pet"   => "pacato",
    "casado" => true
);

print_r($pessoa);

echo '<br/>';

echo "Pessoa(";
foreach($pessoa as $key => $value){
    echo "$key: $value,";
}
echo ")";