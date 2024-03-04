<?php
// Определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1,
        "transaction_date" => "2019-01-01",
        "transaction_amount" => 100.00,
        "transaction_description" => "Payment for groceries",
        "merchant_name" => "SuperMart",
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    // Дополнительные транзакции здесь
];

// Функция для рассчета общей суммы всех транзакций
function calculateTotalAmount($transactions)
{
    return array_reduce($transactions, function ($carry, $transaction) {
        return $carry + $transaction['transaction_amount'];
    }, 0);
}

// Функция для рассчета среднего арифметического всех транзакций
function calculateAverage($transactions)
{
    $totalAmount = calculateTotalAmount($transactions);
    $count = count($transactions);
    return $totalAmount / $count;
}

// Функция для возврата массива описаний транзакций
function mapTransactionDescriptions($transactions)
{
    return array_map(function ($transaction) {
        return $transaction['transaction_description'];
    }, $transactions);
}

// Вывод результатов
echo "Общая сумма всех транзакций: " . calculateTotalAmount($transactions) . "<br/>";
echo "Среднее арифметическое всех транзакций: " . calculateAverage($transactions) . "<br/>";
echo "Описания всех транзакций: <br/>";
$descriptions = mapTransactionDescriptions($transactions);
foreach ($descriptions as $description) {
    echo $description . "<br/>";
}
