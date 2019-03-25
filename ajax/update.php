<?php
if (isset($_POST)) {
    require 'lib.php';

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $object = new CRUD();

    $object->Update($first_name, $last_name, $email, $id);
}

