<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "shoe";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    // Thực hiện xử lý bảo mật để ngăn chặn SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $phone = mysqli_real_escape_string($conn, $phone);

    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO user (User_Name, Email, Password, Phone) VALUES ('$username', '$email', '$password', '$phone')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION["User_Name"] = $username;
        header("location: trangchu.php"); // Chuyển hướng đến trang chính sau khi đăng ký thành công
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../CSS/signup.css">
</head>
<body>
    <div class="wrapper">
        <div class="section">
            <div class="left-section">
                <div class="logo"><img src="../Image/LOGO/Pink.png" alt=""></div>
                <h3>well comeback!</h3>
            </div>
    
            <div class="right-section">
                <h3>signup</h3>
                <div class="form">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-content"><input type="text" name="user_id" placeholder="User Name"></div>
                        <div class="form-content"><input type="text" name="phone" placeholder="Phone"></div>
                        <div class="form-content"><input type="email" name="email" placeholder="Email..."></div>
                        <div class="form-content"><input type="password" name="password" placeholder="Password"></div>
                        <div class="signup">
                            <button type="submit" class="signup-p">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
