    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <div class="sb-sidenav-menu-heading">Danh Sách Quản Lý </div>
            <a class="nav-link" href="index.php?mod=category&act=index">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Danh Mục
            </a>
            <a class="nav-link" href="index.php?mod=post&act=index">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Bài Viết
            </a>
            <?php if($_SESSION['auth']['email']=='admin@gmail.com'){
              require_once('Views/Partials/sidebarUser.php');
            };
            ?>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Đăng nhập bởi: <?=$_SESSION['auth']['name']?></div>
    </div>
</nav>
