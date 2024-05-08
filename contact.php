<?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") { // Correction de "method" à "REQUEST_METHOD"
          ajouter1();
      }
      
      function ajouter1() {
        include("connex.php");
      $req= $db->prepare('INSERT INTO contact ( name, email ,country, tel,message)
      VALUES (:name,:email , :country, :tel,:message)'); 
      

        
            $req->execute(array('name' => $_POST['name'],'email'=>$_POST['email'], 'country'=>$_POST['country'],'tel' => $_POST['tel'],
            'message'=>$_POST["message"]));
            echo "contact successfly";
            header("Location: index.html");
       
        {
        die('Erreur : ' . $e->getMessage());
        }
      }

      ?>