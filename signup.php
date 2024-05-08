<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include("connex.php");
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
            if ($_POST['password']== $_POST['confirm_password']) {
                $req = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $req->execute(array('username'=> $_POST['confirm_password'], 'email'=>  $_POST['email'],'password' => $_POST['password'],));

                header("Location: index.html");
            } else {
                echo "Les mots de passe ne correspondent pas.";
                header("location: sign.html");
            }
        } else {
            echo "Veuillez remplir tous les champs du formulaire.";
        }
}
?>
