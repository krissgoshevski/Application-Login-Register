<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.3.succesfullyLogged</title>
</head>
<body>
    <?php

  

    // status=successfullyLogged
if(isset($_GET['status']) && $_GET['status'] == "successfullyLogged"){
    echo "<b style='color:green; background-color:white; text-align:center;'> This user is succesfully logged in ! </b>";   
}
?>

<?php 
// require "10.4.functions.php";


?>



  
 
</body>
</html>
