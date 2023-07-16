<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHPSUN-MiniProject</title>
  <link rel="stylesheet" href="views/assets/css/styles.min.css" />
  <link rel="stylesheet" href="views/assets/css/styles.css" />
  <link rel="stylesheet" href="views/assets/libs/toastr/toastr.min.css" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <?php require_once("views/include/header.php") ?>
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                      <div class="card-body p-4">
                        <div class="search-box">
                          <h5 class="card-title fw-semibold mb-4">Danh sách bài viết</h5>
                          <?php if (isset($_SESSION['is_logged_in'])): ?>
                            <a href="index.php?mod=article&act=create" class="btn btn-success">Thêm</a>
                          <?php endif; ?>
                        </div>                
                        <div class="table-responsive">
                          <table class="table align-middle">
                            <thead class="text-dark fs-4">
                              <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Ảnh nền</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tiêu đề</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tác giả</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Danh mục</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0" style="width:250px;">Mô tả</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Ngày</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Sửa đổi</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"></h6>
                                </th>
                              </tr>
                            </thead>                    
                            <tbody id="articleTable">
                              <?php foreach($articles as $key => $item) {?>
                              <tr>
                                <td class="border-bottom-0">
                                    <p class="fw-semibold mb-0">
                                      <img style="width:150px; height:auto;" src="<?= $item['thumbnail'] ?>" />
                                    </p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-semibold mb-0" style="width:200px;"><?= $item['title'] ?></p>
                                </td>                     
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?= $item['author'] ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?= $item['category'] ?></p>
                                </td>
                                <td class="border-bottom-0">
                                  <p class="mb-0 fw-normal text-wrap" style="width:250px;"><?= $item['description'] ?></p>
                                </td>
                                <td class="border-bottom-0">
                                  <p class="mb-0 fw-normal"><?= $item['date'] ?></p>
                                </td>
                                <td class="border-bottom-0">
                                  <p class="mb-0 fw-normal"><?= $item['update_at'] ?></p>
                                </td>
                                <td class="border-bottom-0" style="width:160px;">
                                <?php if (isset($_SESSION['is_logged_in'])): ?>
                                  <a href="index.php?mod=article&act=edit&id=<?= $item['id'] ?>" class="btn btn-info">Xem</a>
                                  <a id="delete" href="index.php?mod=article&act=delete&id=<?= $item['id'] ?>" onclick="showAlert(event)" class="btn btn-danger">Xoá</a>
                                <?php endif; ?>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>                    
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <script src="views/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="views/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="views/assets/libs/toastr/toastr.min.js"></script>
    <script src="views/assets/libs/sweetalert/sa2.min.js"></script>
    <script>
      function showAlert(event){
        event.preventDefault();
        Swal.fire({
          title: 'Bạn chắc chứ?',
          text: 'Bạn sẽ không thể khôi phục tiến trình này!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Có',
          cancelButtonText: 'Không',
        }).then((result) => {
          if (result.isConfirmed) {
            const url = event.target.href;
            window.location.href = url;
          }
        });
      }
    </script>
    <?php 
      if (isset($_COOKIE['msg'])) {
            $message = $_COOKIE['msg'];
            echo '<script>';
            echo "toastr.success('$message');";
            echo '</script>';
        }
      if (isset($_COOKIE['msgf'])) {
          $message = $_COOKIE['msgf'];
          echo '<script>';
          echo "toastr.error('$message');";
          echo '</script>';
      }
    ?>
    <?php 
      unset($_SESSION['old_input']); 
      unset($_SESSION['errorMessages']); 
      unset($_SESSION['upload_status']); 
    ?>
</body>
</html>