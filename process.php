<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
    
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['color'] = $color;
    
    header("Location: results.php", true, 303);
    exit();
} else {
    header("Location: form.php", true, 303);
    exit();
}
?>