<?php
    include 'service.php'; 
    include 'controller.php'; 
    include 'router.php';
    $service = new Service();
    new Controller($service);
    new Router($service);
?>
