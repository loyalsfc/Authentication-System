<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth System | Login</title>
    <link rel="stylesheet" href="Assets/Css/main.css" type="text/css">
    <link rel="stylesheet" href="Assets/Css/colors.css" type="text/css">
    <link rel="stylesheet" href="Assets/Css/fonts.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="image-bg">
            <img src="Assets/Images/login_illustration.svg" alt="login_illustration">
        </div>
        <form action="configuration.php" class="form" method="POST">
            <h1>Welcome Back!</h1>
            <p>New here? <a href="signup.php">Create an account</a></p>
            <?php
       if (!empty($_SESSION['status'])) {
            echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
            unset($_SESSION['status']);
         } 
        
        ?>
            <label for="name">
                Username/Email
                <input type="text" name="username" id="name" required>
            </label>
            <label for="password">
                Password
                <input type="password" name="password" id="password" required minlength="8">
            </label>
            <div class="check-link">
               <label for="checkbox" class="checkbox-label">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <span> Keep me signed in </span>
               </label>
               <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name="login" class="button">Sign In</button>
        </form>
    </div>
</body>
</html>
