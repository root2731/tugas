<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if (isset($_SESSION['error'])): ?>
        <script>
            alert("<?= $_SESSION['error'] ?>");
        </script>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form method="POST" action="auth.php">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>