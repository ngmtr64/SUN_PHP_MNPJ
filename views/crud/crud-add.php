<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHPSUN-MiniProject</title>
  <link rel="stylesheet" href="views/assets/css/styles.min.css" />
  <link rel="stylesheet" href="views/assets/css/styles.css" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        <?php require_once("views/include/header.php") ?>
        <div class="body-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                      <div class="card w-100">
                        <div class="card-body p-4">
                          <h5 class="card-title fw-semibold mb-4">Thêm bài báo</h5>               
                          <form action="index.php?mod=article&act=store" method="POST" role="form" enctype="multipart/form-data" autocomplete="off">
                            <div class="row">
                              <div class="col-12">
                                <div class="row">
                                  <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Tiêu đề*</label>
                                    <input type="text" 
                                      class="form-control" id="title" name="title" 
                                      value="<?php echo isset($_SESSION['old_input']['title']) ? $_SESSION['old_input']['title'] : ''; ?>" />
                                      <?php if (isset($_SESSION['errorMessages']['title'])): ?>
                                          <div class="text-danger"><?php echo $_SESSION['errorMessages']['title']; ?></div>
                                      <?php endif; ?>
                                  </div>
                                  <div class="mb-3 col-12">
                                    <label for="tacgia" class="form-label">Tác giả*</label>
                                    <input 
                                        type="text"
                                        class="form-control" id="author" name="author"
                                        value="<?php echo isset($_SESSION['old_input']['author']) ? $_SESSION['old_input']['author'] : '';?>"
                                    />
                                    <?php if (isset($_SESSION['errorMessages']['author'])): ?>
                                        <div class="text-danger"><?php echo $_SESSION['errorMessages']['author']; ?></div>
                                    <?php endif; ?>
                                  </div>
                                  <div class="mb-3 col-12">
                                    <label for="mota" class="form-label">Mô tả*</label>
                                    <textarea class="form-control" id="mota" rows="6" name="description"><?php echo isset($_SESSION['old_input']['description']) ? $_SESSION['old_input']['description'] : '';?></textarea>
                                    <?php if (isset($_SESSION['errorMessages']['description'])): ?>
                                        <div class="text-danger"><?php echo $_SESSION['errorMessages']['description']; ?></div>
                                    <?php endif; ?>
                                  </div> 
                                  <div class="mb-3 col-12">
                                      <label for="theloai" class="form-label">Danh mục</label>
                                      <select class="form-select form-control" id="the loai" name="category">
                                        <?php
                                          $categories = array(
                                            'Thời sự','Góc nhìn','Thế giới','Podcasts',
                                            'Kinh doanh','Bất động sản','Khoa học','Giải trí',
                                            'Thể thao','Pháp luật','Giáo dục','Sức khỏe','Đời sống',
                                            'Du lịch','Số hóa','Xe','Ý kiến','Tâm sự','Thư giãn','Tất cả'
                                          );
                                          foreach ($categories as $category) {
                                            echo '<option>' . $category . '</option>';
                                          }
                                        ?>
                                      </select>
                                  </div>   
                                </div>                                        
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="theloai" class="form-label">Ảnh nền</label>
                                  <input type="file" class="form-control" name="thumbnail" onchange="previewImage(event)"/>
                                  <img id="thumbnailPreview" src="" alt="Thumbnail Preview" style="display: none; max-width: 200px;">
                                  <?php
                                    if (isset($_SESSION['upload_status']) && !$_SESSION['upload_status'][0]) {
                                        foreach ($_SESSION['upload_status'][1] as $error) {
                                            echo '<div class="text-danger">' . $error . '</div>';
                                        }
                                    }
                                  ?>                                 
                            </div>     
                            <div class="d-flex justify-content-end">
                              <button type="submit" class="btn btn-info" >Thêm</button>
                              &nbsp;
                              <a href="index.php?mod=article&act=index" type="button" class="btn btn-danger">Huỷ</a>
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
    <script src="views/assets/js/script.js"></script>
    <?php 
      unset($_SESSION['old_input']); 
      unset($_SESSION['errorMessages']); 
      unset($_SESSION['upload_status']); 
    ?>
</body>

</html>