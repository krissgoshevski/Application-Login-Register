
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index form</title>
    <link rel="stylesheet" href="10.1.css">
  
  
     
</head>
<body>

<?php
   //  type=\"text/css\"
   // <h1 class='use'>How to use CSS in Php echo</h1>"; 
   echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"10.1.css\" />";

    if(isset($_GET['action']) && $_GET['action'] == 'login'){
      if(isset($_GET['status']) && $_GET['status'] == "error") 
      {    
          // status=error&reason=notfound
        if(isset($_GET['reason']) && $_GET['reason'] == "notfound"){
          echo "<p class='notfound'>Output for login form: Not found this user !</p>"; 
        }
        // status=error&reason=required
        if(isset($_GET['reason']) && $_GET['reason'] == "required"){
          echo "<b class='req'style='color:blue; background-color:white; padding:1px; margin:280px;'> Output for login form: All fields are required ! </b>"; 
        }
        // status=error&reason=minlengthPW
        if(isset($_GET['reason']) && $_GET['reason'] == "minlengthPW"){
          echo "<b style='color:blue; background-color:white; padding:1px; margin:280px;'>  Output for login form: Password must be with at least 6 chars ! </b>";
        }    
        // minusernamelength
        if(isset($_GET['reason']) && $_GET['reason'] == "minusernamelength"){
          echo "<b style='color:blue; background-color:white; padding:1px; margin:280px;'>  Output for login form: Username must be with at least 5 chars ! </b>"; 
        }  
      }  
    } else if(isset($_GET['action']) && $_GET['action'] == 'register'){
      if(isset($_GET['status']) && $_GET['status'] == "error") 
      {    
          // status=error&reason=notfound
        if(isset($_GET['reason']) && $_GET['reason'] == "notfound"){
          echo "<b style='color:red; background-color:white; padding:1px; margin:280px;'> Output from register form: Not found this user ! </b>"; 
        }
        // status=error&reason=required
        if(isset($_GET['reason']) && $_GET['reason'] == "required"){
          echo "<b style='color:blue; background-color:white; padding:1px; margin:280px;'> Output from register form: All fields are required ! </b>"; 
        }
        // status=error&reason=minlengthPW
        if(isset($_GET['reason']) && $_GET['reason'] == "minlengthPW"){
          echo "<b style='color:blue; background-color:white; padding:1px; margin:280px;'>  Output from register form: Password must be with at least 6 chars ! </b>";
        }    
        // minusernamelength
        if(isset($_GET['reason']) && $_GET['reason'] == "minusernamelength"){
          echo "<b style='color:blue; background-color:white; padding:1px; margin:280px;'>  Output from register form: Username must be with at least 5 chars ! </b>"; 
        }  
      } 

    }
?>
    <div class="formOne">
    <h2>Login form</h2>
    <form method="POST" action="10.login.php"> 
    <label for="name"> Username: </label>
    <input type="text" name="username" placeholder="enter your username..." id="name" 
    value="<?php echo (isset($_GET['oldusername'])) ? $_GET['oldusername'] : ""; ?>" /> 
    <br>
    <!--  value="< ?php echo getOldusername($_GET['oldusername']) ?>"-->
    <!-- // ternary operation // echo (isset($_GET['oldusername'])) ? $_GET['oldusername'] : ""; -->
   
    <label for="phone">Phone: </label>
    <input type="text" name="phone" id="phone" placeholder="enter your phone..." /> 
    <label for="pw">   Password: </label>
    <input type="password" name="pw" id="pw" placeholder="enter your password..."  /> <br> <br> 
    <label for="submit"></label> 
    <button type="submit" name="submit" id="submit"> Login </button>     

    </form>
    </div> <br> 

    <div class="secondform">
    <h2>Register form</h2>
    <form method="POST" action="10.register.php">
    <label for="name"> Username: </label>
    <input type="text" name="username" placeholder="enter your username..." id="name"  
    value="<?php echo (isset($_GET['oldusername'])) ? $_GET['oldusername'] : ""; ?>" /> <br>
    <label for="email">Email: </label>
    <input type="text" name="email" id="email" placeholder="enter your email..." /> 
    <label for="pw">   Password: </label>
    <input type="password" name="pw" id="pw" placeholder="enter your password..."  /> <br> <br> 
    <label for="submit"></label> 
    <button type="submit" name="submit" id="submit"> Register </button>  
    </form>
    </div>
</body>
</html>







