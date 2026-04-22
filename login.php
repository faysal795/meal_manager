<?php include 'db.php';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $res=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$pass'");
    $data=mysqli_fetch_assoc($res);

    if($data){
        $_SESSION['user']=$data;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid login!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="auth-container">
    <h2>🔐 Login</h2>

    <form method="POST">
        <input name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button name="login">Login</button>
    </form>

    <a class="auth-link" href="register.php">Create new account</a>
</div>

</body>
</html>