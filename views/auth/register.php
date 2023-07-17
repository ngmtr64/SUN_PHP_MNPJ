<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHPSUN-MiniProject</title>
        <link rel="stylesheet" href="views/assets/css/styles.min.css" />
    </head>
    <body>
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
            <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                        <div class="card-body">
                            <h2 class="text-center mb-3">Đăng ký tài khoản</h2>
                            <form action="index.php?mod=user&act=store" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    value="<?php echo isset($_SESSION['old_input']['name']) ? $_SESSION['old_input']['name'] : ''; ?>">
                                    <?php if (isset($_SESSION['errorMessages']['name'])): ?>
                                        <div class="text-danger"><?php echo $_SESSION['errorMessages']['name']; ?></div>
                                        <?php unset($_SESSION['errorMessages']['name']); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    value="<?php echo isset($_SESSION['old_input']['email']) ? $_SESSION['old_input']['email'] : ''; ?>">
                                    <?php if (isset($_SESSION['errorMessages']['email'])): ?>
                                        <div class="text-danger"><?php echo $_SESSION['errorMessages']['email']; ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                    value="<?php echo isset($_SESSION['old_input']['password']) ? $_SESSION['old_input']['password'] : ''; ?>">
                                    <?php if (isset($_SESSION['errorMessages']['password'])): ?>
                                        <div class="text-danger"><?php echo $_SESSION['errorMessages']['password']; ?></div>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Đăng ký</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Đã có tài khoản?</p>
                                    <a class="text-primary fw-bold ms-2" href="index.php?mod=user&act=login">Đăng nhập</a>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="views/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="views/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <?php 
            unset($_SESSION['errorMessages']);
            unset($_SESSION['old_input']);
        ?>
    </body>
</html>