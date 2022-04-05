<?php
    // Kết nối cơ sở dữ liệu
    $conn = mysqli_connect('localhost', 'root', '', 'dadperfume') or die ('Cant Connect Database'); 

    // Dùng isset để kiểm tra Form
    if(isset($_POST['signup'])){
    $username = trim($_POST['signup-username']);
    $name = trim($_POST['signup-name']);
    $password = trim($_POST['signup-password']);
    $email = trim($_POST['signup-email']);
    $phone = trim($_POST['signup-phone']);

    // Kiểm tra username hoặc email có bị trùng hay không
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        echo '<script language="javascript">alert("Already Exist"); window.location="../common/signup.php";</script>';
        // Dừng chương trình
        die ();
    }
    else {
        $sql = "INSERT INTO users (username, email, phone, password, name) VALUES ('$username','$email','$phone','$password','$name')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="../common/login.php";</script>';

        if (mysqli_query($conn, $sql)){
        echo "Tên đăng nhập: ".$_POST['username']."<br/>";
        echo "Tên người dùng: ".$_POST['name']."<br/>";
        echo "Mật khẩu: " .$_POST['password']."<br/>";
        echo "Email đăng nhập: ".$_POST['email']."<br/>";
        echo "Số điện thoại: ".$_POST['phone']."<br/>";
    }
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="../common/signup.php";</script>';
}
}
}
?>