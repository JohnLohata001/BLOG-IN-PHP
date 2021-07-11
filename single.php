<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/App/controllers/posts.php"); 

if (isset($_GET['id']) ) {
    
    $post = selectOne('posts',['id' => $_GET['id']]);
    // dd($post);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | techdeveinfo </title>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include(ROOT_PATH . "/App/includes/header.php");?>

    <div class="page-wrapper"> 
    <!-- Content -->
        <div class="content clearfix">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?> </h1>
                <div id="content-single">
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" width="100%" class="slider-image">
                <small>

                <i class="far fa-calendar"><?php echo date('F j Y', strtotime($post['created_at'])) ?></i>

                </small>
                </div>
                <div class="post-content">
                <?php echo html_entity_decode($post['body']); ?> 
                </div>
            </div>
            <!-- SIDEBAR -->
            <div class="sidebar single"> 

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>                    
                    <?php foreach ($posts as $p):?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                            <a href="#" class="title">
                                <h4><?php echo $p['title']; ?></h4>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topic</h2>
                    <ul>
                        <?php foreach ($topics as $topic):?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
</div>
    <!-- x Content X -->

    <!-- Footer -->
    <?php include(ROOT_PATH . "/App/includes/footer.php");?>
    <!-- x Footer -->


<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>  
<!-- SLICK JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- SCRIPT -->
    <script src="js/script.js"></script>
</body>
</html>

