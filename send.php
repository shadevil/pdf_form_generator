<?php
require('form.php');

$array = [];
if(!empty($_POST)) {
    foreach ($_POST as $key => $value){
        $array[$key] = $value;
    }
}
