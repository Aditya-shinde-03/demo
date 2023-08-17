<?php

 include('includes/config.php');

$name=$_POST['name'];
$query = mysqli_query($conn,"insert into information values('$name')");



mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<link href="css/dashboard.css" rel="styleheet">
</head>
<body>
    <h1>WELCOME</h1>
    <legend>Name</legend>
        <form action="dashboard.php" method="post">
     <input type="text" name="name">
     <button type="submit">Submit<button>
</form>
    
</body>
</html>