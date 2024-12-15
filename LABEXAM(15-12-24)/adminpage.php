
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['userType'] !== 'admin') {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
</head>
<body>
    <h2>Welcome, Bob<?php echo $_SESSION['username']; ?>!</h2>
    <ul>
        <li><a href="view_users.php">View Users</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>