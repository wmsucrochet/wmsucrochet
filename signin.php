<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crochet.Co - Sign In</title>
    <link rel="icon" type="image/png" href="images/LOGO/LOGO.jpg" />
    <link rel="stylesheet" href="Login.css" />
    <script src="https://kit.fontawesome.com/4f2e23ecc9.js" crossorigin="anonymous"></script>
    <style>
        .btn-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign In</h1>
            <form action="signin_process.php" method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email">
                    </div>
    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <p>Forgot password? <a href="#">Click here</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit">Sign in</button>
                </div>
            </form>
            <p>Don't have an account yet? <a href="signup.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>
