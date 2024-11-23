<!DOCTYPE html>
<html>
<head>
    <title>HTML Form </title>
</head>
<body>
    <h1>Name Form</h1>
    <form action="handler.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="
        <?php 
        echo isset($_POST['name']) ? $_POST['name'] : '';
         ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <h1>Email Form</h1>
    <form action="handler.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="
        <?php echo isset($_POST['email']) ? $_POST['email'] : '';
         ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <h1>Date of Birth Form</h1>
    <form action="handler.php" method="post">
        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" value="
        <?php echo isset($_POST['dob']) ? $_POST['dob'] : '';
         ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>