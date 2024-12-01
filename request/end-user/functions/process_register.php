<?php
require_once 'config.php'; 

header('Content-Type: application/json');

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$confirm_password = $_POST['cpassword']; 
$remember_me = isset($_POST['remember']) ? 1 : 0; 

$response = array('success' => false, 'message' => '');

if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
    $response['message'] = 'All fields are required.';
    echo json_encode($response);
    exit();
}

if ($password !== $confirm_password) {
    $response['message'] = 'Passwords do not match.';
    echo json_encode($response);
    exit();
}

$sql_check_email = "SELECT * FROM end_users WHERE email = :email";
$stmt = $pdo->prepare($sql_check_email);
$stmt->execute(['email' => $email]);

if ($stmt->rowCount() > 0) {
    $response['message'] = 'Email already exists.';
    echo json_encode($response);
    exit();
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql_insert = "INSERT INTO end_users (first_name, last_name, email, password, remember_me) 
               VALUES (:first_name, :last_name, :email, :password, :remember_me)";
$stmt = $pdo->prepare($sql_insert);

try {
    $stmt->execute([
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $hashed_password,
        'remember_me' => $remember_me
    ]);

    
    $response['success'] = true;
    $response['message'] = 'User registered successfully!';
} catch (PDOException $e) {
    $response['message'] = 'Database error: ' . $e->getMessage();
}

echo json_encode($response);
?>