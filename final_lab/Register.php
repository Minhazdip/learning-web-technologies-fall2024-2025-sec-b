<?php
include 'database.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
   
    $name = trim($_POST['name']);
    $contact = trim($_POST['contact']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $errors = []; 

   
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($contact)) {
        $errors[] = "Contact number is required.";
    }
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

   
    if (count($errors) > 0) {
       
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    } else {
      
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

      
        $stmt = $conn->prepare("INSERT INTO employees (name, contact, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $contact, $username, $hashed_password);

        
        if ($stmt->execute()) {
            echo "<p class='success'>Employee registered successfully!</p>";
        } else {
            echo "<p class='error'>Error: " . $conn->error . "</p>";
        }
        $stmt->close(); 
    }

    $conn->close(); 
}
?>