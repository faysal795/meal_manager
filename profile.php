<?php include 'db.php'; include 'navbar.php'; ?>

<div class="profile">
<h2>Profile</h2>

<p>Name: <?php echo $_SESSION['user']['name']; ?></p>
<p>Email: <?php echo $_SESSION['user']['email']; ?></p>

</div>
<div style="display:flex; justify-content:center; margin-top:30px;">
    <img src="../meal_manager/images/pexels-tahir-33672311.jpg"
         style="
            width:800px;
            height:400px;
            object-fit:cover;
            border-radius:15px;
         ">
</div>

<?php include 'footer.php'; ?>