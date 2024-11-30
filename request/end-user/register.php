<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>End-User Register</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Include SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      <h2 class="text-3xl font-extrabold text-gray-900">End-User Register</h2>
      <p class="mt-2 text-sm text-gray-600">Please create your account to access the dashboard.</p>
    </div>

    <!-- Form Section -->
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" id="form" method="POST">

        <!-- First Name Field -->
        <div>
          <label for="first_name" class="block text-sm font-medium text-gray-900">First Name</label>
          <div class="mt-2">
            <input id="first_name" name="first_name" type="text" autocomplete="given-name" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
          </div>
        </div>

        <!-- Last Name Field -->
        <div>
          <label for="last_name" class="block text-sm font-medium text-gray-900">Last Name</label>
          <div class="mt-2">
            <input id="last_name" name="last_name" type="text" autocomplete="family-name" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
          </div>
        </div>

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
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
          </div>
        </div>

        <!-- Confirm Password Field -->
        <div>
          <div class="flex items-center justify-between">
            <label for="confirm_password" class="block text-sm font-medium text-gray-900">Confirm Password</label>
          </div>
          <div class="mt-2">
            <input id="confirm_password" name="cpassword" type="password" autocomplete="current-password" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
          </div>
        </div>

        <!-- Remember Me and Navigation Links -->
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
          </div>
          <div class="space-x-2 text-sm">
            <a href="login.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Log In Here</a>
          </div>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">Register Account</button>
        </div>

        <!-- Additional Links -->
        <div class="mt-6 text-center">
          <a href="../admin/register.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Sign up as BAC</a>
          <a href="../admin/register.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Sign up as Admin</a>
          <a href="../budget/register.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Sign up as Budget</a>
        </div>
      </form>
    </div>
  </div>

  <script>
      // Add event listener for the form submission
      document.querySelector('form').addEventListener('submit', function (event) {
          event.preventDefault(); // Prevent the default form submission
          
          const form = new FormData(this); // Get form data

          // Use fetch or Ajax to send the data to the server
          fetch('functions/process_register.php', { // Replace with your PHP processing script
              method: 'POST',
              body: form
          })
          .then(response => response.json()) // Expect JSON response
          .then(data => {
              if (data.success) {
                  // Show success Swal alert
                  Swal.fire({
                      title: 'Registration Successful!',
                      text: 'You have been registered successfully.',
                      icon: 'success',
                      confirmButtonText: 'OK',
                      showCancelButton: false
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = 'login.php'; // Redirect to login page
                      }
                  });
              } else {
                  // Show error Swal alert
                  Swal.fire({
                      title: 'Error!',
                      text: data.message || 'Something went wrong. Please try again.',
                      icon: 'error',
                      confirmButtonText: 'OK'
                  });
              }
          })
          .catch(error => {
              // Handle errors from the fetch
              Swal.fire({
                  title: 'Network Error!',
                  text: 'There was an issue connecting to the server. Please try again later.',
                  icon: 'error',
                  confirmButtonText: 'OK'
              });
          });
      });
  </script>
</body>

</html>