<header style="background:#055f9b">
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
            <h1 class="logo-text"><span>Info </span>development</h1>
        </a>
        <i class="fa fa-bars menu-toggle showing"></i>
        <ul class="nav ">
            <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li id="option"><a href="#">Options</a>
                <ul style="left:0px" class="sous_menu">
                    <li><a href="#">Landing</a></li>
                    <li><a href="#">Team</a></li>                 
                    <li><a href="#">Actions</a></li>
                    <li><a href="#">Projects</a></li>
                </ul>
            </li>
            <?php if(isset($_SESSION['id'])): ?>
                <li>
                    <a href="#" class="log_users">
                        <i class="fa fa-user"></i>
                        <?php  echo $_SESSION['username']; ?>
                        <i class="fa fa-chevron-down" style="font-size:.8em"></i>
                    </a>
                    <ul class="Dashboard">
                        <?php if($_SESSION['admin']):?>
                        <li><a href="<?php echo BASE_URL . 'admin/dashboard.php'?>">Dashboard</a></li>
                        <?php endif;?>
                        <li><a href="<?php echo BASE_URL . '/logout.php'?>" class="logout">Logout</a></li>
                    </ul>
                </li>

            <?php else: ?>
                <li><a href="<?php echo BASE_URL . '/register.php'?>">Sign Up</a></li>
                <li><a href="<?php echo BASE_URL . '/login.php'?>">Login</a></li>
            <?php endif; ?>
            
        </ul>
    </header>