<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
        <a href="index.php?mod=article&act=index" class="text-nowrap logo-img">
            <img src="views/assets/images/logos/logo.png" width="100" alt="">
        </a>
        <?php if (isset($_SESSION['is_logged_in'])): ?>
            <span class="fw-bold">Xin chào <?php echo $_SESSION['user_data']['name']; ?>, <a href="index.php?mod=user&act=logout" class="text-danger">Đăng xuất</a></span>
        <?php else: ?>
            <div>
                <a href="index.php?mod=user&act=login" class="btn btn-info">Đăng nhập</a>
                <a href="index.php?mod=user&act=register" class="btn btn-warning">Đăng ký</a>
            </div>
        <?php endif; ?>
    </nav>
</header>