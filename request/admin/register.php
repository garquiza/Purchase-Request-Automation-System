<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="src/css/register.css">
</head>

<body class="animate__animated animate__fadeInRight">
    <div class="container">
        <div class="form-section">
            <div class="h3">
                <span>ReQuest: Automated Purchase Request System</span>
            </div>
            <p>Create a new account</p>
            <form id="signUpForm" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="firstName" class="form-label">FIRST NAME</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Firstname" required>
                    <div class="invalid-feedback">Please provide your first name.</div>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">LAST NAME</label>
                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Lastname" required>
                    <div class="invalid-feedback">Please provide your last name.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="your-email@gmail.com" required>
                    <div class="invalid-feedback">Please provide a valid email.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">PASSWORD</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="your-password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Toggle Password Visibility">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                        <div class="invalid-feedback">Password must be at least 6 characters.</div>
                    </div>

    <title>Admin Register</title>
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
            <h2 class="text-3xl font-extrabold text-gray-900">Admin Register</h2>
            <p class="mt-2 text-sm text-gray-600">Please create your account to access the dashboard.</p>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form id="registerForm" class="space-y-6">

                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-900">First Name</label>
                    <div class="mt-2">
                        <input id="first_name" name="first_name" type="text" autocomplete="given-name" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-900">Last Name</label>
                    <div class="mt-2">
                        <input id="last_name" name="last_name" type="text" autocomplete="family-name" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email Address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="confirm_password" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="confirm_password" name="cpassword" type="password" autocomplete="current-password" required class="block w-full rounded-md border-2 border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 shadow-sm text-gray-900 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="button" id="submitButton" class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">Register Account</button>
                </div>

                <div class="mt-6 text-center">
                    <a href="../bac/register.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Sign up as BAC</a>
                    <a href="../end-user/register.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Sign up as End-user</a>
                    <a href="../end-user/register.php" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 ml-4">Sign up as Budget</a>

                </div>
                <button type="submit" class="btn btn-signup">SIGN UP</button>
            </form>
        </div>
        <div class="image-section animate__animated animate__fadeInRight">
            <div class="image-placeholder">
                <i class="fas fa-image"></i>
            </div>
        </div>
    </div>

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

        document.getElementById('signUpForm').addEventListener('submit', function(e) {
            e.preventDefault(); 

            const formData = new FormData(this);

            fetch('src/process/process_register.php', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {

        document.getElementById('submitButton').addEventListener('click', function() {
            const formData = new FormData(document.getElementById('registerForm'));

            fetch('functions/register_process.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                        }).then(() => {
                            window.location.href = 'login.php';
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

                        text: 'Something went wrong. Please try again.',
                    });

                });
        });
    </script>
</body>
</html>