<?php include 'db_conn.php';    /*UPDATE UN EDIT DAĻA */
                                        /* importē vajadzīgo no iepriekšējās lapas  */

      if (isset($_GET['edit'])) {       
                                     /* TIEK IEGŪTA INFO NO DATUBĀZES */
           $id = $_GET['edit'];
      } 

      if (isset($_POST['edit'])){   
          $edit = $_POST['task'];    /* TIEK IEPOSTOA - ATAJUNOTA INFO NO DATUBĀZĒ */

          $query = "UPDATE task SET task1 = '$edit' WHERE id = $e_id";
          $run = mysqli_query($db,$query);
  
          if (!$run) {
              die("Failed");
            } 
            else{
                header("Location: index.php?updated");
            }
      }
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
       
       <script> href="js/main.js" </script>
     

    
    <title>To Do List</title>
</head>
<body>
<div class="animate__animated animate__zoomIn" > 
<div class="glider-contain multiple">


    <div class="header">
        <h1>Darāmo Lietu Saraksts</h1>
        <h2>Labot</h2>
    </div>

<button  id="atpakal"  type="submit" name="submit" class="btn" onclick="window.location.href='index.PHP';"> ATPAKAĻ </button>
        <form method="POST" action="">
        <?php if (isset($errors)) { ?>
            <p><?php echo $errors; ?></p>
        <?php } ?>
<!--\php sadaļa kurai vajadzētu neāļut ievadīt tukšu laukumu/-->

        <?php 
            $sql = "SELECT * FROM tasks WHERE id = $id"; 
            $resuls = mysqli_fetch_array($results) /* !!!!!!! un šeit es iesprūdu, saprotu ,
             ka problēma ir saistīta ar šo līniju,
             bet īsti neizpratu un neatradu vēl atbildi, kāda tieši ir problēma un kā to labot */
        ?>
            <input placeholder="Virsraksts" type="text" name="edit_todo" class="task" value="<?php echo $data['task'];?>" >
            
            <button type="submit" name="submit" class="btn">PIEVIENOT</button>
        </form>
     

   
</div>
</div>


<script src="js/glider.min.js">  </script>
<script src="js/jquery-1.8.1.min.js" type="text/javascript"></script>
     


</body>
</html>
