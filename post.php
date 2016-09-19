<?php
function handle_post($post_id) 
{
    header('Content-Type: application/json');
    $raw_post_data = file_get_contents('php://input');
    $response = json_decode($raw_post_data, true);
    $response['post_id'] = $post_id;
    echo json_encode($response, JSON_PRETTY_PRINT) . PHP_EOL;
    return;
}
?>