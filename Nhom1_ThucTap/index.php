<?php
    session_start();

        include("connect.php");
        include("functions.php");

        $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập | HTQL SVTT</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Đây là trang admin</h1>
    <br> VNPT xin chào <?php echo $user_data['user_name']; ?>
</body>
</html>