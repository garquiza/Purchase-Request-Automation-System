<?php
require_once 'config.php';

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password
    if (empty($email) || empty($password)) {
        echo json_encode([
            'success' => false,
            'message' => 'Please enter both email and password.',
        ]);
        exit;
    }

    // To check if email exists in database
    $stmt = $pdo->prepare("SELECT * FROM end_users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify password with hash
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];

            if (isset($_POST['remember']) && $_POST['remember'] === 'on') {
                setcookie('remember_me', $user['id'], time() + (86400 * 30), '/');
            }

            echo json_encode([
                'success' => true,
                'redirect' => '/request/end-user/dashboard.php',
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Incorrect password. Please try again.',
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'No account found with that email.',
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request.',
    ]);
}
?>