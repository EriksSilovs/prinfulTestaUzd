<?php include 'db_conn.php';?>
<!-- \datubāzes fails savienots ar index failu/ -->

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
       
       <script> href="js/main.js" </script>
     
    <title>Darāmo lietu saraksts</title>
    
</head>
<body>

<div class="animate__animated animate__bounceInLeft" > 
<div class="glider-contain multiple">

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

</div>

</div>
</div>


<script src="js/glider.min.js">  </script>
<script src="js/jquery-1.8.1.min.js" type="text/javascript"></script>
     


</body>
</html>
