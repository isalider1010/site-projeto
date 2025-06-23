<?php
$page = $_GET['page'] ?? 'home';
$file = $page . '.php';

if (file_exists($file) && is_file($file)) {
    include $file;
} else {
    http_response_code(404); 
    include '404.php';       
}
?>
