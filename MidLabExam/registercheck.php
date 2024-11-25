<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $gender = trim($_POST['gender']);
    $address = trim($_POST['address']);
    $date= trim($_POST['date']);

    // Check if any field is empty
    if ($username == null || $password == null || $email == null || $name == null) {
        echo "All fields are required!";
    } else {
      
        // Check if the username already exists
        if (isset($users[$username])) {
            echo "Username already exists! Please choose another one.";
        } else {

            // Add the new user to the list
            $users[$username] = [
                'name' => $name,
                'email' => $email,
                'password' => $password, 
                'username' => $username,
                'address' => $address,
                'date' => $date,
                'gender' => $gender
            ];

            // Store session details
            $_SESSION['flag'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            $_SESSION['date'] = $date;
            $_SESSION['password'] = $password;

            header('Location: home.php');
            exit();
        }
    }
} else {
    
    header('Location: register.html');
    exit();
}
?>