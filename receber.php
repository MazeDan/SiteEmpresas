<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');

    if($_GET){
        echo $_GET['qrcode'];
    }

    include_once('rodape.php');

?>