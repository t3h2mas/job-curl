<?php
require_once('json.php');
require_once('dbconfig.php');
require_once('config.php');

// todo: only handle certain jobs? 
function handle_post($job_id) 
{
    header('Content-Type: application/json');
    global $conn;
    $conf = config();
    $fname = $conf['fname'];
    $applicant = get_applicant($job_id);
    save_applicant($applicant, $conn);
    echo json_encode($applicant, JSON_PRETTY_PRINT) . PHP_EOL;
}

function get_applicant($job_id)
{
    $raw_post_data = file_get_contents('php://input');
    $decoded = json_decode($raw_post_data, true) or die('invalid json data.');
 
    $response = ['job_id' => $job_id];
    $response['name'] = @$decoded['name'] ?: 'null';
    $response['email'] = @$decoded['email'] ?: 'null';
    $response['location'] = @$decoded['location'] ?: 'null';
    $response['resume_url'] = @$decoded['resume_url'] ?: 'null';
    $response['projects'] = @$decoded['projects'] ?: 'null';
    $response['message'] = @$decoded['message'] ?: 'null';
    return $response;
}

function save_applicant($new_applicant, $conn)
{
    $q = sprintf(
        'INSERT INTO apps (%s) VALUES ("%s")',
        implode(',', array_keys($new_applicant)),
        implode('","', array_values($new_applicant))
    );
    if(!$result = $conn->query($q)){
        die('Error running the query [' . $conn->error . ']');
    }
}
?>