<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form id="loginForm" onsubmit="return validateLogin()">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Example validation for login (you can add server-side validation here)
            if (username === "testuser" && password === "password123") {
                alert("Login Successful!");
                // Redirect to dashboard after success
                window.location.href = "dashboard.php"; // Replace with your dashboard page URL
                return false; // Prevent form submission
            } else {
                alert("Invalid username or password.");
                return false; // Prevent form submission
            }
        }
    </script>
</body>
</html>
