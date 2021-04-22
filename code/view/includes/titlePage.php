<?php
$page = basename($_SERVER['PHP_SELF']);
switch ($page){
    case 'index.php':
 $title = 'Fundamentals Home';
 $description = 'index description here';
 break;

    case 'page=articles':
 $title = 'about title here';
 $description = 'about description here';
 break;
}