<?php
require_once "../../config/config.php";

/*
 * Insert and Update new user
 */

//print_r($_POST);
if (isset($_POST['name'], $_POST['user_id'])) {

//    echo $_POST['course_id'];

    //validations
    $errors = [];
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];

    if (empty($errors)) {
        if (isset($_POST['course_id']))  {
            //update user
            $id = $_POST['course_id'];
            $course = new Course($name, $user_id, $id);

            if(!$course->update()) {
                $errors[] = "Can't Update";
            }
        } else {
            //insert course
            $course = new Course($name, $user_id);
            if (!$course->insert()){
                $errors[] = "Can't insert";
            }

        }

        if (!empty($errors))
            echo json_encode($errors);
        else
            echo json_encode("done");

    } else {
        echo json_encode($errors);
    }

}elseif (isset($_POST['edit'])) {
    echo json_encode(Course::find($_POST['edit'])); // php to json
}