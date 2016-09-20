<?php
// todo: only handle certain jobs? 
function handle_post($job_id) 
{
    header('Content-Type: application/json');

    $raw_post_data = file_get_contents('php://input');
    $decoded = json_decode($raw_post_data, true) or die('invalid json data.');
 
    $response = ['job_id' => $job_id];
    $response['name'] = @$decoded['name'] ?: 'null';
    $response['email'] = @$decoded['email'] ?: 'null';
    $response['location'] = @$decoded['location'] ?: 'null';
    $response['resume_url'] = @$decoded['resume_url'] ?: 'null';
    $response['projects'] = @$decoded['projects'] ?: 'null';
    $response['message'] = @$decoded['message'] ?: 'null';

    echo json_encode($response, JSON_PRETTY_PRINT) . PHP_EOL;
    return;
}
?>