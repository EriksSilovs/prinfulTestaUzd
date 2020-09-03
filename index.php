<?php include 'db_conn.php';?>
<!-- \datubāzes fails savienots ar index failu/ -->

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    

  
    <title>Darāmo lietu saraksts</title>
</head>
<body>


    <div class="header">
        <h1>Darāmo Lietu Saraksts</h1>
    </div>
</div>
</div>
        <form method="post" action="" >  
           

        <?php if (empty ($input)){
            $error = "Ievadi Uzdevumu";
        } ?>
          
<!--\php sadaļa kurai vajadzētu neāļut ievadīt tukšumu /-->

<div class="gen_text" >

            <input  id= "gen_input" placeholder="Uzdevums" type="text" name="task" class="task" value=""  >   <!-- ievadlauks ar pogu kas atrodas formā -->

            <button type="submit" name="submit" class="btn">PIEVIENOT</button> 
        </form>

     <table> <!-- tiek izveidota tabula lai varētu atspoguļot rezultātus-->
        <thead>
            <tr>
                <th>ID.</th>
                <th></th>
                <th></th>
                <th>Uzdevums</th>
                <th></th>
                <th></th>
                <th>Darbība</th>
                <th></th>
                <th>Datums un Laiks</th>
               
            </tr>
        </thead>

        <tbody>
                            <?php  /* tiek izveidota atpakaļatgriezeniska saite ar datubāzē iedavīto informāciju */
                                $run_task = mysqli_query($db,"SELECT * FROM tasks LIMIT 2000000");
                                while ($row = mysqli_fetch_assoc($run_task)){
                                    $id = $row ['id'];
                                    $task1 = $row['task'];
                                    $time = $row['time'];

                             ?>
                <tr>
                    <td> <input  type="checkbox"> <?php echo $id; ?> </td>
                    <td></td>
                    <td></td>
                    <td> <?php echo $task1; ?> </td> <!-- tiek atspoguļots uzdevums -->
                    <td></td>
                    <td></td>
                    <td class="edit"> <a href="edit.php?edit=<?php echo $id; ?>"> ✏️ Labot </a> </td> 
                                                                             <!-- Edit poga pieienota -->
                    <td class="delete"><a href="index.php?delete=<?php echo $id; ?>">🗑️ Dzēst</a></td> 
                                                                      <!-- tāpat arī pievienota dēst poga --> 
                    <td> <?php echo $time; ?> </td> <!-- tiek atspoguļots laiks kad veikts uzdevuma ieraksts -->
                </tr>
                                <?php } ?>

        </tbody>
                   
                   <?php /*_____ DELETE pogas funkcionalitāte _____ */
                        if (isset ($_GET['delete'])) {
                            $delete = $_GET['delete'];
                            $query = "DELETE FROM tasks WHERE id = '$delete'";
                            $run = mysqli_query($db,$query);
                        header('location: index.php');
                        }
                    ?>

                    
                 
     </table>   
</div>

</body>
</html>
