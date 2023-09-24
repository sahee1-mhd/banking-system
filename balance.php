<?php
$users = json_decode(file_get_contents('users.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get the user's balance
    $userId = 1; // You can replace this with user authentication logic
    $balance = $users[$userId]['balance'];

    echo json_encode(['balance' => $balance]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle balance transfer (Not implemented in this example)
    // You would need to implement transfer logic here
}
?>
