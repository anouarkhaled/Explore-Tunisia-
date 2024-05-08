<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") { // Correction de "method" à "REQUEST_METHOD"
          ajouter();
      }
      
      function ajouter() {
        include("connex.php");
      $requete = $db->prepare('INSERT INTO reservations (name, email, date, people)
      VALUES (:name, :email, :date, :people)'); 
      

      try
        {
            $requete->execute(array('name' => $_POST['name'],'email' => $_POST['email'],
            'date' => $_POST['date'], 'people' => $_POST['people']));
            echo "Ajout de la nouvelle entrée est terminée avec succès 2";
            header("location:confirmreserve.html");
            
        }
        catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
      }

      ?>