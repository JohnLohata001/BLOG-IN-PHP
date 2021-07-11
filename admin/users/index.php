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

                    <h2 class="page-title">Manage User</h2>
                    <?php include(ROOT_PATH . "/App/includes/messages.php"); ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach ($admin_users as $key => $user) :?>

                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
                                <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                            </tr>

                        <?php endforeach;?>
                           
                        </tbody>
                    </table>

                </div>
        </div>
        <!-- //admin Content -->
    </div>
    <!-- x Content X -->

 


<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>  
<!-- SCRIPT -->
    <script src="../../assets/js/script.js"></script>
</body>
</html>
