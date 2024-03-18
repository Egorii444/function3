<?php
function calculateAverage($numbers) {
    $count = count($numbers);
    if ($count === 0) {
        return 0; // Если массив пустой, вернуть 0, чтобы избежать деления на ноль
    }

    $sum = array_sum($numbers); // Вычисляем сумму элементов массива
    return $sum / $count; // Возвращаем среднее значение
}

// Пример использования функции:
$nums = [1, 2, 3, 4, 5];
$average = calculateAverage($nums);
echo "Среднее значение: $average"; // Выведет: Среднее значение: 3
?>