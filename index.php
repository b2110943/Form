<?php

include("database.php");
include("config.php");
include("functions.php");

if(isset($_SESSION['id'])) {
	header('Location: home.php');
	die();
}

if(isset($_POST['email'])) {
	if($stm = $connect->prepare('SELECT * FROM users WHERE email = ? AND password = ? ')) {
		$hashed = SHA1($_POST['password']);
		$stm->bind_param('ss', $_POST['email'], $hashed);
		$stm->execute();

		$result = $stm->get_result();
		$user = $result->fetch_assoc();

		if($user) {
			$_SESSION['id'] = $user['id'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['username'] = $user['username'];

			set_message('You have successfully logged in' . $_SESSION['username']);
			header('Location: home.php');
			die();
		}
		$stm->close();
	} else {
		echo 'Could not prepare statement.';
	}

}


?>
<link rel="stylesheet" href="form.css">
<html>
    <body>

        <div class="wrapper" id="box">

            <form method="post">

                <h2>ĐĂNG NHẬP</h2>
				<!-- Email input -->
                <div class="input-box">
                    <input id="email" type="email" name="email" placeholder="Nhập email" required>
                    <i class='bx bxs-user'></i>
                </div>
				<!-- Password input -->
                <div class="input-box">
                    <input id="password" type="password" name="password" placeholder="Nhập mật khẩu" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button id="button" type="submit" value="Login" class="btn">Đăng Nhập</button>

                <div class="register-link">
                    <p>Bạn chưa có tài khoản?
                        <a href="signup.php">Đăng Ký</a>
                    </p>
                </div>

            </form>
        </div>
    </body>
</html>