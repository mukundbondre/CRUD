
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="signIn.css">
</head>
<body>
    <div class="container">
        <h2 style="margin-left: 40%;">Sign In</h2>
        <form action="readDatabase.php" method="POST" id="signin-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Sign In</button>
        </form>
    </div>
</body>
</html>
