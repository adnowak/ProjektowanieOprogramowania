<?php
    include 'service.php'; 
    include 'router.php';
    include 'controller.php';
    $service = new Service();
    new Controller($service);
    new Router($service);
?>
