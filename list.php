<?php
require_once('json.php');
require_once('dbconfig.php');
require_once('config.php');
$conf = config();

//$applicants = read_json($conf['fname'], true);
//$entries = $applicants['entries'];
$q = "SELECT * FROM apps";
if(!$result = $conn->query($q)){
    die('Error running the query [' . $conn->error . ']');
}

$num = $result->num_rows;
?>
<html>
<head>
    <title>Applicants</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="static/style.css" rel="stylesheet">
</head>
<body>
    <b>Applicants: <?php echo $num; ?></b>
    <div class="applicants">
    <?php while($row = $result->fetch_assoc()) {?>
        <div class="entry">
        {
            <?php foreach($row as $key=>$value): ?>
            <div class="<?php echo $key; ?>">
                &nbsp;&nbsp;&nbsp;&nbsp;"<?php echo $key; ?>": 
                "<span class="value"><?php echo $value; ?></span>"
            </div>
            <?php endforeach; ?>
        }
        </div>
    <?php 
    }
    $result->free(); ?>
    </div>
    <script src="static/app.js"></script>
</body>
</html>