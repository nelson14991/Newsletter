<?php
require('Newsletter.php');

    if(!empty($_POST)) {
        $email = $_POST['Email'];
        $name = $_POST['Name'];
        Newsletter::register($email,$name);
    }
?>