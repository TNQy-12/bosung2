<?php
include("connect.php");

$mail = $_POST['mail'];
$pass = $_POST['pass']; //
// Check if database connect succeeded

//câu lệnh truy vấn kiểm tra xem mail với pass có trong database không
$sql = "SELECT * FROM user WHERE `mail` = '$mail' AND `pass` = '$pass'";

$result = mysqli_query($con, $sql);


// // kiểm tra kết quả trả về nếu không có kết quả trả về thì login failed ngược 
// //lại nếu có kết quả trả về thì tiếp tục kiểm tra thêm lần nữa xem có khớp không nếu có thì login thành công
if (mysqli_num_rows($result) > 0) {
    // output 
    while ($row = mysqli_fetch_assoc($result)) {
        if ($mail === $row['mail'] and $pass === $row['pass']) {
            echo "login successfully";
        } else {
            header("location: login.php");
        }
    }
} else {
    header("location: login.php");
}
