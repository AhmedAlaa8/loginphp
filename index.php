
<?php session_start();

if(!isset($_SESSION['email']))
{
    header('location: ./login.php');
}
?> 


<?php include "./layouts/heder.php" ?>



<h1 style=" text-align: center;margin-top: 5em;color:#1a76ff">Haloo my friends my name is Ahmed Alaa I love programming.</h1>


<?php include "./layouts/footer.php" ?>