
<?php
try
{
$db =  new PDO('mysql:host=localhost;dbname=mybase;charset=UTF8', 'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}

?>
 