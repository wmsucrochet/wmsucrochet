<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crochet.Co - Sign Up</title>
    <link rel="icon" type="image/png" href="images/LOGO/LOGO.jpg" />
    <link rel="stylesheet" href="Login.css" />
    <script src="https://kit.fontawesome.com/4f2e23ecc9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form action="signup_process.php" method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name="name">
                    </div>
    
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
                    <button type="submit">Sign up</button>
                </div>
            </form>
            <p>Already have an account? <a href="signin.php">Sign in</a></p>
        </div>
    </div>
</body>
</html>
