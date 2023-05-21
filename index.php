<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/pages/login/login.css?v=<?php echo time(); ?>">
    <link rel="icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sales Monitoring System</title>
</head>
<body>
    <main>
        <div class="login-container">
            <img src="img/vector.jpg" alt="" width="100%">
        </div>
        <div class="login-container form">
            <div class="login-box">
                <h2>Login Here</h2>
                <p style="color: red; text-align: center;" class="error">
                    <!--Error Message here-->
                    <?php if(!empty($_GET['message'])) {
                        $message = $_GET['message'];
                        echo $message; }
                    ?>
                </p>
                <form action="mysql/login.php" method="post">
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="Email">
                    <label>Password:</label>
                    <input type="password" name="password" id="psw" placeholder="Password">
                    <input type="submit" name="submit" value="Login">
                    <a href="#">Forgot Password?</a>
                </form>
            </div>
        </div>
    </main>
    <!--Java Script Import-->
    <script src="js/prevent-back.js"></script>
</body>
</html>