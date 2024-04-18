<?php
session_start(); // Khởi động phiên
$host = "localhost";
$User_ID = "root";
$Password = "";
$db = "shoe";
$conn = mysqli_connect($host, $User_ID, $Password, $db);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Xử lý quên mật khẩu
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["forgot_password"])) {
    $email = $_POST["email"];

    // Tìm người dùng với email cung cấp
    $sql = "SELECT * FROM user WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Người dùng tồn tại, tạo mã đặt lại mật khẩu và gửi email hướng dẫn
        $row = mysqli_fetch_assoc($result);
        $user_id = $row["User_ID"];
        $reset_token = md5(uniqid(rand(), true));

        // Lưu mã đặt lại mật khẩu vào cơ sở dữ liệu
        $sql = "UPDATE user SET Reset_Token = '$reset_token' WHERE User_ID = '$user_id'";
        mysqli_query($conn, $sql);

        // Gửi email hướng dẫn đặt lại mật khẩu
        $subject = "Hướng dẫn đặt lại mật khẩu";
        $message = "Xin chào,\n\nĐể đặt lại mật khẩu của bạn, vui lòng truy cập vào liên kết sau:\n\n";
        $message .= "http://yourwebsite.com/reset_password.php?user_id=$user_id&reset_token=$reset_token";
        $message .= "\n\nNếu bạn không yêu cầu đặt lại mật khẩu, vui lòng bỏ qua email này.";

        mail($email, $subject, $message);

        echo "Hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email của bạn.";
    } else {
        echo "Không tìm thấy người dùng với địa chỉ email này.";
    }
}
?>

