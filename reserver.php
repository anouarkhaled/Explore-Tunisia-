<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>About Guide Touristique Tunisia</title>
</head>

<body> 

   
    <div class="navbar">
        <div class="logo-title"> 
            <div>
                <img src="images/guide-book_11589660 (1).png" alt=""  class="logo">
            </div>
            <div >
                <p class="title"><span id="Ex">Exp</span><span id="plore">lore </span><span id="Tunisia">Tunisia</span> </p>    
            </div>
        
        </div>
        <div class="nav">
            <a class="b" href="index.html"><div class="bb" >Home</div></a>
            <a class="b" href="contact.html"><div class="bb" >Contact</div></a>
            <a class="b" href="services.html"> <div class="bb" >Services</div></a>
           <a class="b" href="reserver.html"><div class="bb1" >Réserver Maintenant </div></a>
           
        </div>
    </div>
   <div>
    <video autoplay muted loop id="myvideo">
        <source src="Discover Tunisia.mp4" type="video/mp4">
      </video></div>
      <br>
      <br><br><br><br>
      <h1>Réservation</h1>
      <form id="reservationForm" method="post">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" required><br><br>
          
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required><br><br>
          
          <label for="date">Date :</label>
          <input type="date" id="date" name="date" required><br><br>
          
          <label for="people">Nombre de personnes :</label>
          <input type="number" id="people" name="people" required><br><br>
          
          <input type="submit" value="Réserver">
      </form> 
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") { // Correction de "method" à "REQUEST_METHOD"
          ajouter();
      }
      
      function ajouter() {
        include("connex.php");
      $requete = $db->prepare('INSERT INTO reservations (name, email, date, people)
      VALUES (:name, :email, :date, :people)'); 
      $requete->execute(array('name' => $_POST['name'],'email' => $_POST['email'],
      'date' => $_POST['date'], 'people' => $_POST['people']));
      echo "Ajout de la nouvelle entrée est terminée avec succès ";
      }
      ?>
 

      <script src="script.js"></script>
     

    <footer id="footer"><p>&copy; 2024 Explore Tunisia.All rights reserved. </p> </footer>
</body>
</html>
