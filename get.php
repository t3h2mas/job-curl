<?php
require_once('config.php');

function handle_get($job_id)
{
    $conf = config();
    $responses = [
        'answer' => 'The answer to life is' . PHP_EOL . ' 42.',
        'front-end' => '  Front End Ninja Wanted!' . PHP_EOL . 
            '  We are Browser Ninjas. A team of front end masters!' . PHP_EOL .
            PHP_EOL .
            '  We are throwing stars (you?) at complicated cascading style sheets.' . PHP_EOL . 
            '  You are sharpenning your katana on some SASS as you read this.' . PHP_EOL . 
            PHP_EOL . 
            '  Required: Oneness with devtools is a must.' . PHP_EOL . 
            PHP_EOL . 
            '  To submit your application:' . PHP_EOL . 
            '  curl -X POST -H "X-JOB-ID: front-end" ' . $conf['host'] . ' -d \'{' . PHP_EOL . 
                "      \"name\": \"Full Name\"," . PHP_EOL . 
                "      \"email\": \"you@domain.com\"," . PHP_EOL . 
                "      \"location\": \"The Yellow Brick Road\"," . PHP_EOL . 
                "      \"resume_url\": \"https://cool.resu.me\"," . PHP_EOL . 
                "      \"projects\": \"built anything cool?\"," . PHP_EOL . 
                "      \"message\": \"anything else you\'d like to say?\"" . PHP_EOL . 
            "  }'" . PHP_EOL

    ];

    // get $job_id from responses OR Unauthorized.
    $response = @$responses[$job_id] ?: 'Unauthorized';
    echo $response.PHP_EOL;
    return;
}
?>