<?php
//check method 
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email_login=$_POST['email'];
    $password_login=$_POST['password'];
    $id=$_SESSION['id'];
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $password=$_SESSION['password'];
    

// validation if email and password exist or not
// get data fromjson file
$errors=[];
$filename="./users.json";
$get_data=file_get_contents($filename);
// convert string to array in json
$users=json_decode($get_data,true);
foreach($users as $user){
    $password=$user['password'];
       if($user['email'] == $email_login){

        if(password_verify($password_login,$password)){
          $login=true;
          break;

        } } 
        if ($login){
            $_SESSION['email']=$email;
            header("location :./profile.php");
            exit;
        }
        else{
            $errors['email']="email or password is not exist";}}

if (count($errors)){
    $errors=http_build_query($errors);
    header("location:login.php? $errors");
}

}
       
   









?>