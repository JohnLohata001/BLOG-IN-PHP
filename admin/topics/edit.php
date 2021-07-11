<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/App/controllers/topics.php"); 
     adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>admin section</title>
</head>
<body>
    <?php include(ROOT_PATH . "/App/includes/adminHeader.php"); ?>
    
        <div class="admin-wrapper">
           
           <!-- left sidebar -->
           <?php include(ROOT_PATH . "/App/includes/adminSidebar.php"); ?>
           <!-- //left sidebar -->

           <!-- admin content -->

                <div class="admin-content">
                    <div class="button-group">
                        <a href="create.php" class="btn btn-big">Add Topic</a>
                        <a href="index.php" class="btn btn-big">Manage Topic</a>
                    </div>
                    <div class="content">
                        <h2 class="paget-title">Edit Topic</h2>
                        <?php include(ROOT_PATH . "/App/helpers/formErrors.php");?>

                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" >

                            <div>
                                <label>Title</label>
                                <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                            </div>
                            <div>
                                <label>Body</label>
                                <textarea name="description" id="body" ><?php echo $description;?></textarea>
                            </div>
                           
                            <div>
                                <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
                                <!-- <button type="submit" onclick="goBack()" class="btn btn-big">Cancel</button> -->

                            </div>
                        </form>
                    </div>
                </div>

           <!-- //admin content -->
                     

        </div>

 <!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>  
<!-- ckeditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<!-- SCRIPT -->
    <script src="../../assets/js/script.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    
</body>
</html>