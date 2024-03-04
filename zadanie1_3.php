<?php
$arr = []; // Определение пустого массива

// Генерация массива случайных чисел от 1 до 100
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}

// Вывод полученного массива на экран
echo "Сгенерированный массив: ";
echo implode(", ", $arr); // используем implode для объединения элементов массива в строку с разделителем