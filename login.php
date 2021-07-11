<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/App/controllers/users.php"); 
    guestOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include(ROOT_PATH . "/App/includes/header.php");?>

   
<div class="auth-content">
    <form action="login.php" method="post">
        <h2 class="form-title">Login</h2>
        <?php include(ROOT_PATH . "/App/helpers/formErrors.php");?>
        
        <div>            
            <label for="username">Username</label>
            <input type="text" name="username" value = "<?php echo $username; ?>" class="text-input">
        </div>
       
        <div>            
            <label for="password">Password</label>
            <input type="password" name="password" value = "<?php echo $password; ?>" class="text-input">
        </div>       

        <div>
            <button type="submit" name="login-btn" class="btn btn-big">Login</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . '/register.php' ?> ">Sign Up</a></p>
    </form>
    
</div>

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>  

<!-- SCRIPT -->
    <script src="assets/js/script.js"></script>
</body>
</html>
