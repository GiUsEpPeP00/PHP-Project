<?php
    $password = $_POST['Password'];
    $passwordfile = file_get_contents('password.json');
    $passwordFileDecoded = json_decode($passwordfile, false);
    $LoginUtente = password_verify($password, "$passwordFileDecoded->passwordUtente");
    $LoginAdmin = password_verify($password, "$passwordFileDecoded->passwordAdmin");
    if ($LoginUtente) {
        $Utente = true;
        header("Location: sondaggio.php?Utente");
    } else {
        if ($LoginAdmin) {
            $Admin = true;
            header("Location: sondaggio.php?Utente");
        } else {
            $passwordErrata = false;
            header("Location: login.php?passwordErrata");
        }
    }
?>