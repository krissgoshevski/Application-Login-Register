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

// checkRequiredFields($username, $phone, $pw); 

  // validacija dali se prazni site inputi
    if(empty($username) || empty($phone) || empty($pw))
    {
      header("Location: 10.index.php?status=error&reason=required");
      die();
    }
  

//
if(strlen($username) < 4){
   // global $action; --> za pristap od sekoj fail da imam bilo kade

    header("Location: 10.index.php?status=error&reason=minusernamelength&action=$action");
    die();
}

if(strlen($pw) < 6){
header("Location: 10.index.php?status=error&reason=minlengthPW&oldusername=$username&action=$action"); // &oldusername=$username --> go vraka staroto korisnicko ime t.e. username
// za da koga ke go napisam korektno imeto i pw pomal da go zacuva imeto ! 
die();
}




$allusers = trim(file_get_contents("10users.txt"));
$allusers = explode(PHP_EOL, $allusers);
echo "<pre>"; print_r($allusers); // gi lista site users od failot 10users.txt vo array // print_r(array) --> e za array 

$currentUser = "$username|$phone|$pw"; echo $currentUser . PHP_EOL . "<hr>"; // ova === so txt failot !!!  vaka gi pecati site 

$loggedIn = false;

foreach($allusers as $listUsers)
{
    if($currentUser === $listUsers) // dali userot sto se logira e == na tojo so go ima veke u failot ili vo baza
    {
        $loggedIn = true;
        break; // za da ne gi pominuva drugite // kodot pobrzo se izvrsuva ! 
    }
}
// 10.3.successfullyLogged.php
// successfullyLogged
if($loggedIn){
    header("Location: 10.3.successfullyLogged.php?status=successfullyLogged"); 
    // ?status=successfullyLogged // VAZNO ! NO ova se proveruva vo 110.1.register.php 
  
} else {
    header("Location: 10.index.php?status=error&reason=notfound"); 
// ?status=error&reason=notfound --> ova go dava na 10.1.register.php//  NO proverka pravam vo 10.1.register.php dali e setiran

}

?>

