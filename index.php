<?php










//CREARE LA NOSTRA PASSWORD CON DEI PARAMETRI
$pwd = readline("inserisci la tua password\n");


 
//LA PASSWORD DOVRà CONTENERE ALMENO 8 CARATTERI

 
function checkCaratteri ($password){

 
    if (strlen($password) >= 8){
        
        return true;
    }else{
    return false;
    }
}



/*  checkCaratteri ($pwd); */


 



//LA PASSWORD DEVE CONTENERE ALMENO UNA MAIUSCOLA
 
function checkMaiuscola ($password){

for($i=0; $i< strlen($password); $i++){
    if (ctype_upper($password[$i])==true){
       
        return true;
   
}
}

return  false;
}
/* checkMaiuscola($pwd); */



//LA PASSWROD DOVRà CONTERE ALMENO UN NUMERO

 
 function checkNumero ($password){

    for($i=0; $i< strlen($password); $i++){
        if (is_numeric($password[$i])==true){
         
            return true;
       
    }
    }
   
    return  false;
    }
/*  checkNumero($pwd); */
 
 

 //LA PASSWORD DEVE CONTENERE ALMENO UN CARATTERE SPECIALE 

 
$special_chars = ["?","!","%","*","-","$","(",")"];
 $check=false;
for($i=0; $i< strlen($pwd); $i++){
  



     if (in_array($pwd[$i], $special_chars)){
        $check=true;
    
}
}
if($check == false){
    
} 


function checkSpeciale ($password,$array){
    for($i=0; $i< strlen($password); $i++){
        if (in_array($password[$i], $array)){
      
            return true;
    }
}

return false;
}


/* checkSpeciale ($pwd,$special_chars) */
 




//ORA METTERE TUTTO INSIEME


function checkPassword ($password,$array){

    if(checkCaratteri($password)&& checkNumero($password)&& checkMaiuscola($password)&& checkSpeciale($password,$array) ){
return true ;
    }else{
       return false;
    }
}
/* checkPassword($pwd,$special_chars); */


do {
   $pwd = readLine ("Password sbagliata! Riprova!\n") ;
} while (!checkPassword($pwd ,$special_chars));




?>