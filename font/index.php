<!DOCTYPE html>
<html lang="en">
    <?php
         require_once('head.php');
    ?>
    <body>
        <?php
            require_once('preloader.php');
        ?>
        <?php
            require_once('header.php');
        ?>
        <!-- Page block -->
        <?php
        if(isset($_GET['page'])){
             $page =  $_GET['page'];
            require_once($page.'.php');
        }else{
            require_once('home.php');
        }
        ?>
        <!-- Page block end -->
        <?php
         require_once('footer.php');
        ?>
    </body>
</html>