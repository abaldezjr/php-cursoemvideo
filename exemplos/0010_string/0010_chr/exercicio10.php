<?php

for ($i = 65; $i < (65 + 26); $i++) {
    echo chr($i) . ' ';
}

echo '<br/>';

for ($i = 65; $i < (65 + 26); $i++) {
    echo ord(chr($i)) . ' ';
}
