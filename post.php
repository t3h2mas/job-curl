<?php
function handle_post($job_id) 
{
    header('Content-Type: application/json');
    $raw_post_data = file_get_contents('php://input');
    $response = json_decode($raw_post_data, true) or die('invalid json data.');
    $response[$job_id] = $job_id;
    echo json_encode($response, JSON_PRETTY_PRINT) . PHP_EOL;
    return;
}
?>