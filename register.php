<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>HappyHub</title>
    <script src="assets/js/App.js" defer></script>
    <!-- Ajax -->
    <script src="App/ajax/register.js" defer></script>
</head>
<body>
    <!-- Loading -->
    <div class="loading">
        <div>
            <img src="assets/images/white.png" draggable="false">
            <div><div></div></div>
        </div>
    </div>

    <div class="sign">
        <div class="left">
            <div class="box-text">
                <img src="assets/images/white.png" draggable="false">
            </div>
        </div>

        <div class="right">
            <div class="form">
                <h2>Register</h2>
                <a href="login.html" class="btn">Login</a>
                <div class="social-media">
                        <a href="" class="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="Twiter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="" class="Google"><i class="fa-brands fa-google"></i></a>
                </div>
                <form action="">
                    <div class="result Success">Success</div>
                    <div class="input">
                        <label for="FullName">Full Name</label>
                        <input type="text" name="FullName" id="FullName" >
                    </div>
                    <div class="input">
                        <label for="Email">Email</label>
                        <input type="Email" name="Email" id="Email" >
                    </div>
                    <div class="input">
                        <label for="Password">Password</label>
                        <input type="Password" name="Password" id="Password" >
                    </div>
                    <div class="input">
                        <label for="Gender">Gender</label>
                        <select name="Gender"  id="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                        <div class="check">
                            <input type="checkbox" name="Accept" id="active" ><label for="active">Agree to all <a href="">terms</a> and <a href="">rules</a></label>
                        </div>

                    <div class="input submit">
                        <input type="submit" value="Register">
                    </div>
                </form>
                <p>Already have an account? <a href="login.html">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
