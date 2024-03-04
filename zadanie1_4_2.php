<?php
// Определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1, // id
        "transaction_date" => "2019-01-01", // дата
        "transaction_amount" => 100.00, // сумма транзакции
        "transaction_description" => "Payment for groceries", // описание
        "merchant_name" => "SuperMart", // название организации
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    [
        "transaction_id" => 3,
        "transaction_date" => "2021-03-20",
        "transaction_amount" => 120.00,
        "transaction_description" => "Shopping at Fashion Store",
        "merchant_name" => "Fashion Boutique",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2022-04-10",
        "transaction_amount" => 50.25,
        "transaction_description" => "Fuel refill",
        "merchant_name" => "Gas Station",
    ],
    [
        "transaction_id" => 5,
        "transaction_date" => "2023-05-05",
        "transaction_amount" => 200.00,
        "transaction_description" => "Concert tickets",
        "merchant_name" => "TicketMaster",
    ],
];
?>
<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Транзакции</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php foreach ($transactions as $transaction) { ?>
        <tr>
            <td><?php echo $transaction['transaction_id']; ?></td>
            <td><?php echo $transaction['transaction_date']; ?></td>
            <td><?php echo $transaction['transaction_amount']; ?></td>
            <td><?php echo $transaction['transaction_description']; ?></td>
            <td><?php echo $transaction['merchant_name']; ?></td>
        </tr>
    <?php } ?>
</table>