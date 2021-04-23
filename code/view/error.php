<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<h1>OWOW bad stuff is happening!</h1>
<h2><?php echo http_response_code() ?></h2>
