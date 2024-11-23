<html>
<head>
    <title>HTML Form</title>
</head>
<body>
    <form action="form1.php" method="post">
      <fieldset>
                <legend>Name</legend>
        <table align="center" width="100%">
            <tr>                    <td><strong>Name:</strong></td>
                <td><input type="text" name="username" placeholder="Type your name" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br>
        <input type="submit" value="Submit" />
        </td>
        </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>
<?php

$username = trim($_POST["username"]);

function checkNumber($username)
 {
    
    return !digit($username[0]);
}
function checkUsername($username) {

    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_';

    for ($i = 0; $i < ($username); $i++) {
        if (strpos($validChars, $username[$i]) === false) {
            return false;
        }
    }
    return true;
}

if (($username) < 2) {
    echo "Invalid username: Must contain at least 2 characters.";
} elseif (!checkNumber($username)) {
    echo "Invalid username: Cannot start with a number.";
} elseif (!checkUsername($username)) {
    echo "Invalid username: Contains invalid characters.";
} else {
    echo "Valid username!";
}
?>


<html>
<head>
    <title>Email Validation Form</title>
</head>
<body>
    <h2>Email Validation Form</h2>
    <form action="validate_email.php" method="post">
        <fieldset>
            <legend>Email</legend>
            <table align="center" width="50%">
                <tr>
                    <td><strong>Email:</strong></td>
                    <td><input type="text" name="email" placeholder="Enter your email" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <br>
                        <input type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>