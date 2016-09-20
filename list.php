<?php
require_once('json.php');
$applicants = read_json('applicants.json', true);
$entries = $applicants['entries'] or die('Bork');
?>
<html>
<head>
    <title>Applicants</title>
</head>
<body>
    <b>Applicants: </b>
    <?php foreach($entries as $entry): ?>
        <pre class="entry">
<?= json_encode($entry, JSON_PRETTY_PRINT); ?>
        </pre>
    <?php endforeach; ?>
</body>
</html>