<?php
require_once '../config/pdo.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$rememberMe = isset($_POST['rememberMe']) ? 1 : 0;

function verifyPassword($inputPassword, $storedPassword)
{
    return password_verify($inputPassword, $storedPassword);
}

if (empty($email) || empty($password)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Email and password are required.'
    ]);
    exit;
}

try {
    $stmt = $pdo->prepare('SELECT * FROM admin_users WHERE email = :email LIMIT 1');
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && verifyPassword($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['email'] = $user['email'];

        if ($rememberMe) {
            setcookie('user_id', $user['id'], time() + (86400 * 30), "/");
            setcookie('remember_me', true, time() + (86400 * 30), "/");
        }

        echo json_encode([
            'status' => 'success',
            'message' => 'Login successful. Redirecting...',
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid email or password.'
        ]);
    }
} catch (PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'An error occurred while processing your request.'
    ]);
    error_log($e->getMessage());
}
