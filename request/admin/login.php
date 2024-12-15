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
    </script>

</body>
</html>