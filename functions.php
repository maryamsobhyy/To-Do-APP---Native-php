<?php
function checkmethod ($method){
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        return true;
    }
    else{
        return false;
    }
}
// sanitize
function sanitize($input){
    return trim(htmlspecialchars(htmlentities($input)));
}
// required
function validemail($email){
    if (strlen($email)==0){
        $errors['email']='email is required';
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']='email is required';
        
    
    }}
// redirect 











?>