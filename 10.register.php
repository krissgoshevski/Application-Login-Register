<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.register</title>
</head>
<body>
<form method="POST" action="10.3.successfullyLogged.php"> 
</form>
    
</body>
</html>

<?php 

require_once('10.4.functions.php');
chechValidRequest($_SERVER['REQUEST_METHOD']);

$action = "register";

$username = $_POST['username'];
//$phone = $_POST['phone'];
$email = $_POST['email'];
$pw = $_POST['pw'];

// checkRequiredFields($username, $phone, $pw); 

  // validacija dali se prazni site inputi
    if(empty($username) || empty($email) || empty($pw))
    {
      header("Location: 10.index.php?status=error&reason=required");
      die();
    }
  


if(strlen($username) < 4){
    header("Location: 10.index.php?status=error&reason=minusernamelength&action=$action");
    die();
}

if(strlen($pw) < 6){
header("Location: 10.index.php?status=error&reason=minlengthPW&oldusername=$username&action=$action"); // &oldusername=$username --> go vraka staroto korisnicko ime t.e. username
// za da koga ke go napisam korektno imeto i pw pomal da go zacuva imeto ! 
die();
}

// za doma checkUsernameExists($username); 
// ako posto iveke korisnik so toa korisnicko ime da vrati poraka username taken ! 
?>