<?php
require_once('./include/smarty/libs/Smarty.class.php');
require_once('./include/controller/FrontController.class.php');

function include_all_php($folder){
    foreach (glob("{$folder}/*.php") as $filename)
    {
        include $filename;
    }
}

// Include des classes de VIEW
include_all_php("./include/view/");
?>