<?php
if (isset($_POST['password'])) {
echo'ok';
  
} else {
 echo 'no';
}
      if ($_SERVER["REQUEST_METHOD"] == "POST") { // Correction de "method" à "REQUEST_METHOD"
          ajouter1();
      }
      
      function ajouter1() {
        include("connex.php");
      $req= $db->prepare('INSERT INTO clients (username, name, email ,password,country, tel)
      VALUES (:username, :name,:email ,:password, :country, :tel)'); 
      

      try
        {
          if ($_POST['password']==$_POST['confirm_password']){

        
            $req->execute(array('username'=> $_POST['username'],'name' => $_POST['name'],'email'=>$_POST['email'],'password' => $_POST['password'],
        'country'=>$_POST['country'],'tel' => $_POST['tel']));
            echo "inscription avec succée";
            header("Location: index.html");
        }else{
          echo "les mots de passe ne correspondent pas ";
        }
            
        }
        catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
      }

      ?>