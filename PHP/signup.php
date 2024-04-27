<?php
session_start(); // Khởi động phiên

$host = "localhost";
$user = "root";
$password = ""; // Update with your actual database password
$dbname = "shoe";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Kết nối thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST["username"]); // Trim leading/trailing whitespace
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $phone = trim($_POST["phone"]);

  // **Security Enhancement:** Use prepared statements to prevent SQL injection
  $sql = "INSERT INTO user (User_Name, Email, Password, Phone) VALUES (?, ?, ?, ?)";

  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $phone); // Bind parameters securely
  mysqli_stmt_execute($stmt);

  if (mysqli_stmt_affected_rows($stmt) > 0) {
    // Đăng ký thành công
    $_SESSION["User_Name"] = $username;
    header("location: trangchu.php"); // Chuyển hướng đến trang chào mừng
  } else {
    // Đăng ký không thành công
    echo "Đăng ký không thành công. Vui lòng thử lại sau.";
  }

  // Đóng câu lệnh đã chuẩn bị
  mysqli_stmt_close($stmt);
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
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
                        <div class="form-content"><input type="number"placeholder="User ID"></div>
                        <div class="form-content"><input type="text" name="username" placeholder="User Name"></div>
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
