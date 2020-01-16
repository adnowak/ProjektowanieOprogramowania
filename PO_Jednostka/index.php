<?php
    include 'service.php'; 
    include 'controller.php'; 
    include 'router.php';
    $service = new Service();
    $router = new Router($service);
    new Controller($service);
?>
