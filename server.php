<?php
if (isset($_POST['login'])) {
    // Handle login request
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform server-side validation and authentication here
    // You should check credentials against a database
    // For this example, let's assume a simple check
    if ($email === 'user@example.com' && $password === 'password') {
        $response = ['success' => true];
    } else {
        $response = ['success' => false];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

if (isset($_POST['register'])) {
    // Handle registration request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform server-side validation and user registration here
    // You should insert user data into a database
    // For this example, let's assume a successful registration
    $response = ['success' => true];

    header('Content-Type: application/json');
    echo json_encode($response);
}
