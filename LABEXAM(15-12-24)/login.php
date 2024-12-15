

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    $hashed_password = hash('dip123', $password);
    $file = 'users.txt';

    if (!file_exists($file)) {
        echo "No users registered.";
        exit;
    }

    $users = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($stored_username, $stored_password) = explode('|', $user);
        if ($stored_username === $username && $stored_password === $hashed_password) {
            $_SESSION['username'] = $username;
            header('Location: home.html');
            exit;
        }
    }

    echo "Invalid username or password.";
}
?>

