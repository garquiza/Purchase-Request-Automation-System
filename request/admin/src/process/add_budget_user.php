<?php
session_start();

require_once '../config/pdo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    $query = "INSERT INTO budget_users (first_name, last_name, email, password, status) 
              VALUES (:first_name, :last_name, :email, :password, :status)";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);

    $status = 'disabled';

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Budget User created successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'There was an error creating the user.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
