<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/App/controllers/users.php"); 
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
 
    <!-- admin "page-wrapper -->
    <div class="admin-wrapper">
        <!-- Left Sidebar -->
        <?php include(ROOT_PATH . "/App/includes/adminSidebar.php"); ?>

        <!-- //Left Sidebar -->
        <!-- admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>
           

                <div class="content">

                    <h2 class="page-title">Edit User</h2>

                   <form action="edit.php" method="post">
                   <?php include(ROOT_PATH . "/App/helpers/formErrors.php");?>

                   <input type="hidden" name="id" value="<?php echo $id; ?>">

                   <div>            
                        <label for="email">Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>            
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
            
                    <div>            
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>
            
                    <div>            
                        <label for="password">Password Confirm</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                    </div>
            
                    <div>
                        <?php if (isset($admin) && $admin = 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin" id="">
                                Admin
                            </label>
                        <?php endif; ?>
                        
                    </div>  
                        <div>
                            <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                        </div>

                   </form>

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
    <script src="../../assets/js/script.js"></script>
</body>
</html>
