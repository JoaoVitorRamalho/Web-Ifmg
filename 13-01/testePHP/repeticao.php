<?php
echo '<h3>Com for</h3>';
for ($i=0; $i < 10; $i++) { 
    echo "$i: ",$i ** 2, '<br>';
}

echo '<h3>Com while</h3>';
$i = 20;
while ($i <= 30) {
    echo "$i: ", $i ** 2, '<br>';
    $i++;
}