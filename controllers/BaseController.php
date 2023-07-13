<?php
class BaseController
{
     
    public function view($path, $data = [])
    {
        extract($data);
        require_once("views/" . $path);

    }
    public function redirect($url)
    {
        if ($url === 'back') {
            $url = $_SERVER['HTTP_REFERER'];
            $_SESSION['old_input'] = $_POST;
        }
        header("Location: " . $url);
    }
    
}
?>