<?php
session_start(); // Khởi động phiên

$host = "localhost";
$User_ID = "root";
$Password = ""; // Update with your actual database password
$db = "shoe";

$conn = mysqli_connect($host, $User_ID, $Password, $db);

if (!$conn) {
  die("Kết nối thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_id = trim($_POST["user_id"]); // Trim leading/trailing whitespace
  $password = trim($_POST["password"]);

  // **Security Enhancement:** Use prepared statements to prevent SQL injection
  $sql = "SELECT * FROM user WHERE User_ID = ? AND Password = ?";

  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $user_id, $password); // Bind parameters securely
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) == 1) {
    // Đăng nhập thành công
    $_SESSION["user_id"] = $user_id;
    header("location: trangchu.php"); // Chuyển hướng đến trang chào mừng
  } else {
    // Đăng nhập không thành công
    $errorMessage = "Tên đăng nhập hoặc mật khẩu không chính xác.";

    // **Improved Error Handling:**
    // 1. Check for errors during query preparation/execution
    if (!$stmt) {
      echo "SQL error: " . mysqli_error($conn);
      exit(); // Terminate script execution
    }
    // 2. Close the prepared statement (optional but good practice)
    mysqli_stmt_close($stmt);
  }
}

mysqli_close($conn); // Close the database connection (optional but recommended)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <style>
    #login-error-message {
      color: red;
      font-size: 12px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="section">
      <div class="left-section">
        <div class="logo"><img src="../Image/LOGO/Pink.png" alt=""></div>
        <h3>well comeback!</h3>
      </div>

      <div class="right-section">
        <h3>login</h3>
        <div class="form">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="name-account"><input type="text" name="user_id" placeholder="User ID"></div>
            <div class="pass"><input type="password" name="password" placeholder="Password"></div>
            <p class="forgot-password" id="forgot-password">Forgot Password?</p>
            <div class="login-signup">
              <button type="submit" class="login">Login</button>
              <button id="signup-button" class="signup">Signup</button>
              <div id="login-error-message" class="login-error-message">
                <?php if (isset($errorMessage)) {
                  echo $errorMessage;
                } ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var forgotPasswordButton = document.getElementById("forgot-password");

      forgotPasswordButton.addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "forgot_password.php";
      });
    });
  </script>

</body>
</html>


