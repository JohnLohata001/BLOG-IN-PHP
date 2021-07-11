<header>
        <a class="logo" href="<?php echo BASE_URL . "/index.php"; ?>" >
            <h1 class="logo-text"><span>Awa</span>Inspires</h1>
        </a>
        <i class="fa fa-bars menu-toggle showing"></i>
        <?php if(isset($_SESSION['username'])): ?>
            <ul class="nav">
                <li>
                    <a href="#" class="log_users">
                        <i class="fa fa-user"></i>
                        <?php echo $_SESSION['username']; ?>
                        <i class="fa fa-chevron-down" style="font-size:.8em"></i>
                    </a>
                    <ul class="Dashboard"> 
                        <li><a href="<?php echo BASE_URL . "./logout.php";?>" class="logout">LogOut</a></li>
                    </ul>
                </li>            
            </ul>
        <?php endif; ?>
    </header>