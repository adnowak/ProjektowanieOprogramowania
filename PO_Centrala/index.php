<?php
    include 'service.php'; 
    include 'router.php'; 
    include 'controller.php';
    $service = new Service();
    $router = new Router($service);
    new Controller($service);
?>
