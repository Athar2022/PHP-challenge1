<?php

session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['color'])) {
    header("Location: form.php", true, 303);
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
$color = htmlspecialchars($_SESSION['color']);

?>
<!DOCTYPE html>
<html>
<head>
    <title> Hi <?php echo $username; ?></title>
</head>
<body>
    <h1>Hi, <?php echo $username; ?>!</h1>
    <p>Your favorite color is: 
        <span style="color: <?php echo $color; ?>">
            <?php echo $color; ?>
        </span>
    </p>
    
    <?php
    session_unset();
    session_destroy();
    ?>
</body>
</html>