<?php
session_start();
// check method 
if ($_SERVER['REQU EST_METHOD']=="POST"){
   $new_task= $_POST['task'];
   $errors=[];
   
if (strlen($new_task)==0){

$errors[] ="please enter a valid task";}
$filename="./tasks.json";
$tasks=file_get_contents($filename);
$tasks1=json_decode($tasks,true);
foreach ($tasks1 as $task){
    if ($task['name']==$new_task){
       $errors[]="task is already exits";
         }     }
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("location:./profile.php");
    header("./profile.php");
    die;
    }
else{ 

    $id=$_SESSION['user_id'];
    $tasks1[]=[
    "id" => !count($tasks1) ? 1 :++end($tasks1)["id"],
    "name" => $new_task,
    "user_id"=>$id
];
file_put_contents ($filename,json_encode($tasks1));
header("location:./mytasks.php");
}}



?>