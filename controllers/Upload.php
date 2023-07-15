<?php
    function uploadFile($input_name, $target_dir, $allowtypes, $max_size){
        $upload_status = true;
        $file_infor = pathinfo($_FILES[$input_name]['name']);
        $target_file = $target_dir . time() . '.' . $file_infor['extension'];
        $errors = array();
        $types = "";
        if (is_array($allowtypes)) {
            foreach ($allowtypes as $key => $type) {
                $types .= $type . ",";
            }
        }
        $types = trim($types, ',');
    
        if (!isset($_FILES[$input_name])) {
            $errors[] = "Vui lòng chọn tệp tin";
            $upload_status = false;
        } else if ($_FILES[$input_name]['error'] == 4) {
            $errors[] = "Vui lòng chọn tệp tin";
            $upload_status = false;
        } else if ($_FILES[$input_name]['error'] != 0) {
            $errors[] = "Dữ liệu upload bị lỗi";
            $upload_status = false;
        } else {
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (!in_array($imageFileType, $allowtypes)) {
                $errors[] = "Chỉ được upload các định dạng " . $types;
                $upload_status = false;
            }
    
            if ($_FILES[$input_name]["size"] > $max_size * 1024 * 1024) {
                $errors[] = "Không được upload ảnh lớn hơn $max_size (MB).";
                $upload_status = false;
            }
        }
    
        if ($upload_status) {
            return array(true, $target_file);
        } else {
            return array(false, $errors);
        }
    }
    
?>
