<?php
require_once('get.php');
require_once('post.php');

$post_id = $_SERVER['HTTP_X_POST_ID'];
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        handle_get($post_id);
        break;

    case 'POST':
        handle_post($post_id);
        break;
}
?>