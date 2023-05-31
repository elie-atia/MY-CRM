<?php
require_once __DIR__ . '/../models/LearnPhp.php';

if (isset($_POST['sort'])) {
    $sort = $_POST['sort'];

    $processor = new ConstantsProcessor();
    $output = $processor->process($sort);

    echo $output;
}
