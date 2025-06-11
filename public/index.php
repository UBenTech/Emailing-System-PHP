<?php
require_once '../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <?php if (is_logged_in()): ?>
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="api/logout.php">Logout</a>
            <?php else: ?>
                <div id="auth-buttons">
                    <button onclick="showLoginForm()">Login</button>
                    <button onclick="showRegisterForm()">Register</button>
                </div>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <!-- Login Form -->
        <div id="login-form" class="auth-form" style="display: none;">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="login-email">Email:</label>
                    <input type="email" id="login-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password:</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Register Form -->
        <div id="register-form" class="auth-form" style="display: none;">
            <h2>Register</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="register-username">Username:</label>
                    <input type="text" id="register-username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="register-email">Email:</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="register-password">Password:</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="register-confirm-password">Confirm Password:</label>
                    <input type="password" id="register-confirm-password" name="confirm_password" required>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </main>

    <script>
        function showLoginForm() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('register-form').style.display = 'none';
        }

        function showRegisterForm() {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('register-form').style.display = 'block';
        }

        // Handle Login
        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            
            try {
                const response = await fetch('/api/login.php', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();
                
                if (data.success) {
                    window.location.reload();
                } else {
                    alert(data.error);
                }
            } catch (error) {
                alert('An error occurred. Please try again.');
            }
        });

        // Handle Register
        document.getElementById('registerForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            
            try {
                const response = await fetch('/api/register.php', {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();
                
                if (data.success) {
                    window.location.reload();
                } else {
                    alert(data.error);
                }
            } catch (error) {
                alert('An error occurred. Please try again.');
            }
        });
    </script>
</body>
</html>
