<?php

/*
 * read_json
 * takes: string -> $fname
 * gives: decoded json object
 */
function read_json($fname, $assoc = false)
{
    $f = fopen($fname, 'r') or die('unable to open file!');
    $resp = fread($f, filesize($fname));
    fclose($f);
    return json_decode($resp, $assoc);
}

/*
 * write_json
 * takes: 
 * - string -> $fname
 * - obj -> $json_obj
 * gives: writes json to file; returns true;
 */
function write_json($fname, $json_obj)
{
    $f = fopen($fname, 'w') or die ('unable to open file!');
    $json_string = json_encode($json_obj);
    fwrite($f, $json_string);
    fclose($f);
    return true;
}

?>