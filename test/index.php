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
    <link rel="stylesheet" href="scss/vendor/prism.css">


</head>
<?php
function demo($class = '', $zusatz = '')
{
    include_once 'components/'.$_GET['s'].$zusatz.'/'.$_GET['s'].$class.'.html';
}
function code($class = '', $zusatz = '')
{
    echo '<pre data-src="components/'.$_GET['s'].$zusatz.'/'.$_GET['s'].$class.'.html">
                       </pre>';
}

?>
<body class="doc" id="top">
<header>
</header>
<sidebar>
    <div class="Doc-Navbar">
        <ul class="Menu Menu--vertical-inline Doc-Menu">
            <?php
            foreach ($sites as $site) {
                $link = '<a class="Menu__Link" href="';
                $link .= 'index.php?s='.$site.'">';
                $link .= $site.'</a>';
                echo '<li class="Menu__Item">'.$link.'</li>';
            }
            ?>
        </ul>
    </div>
</sidebar>
<?php
$get = $_GET['s'];
if (!empty($get)) {
    include_once 'templates/'.$get.'.php';
}
?>
<footer></footer>

<!--JQUERY-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="scss/vendor/prism.js"></script>
<script src="scss/main.js"></script>
<?php include_once '../webroot/js/main.combined.php' ?>
</body>
</html>
