<?php
require_once('get.php');
require_once('post.php');
require_once('config.php');

$job_id = $_SERVER['HTTP_X_JOB_ID'];
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        handle_get($job_id);
        break;

    case 'POST':
        handle_post($job_id);
        break;
}
?>iv