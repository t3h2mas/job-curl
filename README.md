# curl-posts
Job Postings that you interact with over the command line.

## start the server
navigate to the project folder and [run](http://php.net/downloads.php) `php -S localhost:1337`

## get started
`curl -H "X-JOB-ID: front-end" localhost:1337`

### etc
this is only a prototype that saves to a json file

> scaling not included

### clear the json file
`php -r "require('json.php');write_json('applicants.json', ['entries' => array()]);"` from the project folder