<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
    <form method="POST" action="process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="color">Favorite Color:</label>
        <input type="text" id="color" name="color" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>