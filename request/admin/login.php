<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="src/css/login.css">
</head>

<body>
    <div class="container animate__animated animate__fadeInUp">
        <div class="form-section">
            <div class="h3">
                <span>ReQuest: Automated Purchase Request System</span>
            </div>
            <p>Sign in to continue</p>
            <form id="signInForm">
                <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="email" placeholder="your-email@gmail.com" required>
                    <div id="emailError" class="error-message"></div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">PASSWORD</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" placeholder="your-password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Toggle Password Visibility">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                    <div id="passwordError" class="error-message"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-signin">SIGN IN</button>
            </form>
        </div>
        <div class="image-section">
            <div class="image-placeholder">
                <i class="fas fa-image"></i>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.all.min.js"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            passwordIcon.classList.toggle('fa-eye');
            passwordIcon.classList.toggle('fa-eye-slash');
        });

        document.getElementById('signInForm').addEventListener('submit', function(e) {
            e.preventDefault(); 

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const rememberMe = document.getElementById('rememberMe').checked;

            const formData = new FormData();
            formData.append('email', email);
            formData.append('password', password);
            formData.append('rememberMe', rememberMe);

            fetch('src/process/process_login.php', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                        }).then(() => {
                            window.location.href = 'dashboard.php'; 
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message,
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while processing your request.',
                    });
                    console.error('Error:', error);
                });
        });
    </script>
=======
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Log In</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-50">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center mb-6 mt-10">
    <h2 class="text-4xl font-extrabold text-gray-900">Automated Purchase Request System</h2>
    <p class="mt-2 text-sm text-gray-600">Submit your purchase requests with ease and efficiency.</p>
  </div>

  <div class="flex min-h-full flex-col justify-center py-12 px-6 lg:px-8 bg-white shadow-lg rounded-lg mx-4 sm:mx-auto sm:w-full sm:max-w-lg">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
      <h2 class="text-3xl font-extrabold text-gray-900">Admin Log In</h2>
      <p class="mt-2 text-sm text-gray-600">Please enter your credentials to access the dashboard.</p>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form id="loginForm" class="space-y-6" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-900">Email Address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 shadow-sm text-gray-900 sm:text-sm">
          </div>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 shadow-sm text-gray-900 sm:text-sm">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
          </div>
          <div class="space-x-2 text-sm">
            <a href="register.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign Up Here</a>
          </div>
        </div>

        <div>
          <button type="button" id="loginButton" class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">Log In</button>
        </div>

        <div class="mt-6 text-center">
          <a href="../bac/login.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Log in as BAC</a>
          <a href="../end-user/login.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Log in as End-user</a>
          <a href="../budget/login.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Log in as Budget</a>
        </div>
      </form>
    </div>
  </div>


  <script>
    document.getElementById('loginButton').addEventListener('click', function() {
      const form = document.getElementById('loginForm');
      const formData = new FormData(form);

      fetch('functions/login_process.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            Swal.fire({
              icon: 'success',
              title: 'Login Successful',
              text: 'You will be redirected shortly.',
              timer: 2000,
              showConfirmButton: false
            }).then(() => {
              window.location.href = 'admin_dashboard.php';
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Login Failed',
              text: data.message,
            });
          }
        })
        .catch(error => {
          Swal.fire({
            icon: 'error',
            title: 'An Error Occurred',
            text: 'Please try again later.',
          });
          console.error('Error:', error);
        });
    });
  </script>
</body>

</html>