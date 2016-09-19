<?php
function handle_get($post_id)
{

    $answer = 'The answer to life is' . PHP_EOL . 
    ' 42.' . PHP_EOL;

    $fcc = 'https://freecodecamp.com/' . PHP_EOL;

    switch ($post_id) {
        case 'answer':
            echo $answer;
            break;
        
        case 'learn':
            echo $fcc;
            break;

        default:
            echo 'Unauthorized' . PHP_EOL;
            break;
    }
    return;
}
?>