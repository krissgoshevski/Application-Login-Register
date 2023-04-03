<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.login.php</title>
</head>
<body>
    <form method="POST" action="10.3.successfullyLogged.php"></form>
</body>
</html>

<?php 
require_once('10.4.functions.php');
chechValidRequest($_SERVER['REQUEST_METHOD']);

$action = "login";

$username = $_POST['username'];
$phone = $_POST['phone'];
$pw = $_POST['pw'];

  // validacija dali se prazni site inputi
    if(empty($username) || empty($phone) || empty($pw))
    {
      header("Location: 10.index.php?status=error&reason=required");
      die();
    }
  
// validation username
if(strlen($username) < 4){
    header("Location: 10.index.php?status=error&reason=minusernamelength&action=$action");
    die();
}

// validation pw
if(strlen($pw) < 6){
header("Location: 10.index.php?status=error&reason=minlengthPW&oldusername=$username&action=$action");
die();
}




$allusers = trim(file_get_contents("10users.txt"));
$allusers = explode(PHP_EOL, $allusers);
echo "<pre>"; print_r($allusers); // gi lista site users od failot 10users.txt vo array

$currentUser = "$username|$phone|$pw"; echo $currentUser . PHP_EOL . "<hr>"; // ova === so txt failot !

$loggedIn = false;
foreach($allusers as $listUsers)
{
    if($currentUser === $listUsers) // dali userot sto se logira e == na toj so go ima veke u failot ili vo baza
    {
        $loggedIn = true;
        break; // za da ne gi pominuva drugite // kodot pobrzo se izvrsuva  
    }
}

// successfullyLogged
if($loggedIn){
    header("Location: 10.3.successfullyLogged.php?status=successfullyLogged"); 
    die();  
} else {
    header("Location: 10.index.php?status=error&reason=notfound");
    die();
}

?>

