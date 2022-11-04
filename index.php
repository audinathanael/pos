<?php 
    require "Controller/template.controller.php";
    require "Controller/categories.controller.php";
    require "Controller/customers.controller.php";
    require "Controller/products.controller.php";
    require "Controller/sales.controller.php";
    require "Controller/users.controller.php";

    require "Model/categories.model.php";
    require "Model/connection.php";
    require "Model/customers.model.php";
    require "Model/products.model.php";
    require "Model/sales.model.php";
    require "Model/users.model.php";


    $template= new ControllerTemplate();
    $template-> Template();
?>