
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./loginhandle.php" method="post">
       <h1>Login page</h1>
            
            <label >Email:</label>
            <input type="text" name="email" >
            <?php   if (isset($_GET['email'])){?>
            <p class="error"><?php echo $_GET['email'] ;
            
            ?> </p>
            <?php }$_GET['email'] = null;
            ?>

            <label >Password:</label>
            <input type="password"name="password">
            
           
            

            <input type="submit" value="Login">
    </form>
    
</body>
</html>