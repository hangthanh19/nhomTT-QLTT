<?php
    
    session_start();
   
        include("connect.php");
        include("functions.php");

        
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
            {


                $query = "select * from users where user_name = '$user_name' limit 1";
                $result = mysqli_query($con, $query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {

                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['password'] === $password)
                        {

                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: index.php");
                            die;
                        }
                    }
                }
                
            }else
            {
                echo "Bạn chưa nhập đầy đủ thông tin!";
            }
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
        <form method="post">
            <h1>Đăng nhập</h1>
            <div class="input-box">
                <input id="text" type="text" name="user_name" placeholder="Tên đăng nhập" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input id="text" type="password" name="password" placeholder="Mật khẩu" required>
                <i class='bx bxs-lock' ></i>
            </div>

            <button id="button" type="submit" class="btn">Đăng nhập</button>
                        
        </form>
    </div>
</body>
</html>