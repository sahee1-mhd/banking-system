<?php
$users = json_decode(file_get_contents('users.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senderId = 1; // You can replace this with user authentication logic
    $recipient = $_POST['recipient'];
    $amount = (float)$_POST['amount'];

    if ($amount <= 0 || $users[$senderId]['balance'] < $amount) {
        echo "Error: Insufficient funds or invalid amount.";
    } else {
        // Update sender and recipient balances (Not implemented in this example)
        // You would need to implement transfer logic here

        echo "Transfer successful!";
    }
}
?>
