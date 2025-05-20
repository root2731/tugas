<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-card {
            max-width: 500px;
            margin: auto;
            margin-top: 100px;
        }

        .w3-input {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="w3-card w3-padding">
        <h2 class="w3-center">Login Form</h2>
        <?php if (isset($_GET['error'])): ?>
            <div class="w3-panel w3-red">
                <p>Email atau password salah!</p>
            </div>
        <?php endif; ?>

        <form action="auth.php" method="post" class="w3-container">
            <label>Email</label>
            <input class="w3-input w3-border" type="email" name="email" required>

            <label>Password</label>
            <input class="w3-input w3-border" type="password" name="password" required>

            <button type="submit" class="w3-button w3-block w3-blue w3-margin-top">Login</button>
        </form>
    </div>

</body>

</html>