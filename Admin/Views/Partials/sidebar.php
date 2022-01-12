<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <div class="sb-sidenav-menu-heading">List To Manage </div>
            <a class="nav-link" href="index.php?mod=category&act=index">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Category
            </a>
            <a class="nav-link" href="index.php?mod=post&act=index">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Post
            </a>
            <?php if($_SESSION['auth']['email']=='admin@gmail.com'){
              require_once('Views/Partials/sidebarUser.php');
            };
            ?>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as: <?=$_SESSION['auth']['name']?></div>
    </div>
</nav>
