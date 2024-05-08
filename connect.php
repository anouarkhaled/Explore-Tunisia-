<?php

  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username1']) && isset($_POST['password1'])) {
        $username = $_POST['username1'];
        $password = $_POST['password1'];
    
        include("connex.php");
        $stmt = $db->prepare("SELECT * FROM clients WHERE username = :username1");
        $stmt->execute(array('username1' => $username));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if ($password == $user['password']){
                echo 'connection success';
                header("Location: dashboard.php");
                
             
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo  "Invalid username or password.";
        }
    } else {
        echo  "Please enter username and password.";
    }
}

?>