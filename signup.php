<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form id="signupForm" onsubmit="return validateSignup()">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script>
        function validateSignup() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Example validation for signup (you can add server-side validation here)
            if (username && password) {
                alert("Sign Up Successful!");
                // Redirect to login page after success
                window.location.href = "login.php"; // Redirect to login page after sign up
                return false; // Prevent form submission
            } else {
                alert("Please fill in all fields.");
                return false; // Prevent form submission
            }
        }
    </script>
</body>
</html>
