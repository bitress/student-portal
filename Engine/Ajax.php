<?php

include_once '../config/init.php';

if (isset($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {

        case 'studentLogin':
            $con = new Login();
            $response = $con->studentLogin($_POST['student_id'], $_POST['student_pin']);
                if($response === true){
                    echo "true";
                }
            break;

    }
}
