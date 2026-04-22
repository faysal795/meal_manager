<?php include 'db.php'; include 'navbar.php'; ?>

<div style="display:flex; justify-content:center; margin-top:20px;">
    <h2 class="title"
        style="
            color:white;
            font-weight:bold;
            text-shadow:2px 2px 5px black;
            border:2px solid white;
            border-radius:10px;
            padding:10px 20px;
        ">
        Dashboard
    </h2>
</div>

<div class="card-container">

    <div class="card">
       <b> Welcome<br> <?php echo $_SESSION['user']['name']; ?> </b>
    </div>

    <div class="card">
       <b> Total Meal Count:</b>
        <br>

        <?php
        $user_id = $_SESSION['user']['id'];

        $query = "SELECT COUNT(*) as total_meals FROM meals WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

        echo "<h3>" . $data['total_meals'] . "</h3>";
        ?>
    </div>
    <div class="dash_pic">
    
</div>

</div>

<div style="display:flex; justify-content:center; margin-top:30px;">
    <img src="../meal_manager/images/pexels-ian-panelo-20089305.jpg"
         style="
            width:850px;
            height:550px;
            object-fit:cover;
            border-radius:15px;
         ">
</div>

<?php include 'footer.php'; ?>