<?php
include('config.php');

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember']) ? 1 : 0;

    if (empty($email) || empty($password)) {
        $response['success'] = false;
        $response['message'] = 'Please fill in all the required fields.';
        echo json_encode($response);
        exit();
    }

    try {
        $stmt = $pdo->prepare("SELECT id, password FROM bac_users WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $response['success'] = false;
            $response['message'] = 'Email not found.';
            echo json_encode($response);
            exit();
        }

        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];

            if ($remember_me) {
                setcookie('user_id', $user['id'], time() + (86400 * 30), "/"); 
            }

            $response['success'] = true;
            $response['message'] = 'Login successful. Redirecting...';
            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = 'Invalid password.';
            echo json_encode($response);
            exit();
        }
    } catch (PDOException $e) {
        $response['success'] = false;
        $response['message'] = 'Error logging in: ' . $e->getMessage();
        echo json_encode($response);
        exit();
    }
}
?>
