<?php
$a = 0;
$b = 0;
$i = 0;
echo "Начальное значение a = $a, начальное значение b = $b <br/>";
while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: значение a = $a, значение b = $b <br/>";
    $i++;
}
echo "Конец цикла, и значение a = $a, а значение b = $b";
