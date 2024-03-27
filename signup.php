<?php
include("config.php");
include("database.php");
include("functions.php");


if (isset($_POST["username"])) {
    if($stm = $connect->prepare('INSERT INTO users (username,email, password) VALUES (?,?,?) ')) {
        $hashed = SHA1($_POST['password']);
        $stm->bind_param('sss', $_POST['username'], $_POST['email'], $hashed);
        $stm->execute();

        set_message('Signed up ' . $_SESSION['username']);
        header('Location: index.php');
        $stm->close();
        die();

    } else {
        echo'Could not prepare statement';
    }
}
?>


<link rel="stylesheet" href="form.css">
<html>
    <body>
        
        <div class="wrapper" >

            <form method="post">

                <h2>ĐĂNG KÝ</h2>
                <!-- Username input -->
                <div class="input-box">
                    <input id="username" name="username" type="text" placeholder="Nhập username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <!-- Email input -->
                <div class="input-box">
                    <input id="email" name="email" type="email" placeholder="Nhập email" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <!-- Password input -->
                <div class="input-box">
                    <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button id="button" type="submit" value="Signup" class="btn">Đăng Ký</button>
                <!-- Submit -->
                <div class="register-link">
                    <p>Bạn đã có tài khoản?
                        <a href="login.php">Đăng Nhập</a>
                    </p>
                </div>

            </form>
        </div>
    </body>
</html>