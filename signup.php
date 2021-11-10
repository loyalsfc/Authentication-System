<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth System | Login</title>
    <link rel="stylesheet" href="Assets/Css/main.css" type="text/css">
    <link rel="stylesheet" href="Assets/Css/colors.css" type="text/css">
    <link rel="stylesheet" href="Assets/Css/fonts.css" type="text/css">
    <link rel="stylesheet" href="Assets/Css/signup.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="image-bg">
            <img src="Assets/Images/register_illustration.svg" alt="login_illustration">
        </div>
        <form action="configuration.php" class="form" method="POST">
            <h1>Create Your Account</h1>
            <label for="username">
                Username
                <input type="text" name="username" id="username" required>
            </label>
        <div class="m3">
            <label for="firstname">
                First Name
                <input type="text" name="first_name" id="firstname" required>
            </label>
            <label for="middlename">
                Middle Name
                <input type="text" name="middle_name" id="middlename" required>
            </label>
        </div>
        <div class="m3">
            <label for="lastname">
                Last Name
                <input type="text" name="last_name" id="lastname" required>
            </label>
            <label for="password">
                Sex
                <div class="m3">
                    <input type="radio" name="sex" id="gender" value="Male"> <span>Male</span>
                    <input type="radio" name="sex" id="gender" value="Female"> <span>Female</span>
                </div>
            </label>
        </div>
        <div class="m3">
            <label for="email">
                Email
                <input type="email" name="email" id="email" required>
            </label>
            <label for="contact">
                Contact
                <input type="number" name="contact" id="contact" required>
            </label>
        </div>
        <div class="m3">
            <label for="password">
                Password
                <input type="password" name="password" id="password" required minlength="8">
            </label>
            <label for="password">
                Confirm Password
                <input type="password" name="confirm_password" id="confirmPassword" required minlength="8">
            </label>
        </div>
        
            <button type="submit" class="button" name="signup">Sign Up</button>
            <p>Already have an account <a href="index.php">Sign In</a></p>
        </form>
    </div>
    <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
