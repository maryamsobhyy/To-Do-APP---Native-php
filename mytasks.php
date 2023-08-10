<link rel="stylesheet" href="./mytasks.css">
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Task</th>
            <th>User_id</th>
            <th>Update</th>
            <th>Delete</th>
            
            
        </tr>

    </thead>
    <?php  
    $filename="./tasks.json";
    $tasks=file_get_contents($filename);
    $tasks1=json_decode($tasks,true);


    ?>
    <tbody>
        <?php    foreach($tasks1 as $task){
        ?>
        
        <tr>
            <?php
            foreach ($task as $key=>$value){
            
            ?>
            <td>
                <?php echo $value;}?>
            </td>
            <td><button><a href="update.php?id="></a>Update</button></td>
            
            <td><button><a href="delete.php?id=" ></a>Delete</button></td>
            
           
            </tr>
        <?php
        }
        ?>
       
        

    </tbody>
</table>
