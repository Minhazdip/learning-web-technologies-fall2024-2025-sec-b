<?php
session_start();

if (!isset($_SESSION['xyz'])) {
    header('location: login.html');
    exit();
}

// Display user information from session
if (isset($_SESSION['registered_user'])) {
    $username = $_SESSION['registered_user']['username'];
} else {
    $username = "hasan";
}
?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is your profile page.</p>

    <a href="logout.php">Logout</a>
</body>
</html>