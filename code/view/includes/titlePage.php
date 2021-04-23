<?php
$title = '';
if (empty($_GET['page'])) {
    $_GET['page'] = 'Home';
}
$page = $_GET['page']; //basename($_SERVER['PHP_SELF']);

switch ($page) {
    case 'index.php':
        $title = 'Fundamentals Home';
        $description = 'index description here';
        break;
    case 'Home':
        $title = 'Fundamentals Home';
        $description = 'about description here';
        break;
    case 'articles':
        $title = 'funny articles';
        $description = 'about description here';
        break;
    case 'products':
        $title = 'crazy products';
        $description = 'about description here';


}