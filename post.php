<?php
require_once('json.php');
require_once('config.php');

// todo: only handle certain jobs? 
function handle_post($job_id) 
{
    header('Content-Type: application/json');
    $conf = config();
    $fname = $conf['fname'];
    $applicant = get_applicant($job_id);
    save_applicant($applicant, $fname);
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

function save_applicant($new_applicant, $fname)
{
    // create default file w/ expected json
    if (!file_exists($fname)) {
        write_json($fname, [entries => array()]);
    }
    $applicants = read_json($fname, true);
    array_push($applicants['entries'], $new_applicant);
    write_json($fname, $applicants);

}
?>