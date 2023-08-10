<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO app</title>
    <link href="style2.css" rel="stylesheet">
</head>
<body>

     <form action="handletask.php" method="POST">
     <input type="text" name="task" placeholder="Enter task">

     <button  type="submit"><a class="link" >Add Task</a></button>
     <?php
session_start();
      if (isset($_SESSION['errors'])) :
        foreach ($_SESSION['errors'] as $error) : ?>
           <p class="error"> <?php echo $error; ?></p>
      <?php endforeach;
      unset($_SESSION['errors']);
      endif;
      ?>
   </form>
    
</body>
</html>
