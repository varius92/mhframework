<?php
include_once '_helper.php';
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../webroot/scss/main.css">
    <link rel="stylesheet" href="scss/demo.css">

    <script src=""></script>
</head>

<body>
<header>
    <div class="test-navbar">
        <ul>
            <?php
            foreach ($sites as $site) {
                $link = '<a href="';
                $link .= 'index.php?s='.$site.'">';
                $link .= $site.'</a>';
                echo '<li>'.$link.'</li>';
            }
            ?>
        </ul>
    </div>
</header>
<?php
$get = $_GET['s'];
if (!empty($get)) {
    include_once 'templates/'.$get.'.php';
}
?>
<footer></footer>

<!--JQUERY-->
<!--    <script src="js/main.js"></script>-->
</body>
</html>
