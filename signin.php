<?php

  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email= $_POST['email'];
        $password= $_POST['password'];
    
        include("connex.php");
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(array('email' =>$email));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if ($password == $user['password']){
                echo 'connection success';
                header("Location: index.html");
                
             
            } else {
                echo "Invalid username or password.";
                header("location: sign.html");
            }
        } else {
            echo  "Invalid username or password.";
            header("location: sign.html");
        }
    } else {
        echo  "Please enter username and password.";
    }
}

?>