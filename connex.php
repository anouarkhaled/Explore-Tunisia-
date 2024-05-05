
<?php
try
{
$db =  new PDO('mysql:host=localhost;dbname=mybase;charset=utf8mb4_general_ci', 'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
?>
 