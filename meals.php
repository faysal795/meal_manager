<?php include 'db.php'; include 'navbar.php';

$uid=$_SESSION['user']['id'];
$res=mysqli_query($conn,"SELECT * FROM meals WHERE user_id='$uid'");
?>
<link rel="stylesheet" href="css/style.css">

<div style="text-align:center; margin-top:20px;">
  <a href="add_meal.php"
     style="
        color:white;
        text-decoration:none;
        padding:10px 20px;
        border:1px solid white;
        border-radius:8px;
        display:inline-block;
        transition:0.3s;
     "
     onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
     onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
    Add Meal
  </a>
</div>

<table>
<tr><th>ID</th><th>Name</th><th>Type</th><th>Action</th></tr>

<?php while($row=mysqli_fetch_assoc($res)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['meal_name']; ?></td>
<td><?php echo $row['type']; ?></td>
<td>
<a href="delete_meal.php?id=<?php echo $row['id']; ?>" onclick="return confirmDelete()">Delete</a>
</td>
</tr>
<?php } ?>

</table>

<?php include 'footer.php'; ?>