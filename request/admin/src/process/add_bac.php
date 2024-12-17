<?php
require_once '../config/pdo.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $permissions = isset($_POST['permissions']) ? implode(',', $_POST['permissions']) : '';

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $check_email_query = "SELECT id FROM bac_users WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($check_email_query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $response['message'] = 'Email is already taken.';
    } else {
        try {
            $insert_query = "INSERT INTO bac_users (first_name, last_name, email, password, permission_access) 
                            VALUES (:first_name, :last_name, :email, :password, :permissions)";
            $stmt = $pdo->prepare($insert_query);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':permissions', $permissions);

            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = 'BAC user created successfully!';
            } else {
                $response['message'] = 'There was an error creating the user. Please try again.';
            }
        } catch (PDOException $e) {
            $response['message'] = 'Database error: ' . $e->getMessage();
        }
    }
}

echo json_encode($response);
