<?php include 'db.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    mysqli_query($conn,"INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')");
    echo "<script>alert('Registration Successful!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="auth-container">
    <h2>📝 Register</h2>

    <form method="POST">
        <input name="name" placeholder="Full Name">
        <input name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button name="submit">Create Account</button>
    </form>

    <a class="auth-link" href="login.php">Already have account? Login</a>
</div>

</body>
</html>