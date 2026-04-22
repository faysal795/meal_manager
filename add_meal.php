<?php include 'db.php'; include 'navbar.php';

if(isset($_POST['add'])){
$name=$_POST['meal_name'];
$type=$_POST['type'];
$uid=$_SESSION['user']['id'];

mysqli_query($conn,"INSERT INTO meals(user_id,meal_name,type) VALUES('$uid','$name','$type')");
}
?>

<div class="container">
<form method="POST">
<input name="meal_name" placeholder="Person Name">
<select name="type">
<option>Breakfast</option>
<option>Lunch</option>
<option>Dinner</option>
</select>
<button name="add">Add Meal</button>
</form>
</div>

<?php include 'footer.php'; ?>