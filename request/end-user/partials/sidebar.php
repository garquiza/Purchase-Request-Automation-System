<?php
include 'functions/session.php';
include 'functions/config.php'; 

$userId = $_SESSION['user_id']; 

$query = "SELECT first_name FROM end_users WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$firstName = $user ? $user['first_name'] : 'Guest'; 
?>

<style>
  .top-right-icons {
    position: fixed;
    top: 10px;
    right: 80px;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
  }

  .top-right-icons a {
    font-size: 24px;
    color: #333;
    text-decoration: none;
  }

  .top-right-icons a:hover {
    color: #007bff;
  }

  .user-info {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .user-info h2 {
    font-size: 18px;
    margin: 0;
    color: #333;
  }

  .user-info img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #007bff;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="top-right-icons">
  <a href="./Notification.php"><i class="bi bi-bell-fill"></i></a>
  <a href="./settings.php"><i class="bi bi-person-circle"></i></a>
  <div class="user-info">
    <h2>Hello!</h2>
    <img src="path_to_user_profile_image.jpg" alt="Profile Image">
  </div>
</div>

<aside class="w-64 bg-indigo-700 text-white flex flex-col p-6 hidden md:block md:w-1/4 lg:w-1/5 xl:w-1/6">
  <h2 class="text-2xl font-bold mb-6 text-center">Dashboard</h2>
  <nav class="space-y-4">
    <a href="dashboard.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Dashboard</a>
    <a href="purchase_request.php" class="block py-2 px-3 rounded hover:bg-indigo-600">Purchase Request</a>

    <div x-data="{ open: false }" class="relative">
      <button @click="open = !open" class="w-full flex justify-between items-center py-2 px-3 rounded hover:bg-indigo-600">
        PPMP
        <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div x-show="open" class="mt-2 pl-6 space-y-2">
        <a href="ppmp.php" class="block py-2 px-3 rounded hover:bg-indigo-600">VIEW LIST</a>
      </div>
    </div>

    <a id="logoutButton" class="block py-2 px-3 rounded hover:bg-indigo-600">Log Out</a>
  </nav>
</aside>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.getElementById('logoutButton').addEventListener('click', function() {
    Swal.fire({
      title: 'Are you sure?',
      text: "Do you really want to log out?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, log me out!',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'functions/logout.php';
      }
    });
  });
</script>