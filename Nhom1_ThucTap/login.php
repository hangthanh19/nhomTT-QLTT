<?php
session_start();
ob_start();

include 'model/connectdb.php';

if((isset($_POST['submit']))&&($_POST['submit'])){
    $user = $_POST['user'];
    #$user = filter_var($user, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    #$pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    if($role==1) header('location: student.html');
    else header('location: login.php');
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>
        Đăng nhập | HTQL SVTT
    </title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
            <h1>Đăng nhập</h1>
            <div class="input-box">
                <input type="text" name="user" placeholder="Tên đăng nhập" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="Mật khẩu" required>
                <i class='bx bxs-lock' ></i>
            </div>

            <button type="submit" name="submit" class="btn">Đăng nhập</button>
                        
        </form>
    </div>
</body>
</html>