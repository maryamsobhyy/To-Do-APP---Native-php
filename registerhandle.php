<?php
include ('./functions.php');
session_start();
//check method 
if (checkmethod($_POST)){
    //santize 
    //html special chars
    //trim
    //html entites
    $name=sanitize($_POST['name']);
    $email=sanitize($_POST['email']);
    $password=$_POST['password'];
    $password_pattern='/^[a-zA-z0]$/';
    $gender=$_POST['gender'];
//check information not empty
$errors=[];
if (strlen($name)==0){
    $errors['name']='name is required';
}
if (strlen($email)==0){
    $errors['email']='email is required';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email']='email is not valid email';
}}
if (strlen($password)==0){
    $errors['password']='password is required';
}elseif(strlen($password)>25){
    $errors['password']='password must be less than 25 chars';
}elseif(strlen($password)<3){
    $errors['password']='password must be more than 3 chars';
}
//validate email
$filename="./users.json";
$users=file_get_contents($filename);
$users1=json_decode($users,true);
foreach ($users1 as $user){
    if ($user['email']==$email){
        $errors['email']="email is already exists";
        
    }
    

}
$password3=(password_hash($password,PASSWORD_BCRYPT));
if (count($errors)){
    $errors=http_build_query($errors);
    header("location:index.php? $errors");
}

else{ 
    $users1[]=[
    "user_id" => !count($users1) ? 1 :++end($users1)["user_id"],
    "name" => $name,
    "email"=> $email,
    "password"=> $password3,

];
file_put_contents ($filename,json_encode($users1));
echo "done";
}






?>