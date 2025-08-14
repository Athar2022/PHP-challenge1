<?php

$name = isset($_GET['name']) ? filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING) : null;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Greeting Page</title>
</head>
<body>
    <h1>
        <?php
        if ($name) {
            echo "Hello, " . htmlspecialchars($name) . "!";
        } else {
            echo "Hello, Frind!";
        }
        ?>
    </h1>
    <p>This page demonstrates GET parameter handling.</p>
</body>
</html>