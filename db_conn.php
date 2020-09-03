<?php $db = mysqli_connect("localhost", "root", "","todo") or die("QUERY Failed" . mysqli_error($db)); ?>
            <?php
                    if (isset($_POST['submit'])) {
                        $task = $_POST['task'];
                        $query = "INSERT INTO tasks (task) VALUES('$task')";
                        $run_query = mysqli_query($db,$query);
                    header('location: index.php'); /* <-- pievienoju šeit location, lai pirmā lapa pārmestu uz index failu, pēc pirmā uzdevuma ierakstīšanas un "Pievienot " pogas nospiešanas. */
                    } 
/* \_____izveido saiti starp front end un datubāzi - ievadītā info nonāk datubāzē ____/*/
            ?> 
             



