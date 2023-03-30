<?php

for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break; // прерывает итерацию и выходит из цикла.
    }

    echo $i . PHP_EOL;
}
echo "i: " . $i . PHP_EOL; // i = 3 тк $i++ уже не выполнится


for ($j = 0; $j < 5; $j++) {
    if ($j == 3) {
        continue; // прерывает текущую итерацию но не выходит из цикла, те вывод: 0 1 2 4
    }

    echo $j . PHP_EOL;
}
echo "j: " . $j . PHP_EOL; // j = 5