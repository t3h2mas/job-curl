<?php
function handle_get($job_id)
{

    $responses = [
        'answer' => 'The answer to life is' . PHP_EOL . ' 42.',
        'front-end' => 'front end gig!'
    ];

    // get $job_id from responses OR Unauthorized.
    $response = @$responses[$job_id] ?: 'Unauthorized';
    echo $response . PHP_EOL;
    return;
}
?>