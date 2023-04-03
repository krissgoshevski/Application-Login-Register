<?php  

  // $_SERVER['REQUEST_METHOD']
  // f-ja za da ne mi dozvoluva da odam preku url na stranicitte t.e so GET // me vraka nazat 
  function chechValidRequest($reqmethod){
    if($reqmethod != "POST"){
      header("Location: 10.index.php");
      //die();
  }
  }



function getOldusername($oldusername){
    if(isset($oldusername)){
        return $oldusername;
    }

    return ''; 
  } 
?>



  
 





