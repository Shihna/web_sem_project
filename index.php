<?php session_start();

include('includes/configuration.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}
$root = "http://shihna.dystopiaonline.fr/GlamoursCollection/";
$root_page = 'pages/'.$page.'.php';

?>

<!DOCTYPE html>

<html lang="fr">
<?php require('layout/head.php'); ?>
<body>
    <?php include('layout/topnav.php');?>
    <br>
    <div class="page-content">
        <div class="row">
            <?php include('layout/sidenav.php'); ?>
            <div class="col-md-10">
            <?php include($root_page); ?>
            </div>
        </div>
    </div>
<?php include('layout/foot.php'); ?>
<?php if(isset($script_list))echo $script_list; ?>
</body>
</html>