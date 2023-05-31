<?php
require_once __DIR__ . '/../models/LearnPhp.php';

if (isset($_POST['sort'])) {
    $sort = $_POST['sort'];
    $length = $_POST['length'];

    $processor = new ConstantsProcessor($length);
    $constants = $processor->process($sort);
    $len_all_constants = $processor->len_all_constants;
    // print_r($constants);
    $constants_2 = array("constants"=>$constants,"len_all_constants"=>$len_all_constants);
    echo json_encode($constants_2);
}
