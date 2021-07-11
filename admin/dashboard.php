<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/App/controllers/posts.php"); 
 adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>admin Dashboard</title>
</head>
<body>

    <?php include(ROOT_PATH . "/App/includes/adminHeader.php"); ?>  
 
    <!-- admin "page-wrapper -->
    <div class="admin-wrapper">
               
           <!-- left sidebar -->
           <?php include(ROOT_PATH . "/App/includes/adminSidebar.php"); ?>
           <!-- //left sidebar -->
        <!-- admin Content -->
            <div class="admin-content">
               
           

                <div class="content">

                    <h2 class="page-title">Dashboard</h2>
                    <?php include(ROOT_PATH . "/App/includes/messages.php");?>
                   

                </div>
        </div>
        <!-- //admin Content -->
    </div>
    <!-- x Content X -->

 


<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>  
<!-- ckeditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<!-- SCRIPT -->
    <script src="../assets/js/script.js"></script>
</body>
</html>
