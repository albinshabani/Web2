<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome, <?php echo $_SESSION['first_name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="sign_up.php" class="nav-link">Sign Up</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>
