<!DOCTYPE html>
<html>

<head>
    <title>Log In</title>
</head>

<body>
    <p>Inserisci la password per accedere al sondaggio</p>
    <form action="verify.php" method="post">
        <label for="Password">Password</label>
        <input type="password" name="Password" id="Password" required>
        <input type="submit" value="Log In">
    </form>
    <p style="color : red">
        <?php
        if (isset($_GET['passwordErrata'])) {
            echo "Ppassword errata";
        }
        ?>
    </p>
</body>

</html>