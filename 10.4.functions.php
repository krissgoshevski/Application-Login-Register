<?php  

  // $_SERVER['REQUEST_METHOD']
  // f-ja za da ne mi dozvoluva da odam preku url na stranicitte t.e so GET // me vraka nazat 
  function chechValidRequest($reqmethod){
    if($reqmethod != "POST"){
      header("Location: 10.index.php");
      //die();
  }
  }
///

  // -----------------------------
  // -----------------------------


  /*
   // validacija dali se prazni site inputs
   function checkRequiredFields($username, $phone, $pw)
   {
     if(empty($username) || empty($phone) || empty($pw))
     {
       header("Location: 10.index.php?status=error&reason=required");
       //die();
     }
   } */



function getOldusername($oldusername){
    if(isset($oldusername)){
        return $oldusername;
    }

    return ''; // isto kako else 
  } 

  // za doma ako postoi veke korisnik u baza da ne se popolnuva pak t.e. u text failot 

  // hasniranje i enkripcija razliki 
  // enkripcija --> john => dlajduashdasf
  // ako go imam dlajduashdasf imame nacin da dojdeme do john i obratno 

  // kaj hash ne moZeme



?>



  
 





