<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
</head>
<body>
<img src="./rishikesh.jpg" height="400px"
  width="100%" alt="A black, brown, and white dog wearing a kerchief">
    <?php echo "<h1>Welcome " . $_SESSION['username'] ."</h1>"; 
    echo " <h2> Thankyou for showing your support towards the cause! </h2> ";
    echo " <h3> Your response has been recorded! </h3> ";
    ?>
    
    <h4><a href="logout.php">Logout</a></h4>
</body>
</html>