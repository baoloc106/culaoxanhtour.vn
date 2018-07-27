<?php
    require 'libs/Config.php';
    require 'libs/Bootstrap.php';
    require 'libs/Controller.php';
    require 'libs/Model.php';

    require 'system/controllers/home.php';
    require 'system/controllers/contact.php';
    require 'system/controllers/blog.php';
    require 'system/controllers/about.php';
    require 'system/controllers/tour.php';

    require 'system/models/homeModel.php';
    require 'system/models/blogModel.php';
    require 'system/models/tourModel.php';
    require 'system/models/aboutModel.php';
    require 'system/models/contactModel.php';

    require 'system/views/header.php';



    $bootstrap = new Bootstrap($_GET);
    $controller = $bootstrap->createController();

    if($controller){
        $controller->execute();

    }

     require 'system/views/footer.php';
?>