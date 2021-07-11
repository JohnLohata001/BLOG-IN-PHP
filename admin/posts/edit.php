<?php include("../../path.php"); ?>
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>admin section</title>
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
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Post</a>
                </div>
           

                <div class="content">

                    <h2 class="page-title">Edit Post</h2>

                   <form action="edit.php" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo $id; ?>">
                   <?php include(ROOT_PATH . "/App/helpers/formErrors.php");?>

                   <div>
                            <label for="">Title</label>
                           <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                        </div>
                        <div>
                            <label for="">Body</label>
                           <textarea name="body" id="body"><?php echo $body; ?></textarea>
                        </div>
                        <div>
                            <label for="">Image</label>
                           <input type="file" name="image" class="text-input">
                           
                        </div>
                        <div>
                            <label for="">Topics</label>
                            <select name="topic_id" class="text-input">
                                <option value=""></option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                        <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>                                    
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                        <?php if (empty($published) && $published == 0): ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked >
                                Publish
                            </label>
                        <?php endif; ?>
                        </div>
                        <div>
                            <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
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
