<?php 
    include("path.php"); 
    include(ROOT_PATH . "/App/controllers/topics.php"); 

    $posts = array();
    $postTitle = 'Recent Post';
    
    if(isset($_GET['t_id'])){
        $posts = getPublishedTopicId($_GET['t_id']);
        $postTitle = "You search for posts user'" . $_GET['name'] . "' ";

    } elseif (isset($_POST['search-term'])) {
        $postTitle = "You search for '" . $_POST['search-term'] . "' ";
        $posts = searchPosts($_POST['search-term']);
    }else{        
        $posts = getPublishedPosts();
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/admin.css">

</head>
<body>
<?php include(ROOT_PATH . "/App/includes/header.php");?>
<?php include(ROOT_PATH . "/App/includes/messages.php");?>
<!--  page-wrapper -->


    <div class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">Treding Post</h1>  
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
            <?php foreach ($posts as $post): ?>
                <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']?></a></h4>
                            <i class="far fa-user"><?php echo $post['username']?></i>
                            &nbsp;
                            <i class="far fa-calendar"><?php echo date('F j Y', strtotime($post['created_at'])) ?></i>
                        </div>
                </div>
            <?php endforeach; ?>
             
            </div>
        </div> 
        <!-- Content -->
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postTitle; ?></h1>
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user"><?php echo $post['username']; ?></i>&nbsp;
                            <i class="far calendar"><?php echo date('F j Y', strtotime($post['created_at'])) ?></i>
                            <p class="preview-text">
                            <?php echo html_entity_decode(substr( $post['body'], 0, 150). '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>             
                <?php endforeach; ?>

               
                
                
            </div>
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topic</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic):?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>                     
                        <?php endforeach; ?>
                
                    </ul>
                </div>
            </div>
        </div>
        <!-- x Content X -->
    </div>
    <?php include(ROOT_PATH . "/App/includes/footer.php");?>


<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>  
<!-- SLICK JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- SCRIPT -->
    <script src="assets/js/script.js"></script>
</body>
</html>
