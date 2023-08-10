<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
       <h1>Registration Form</h1>
            <label >Name:</label>
            <input type="text" name="name" >
            <?php   if (isset($_GET['name'])){?>
            <p class="error"><?php echo $_GET['name'] ;?> </p>
            <?php }?>
            <label >Email:</label>
            <input type="text" name="email" >
            <?php   if (isset($_GET['email'])){?>
            <p class="error"><?php echo $_GET['email'] ;?> </p>
            <?php }?>
            <label >Password:</label>
            <input type="password"name="password">
            <?php   if (isset($_GET['password'])){?>
            <p class="error"><?php echo $_GET['password'] ;?> </p>
            <?php }?>
            <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            <?php   if (isset($_GET['gender'])){?>
            <p class="error"><?php echo $_GET['gender'] ;?> </p>
            <?php }?>
            <br>

            <input type="submit" value="Register">
            <label>If you have account</label>
            <button><a href="login.php">Login</a></button>
    </form>
    
</body>
</html>