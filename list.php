<?php
require_once('json.php');
$applicants = read_json('applicants.json', true);
$entries = $applicants['entries'] or die('Bork');
?>
<html>
<head>
    <title>Applicants</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="static/style.css" rel="stylesheet">
</head>
<body>
    <b>Applicants: </b>
    <div class="applicants">
    <?php foreach($entries as $entry): ?>
        <div class="entry">
        {
            <?php foreach($entry as $key=>$value): ?>
            <div class="<?php echo $key; ?>">
                &nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $key; ?>": 
                "<span class="value"><?php echo $value; ?></span>"
            </div>
            <?php endforeach; ?>
        }
        </div>
    <?php endforeach; ?>
    </div>
    <script src="static/app.js"></script>
</body>
</html>