<?php
session_start();
require 'functions/database.php';
$pages = scandir('pages/');

if(isset($_GET['page']) && !empty($_GET['page'])){
    if(in_array($_GET['page'].'.php',$pages)){
        $page = $_GET['page'];
    }else{
        $page = 'error';
    }
}else{
    $page = 'home';
}


$functions = scandir('functions/');
if(in_array($page.'.func.php', $functions)){
    include 'functions/'.$page.'.func.php';
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="publics/css/bootstrap.css">
    <link rel="stylesheet" href="publics/css/style.css">

    <title>Document</title>
</head>
<body>
    <?php include 'publics/nav.php' ?>
    <div class="content">
    <?php 
        if(file_exists('pages/'.$page.'.php')){
            include 'pages/'.$page.'.php';
        }
    ?>
    </div>

    <script src="publics/js/jquery.min.js" ></script>
    <script src="publics/js/popper.min.js" ></script>
    <script src="publics/js/bootstrap.js" ></script>
    <script src="publics/js/js.js" ></script>

<?php include 'publics/footer.php' ?>
</body>
</html>