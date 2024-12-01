<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End-User Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Add SweetAlert2 -->
</head>
<body class="bg-gray-50">
<div class="sm:mx-auto sm:w-full sm:max-w-sm text-center mb-6 mt-10">
    <h2 class="text-4xl font-extrabold text-gray-900">Automated Purchase Request System</h2>
    <p class="mt-2 text-sm text-gray-600">Submit your purchase requests with ease and efficiency.</p>
  </div>

<!-- Main Wrapper -->
<div class="flex min-h-full flex-col justify-center py-12 px-6 lg:px-8 bg-white shadow-lg rounded-lg mx-4 sm:mx-auto sm:w-full sm:max-w-lg">

  <!-- Header Section -->
  <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
    <h2 class="text-3xl font-extrabold text-gray-900">End-User Log In</h2>
    <p class="mt-2 text-sm text-gray-600">Please enter your credentials to access the dashboard.</p>
  </div>

  <!-- Form Section -->
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form id="loginForm" class="space-y-6" action="login_process.php" method="POST">
      
      <!-- Email Field -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-900">Email Address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
        </div>
      </div>

      <!-- Password Field -->
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
        </div>
      </div>

      <!-- Remember Me and Navigation Links -->
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
          <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
        </div>
        <div class="space-x-2 text-sm">
          <a href="register.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign Up Here</a>
        </div>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">Log In</button>
      </div>

      <!-- Additional Links -->
      <div class="mt-6 text-center">
        <a href="../admin/login.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Log in as Admin</a>
        <a href="../bac/login.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Log in as BAC</a>
        <a href="../budget/login.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Log in as Budget</a>
      </div>
    </form>
  </div>
</div>

<!-- JavaScript to handle form submission and show SweetAlert -->
<script>
  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    
    const formData = new FormData(this); // Collect form data

    fetch("functions/login_process.php", {
      method: "POST",
      body: formData,
    })
    .then(response => response.json()) // Assuming login_process.php returns JSON
    .then(data => {
      if (data.success) {
        Swal.fire({
          title: 'Success!',
          text: 'You are logged in successfully.',
          icon: 'success',
          confirmButtonText: 'Okay',
        }).then(() => {
          window.location.href = 'dashboard.php'; // Redirect user to dashboard or another page
        });
      } else {
        Swal.fire({
          title: 'Error!',
          text: data.message, // Display error message from the server
          icon: 'error',
          confirmButtonText: 'Try Again',
        });
      }
    })
    .catch(error => {
      Swal.fire({
        title: 'Error!',
        text: 'An unexpected error occurred.',
        icon: 'error',
        confirmButtonText: 'Try Again',
      });
    });
  });
</script>

</body>
</html>
