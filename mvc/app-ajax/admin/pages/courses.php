<?php

_header_admin("ADMIN");

/*
 * Insert and Update new user
 */
//if (isset($_POST['name'], $_POST['user_id'])) {
//
//    //validations
//    $errors = [];
//    $name = $_POST['name'];
//    $user_id = $_POST['user_id'];
//
//    if (empty($errors)) {
//        if (isset($_POST['id']))  {
//            //update user
//            $id = $_POST['id'];
//            $course = new Course($name, $user_id, $id);
//
//            if($course->update()) {
//                exit(header("Location:" . BASE_ADMIN . "courses.php"));
//            } else{
//                $errors[] = "Can't Update";
//            }
//
//
//        } else {
//            //insert course
//            $course = new Course($name, $user_id);
//            if (!$course->insert()){
//                $errors[] = "Can't insert";
//            }
//
////            unset($course);
//        }
//
//    } else {
//        print_r($errors);
//    }
//
//    if (!empty($errors)) print_r($errors);
//
//
//}

if (isset($_GET['del'])) {

    if ($id = $_GET['del']) {
        Course::delete($id);
        exit(header("Location:" . BASE_ADMIN . "courses.php"));
        //$_SERVER['PHP_SELF'] => page name
    }
}


//if (!isset($_SESSION['user'])) {
//    exit(header("Location:" . BASE_ADMIN . "login.php"));
//}


$courses = Course::all();
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                All Admins
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Admins</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">All Admins Table</h3>
                        </div>
                        <div class="row">

                            <div class="col-xs-8 col-xs-offset-2">

                                <?php
                                if (isset($_GET['edit'])){
                                    $id = $_GET['edit'];
                                    $course = Course::find($id);
                                    // ['id'=> 1, 'name'=>'SQL', 'user_id'=>7]
                                    ?>

                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name"
                                                               name="name"
                                                               value="<?php echo $course['name']; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-md-6">
                                                    <div class="form-group">
                                                        <select name="user_id" id="" class="form-control">
                                                            <?php
                                                            foreach (User::find(USER_TEACHER,'user_type') as $user){
                                                                //$user = ['id'=>1, 'username'=>'sdf' , .....]
                                                                if ($user['id'] == $course['user_id']){
                                                                    ?>
                                                                    <option value="<?php echo $user['id']; ?>" selected><?php echo $user['full_name']; ?></option>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <option value="<?php echo $user['id']; ?>"><?php echo $user['full_name']; ?></option>
                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>


                                    <?php
                                } else {
                                ?>
                                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#add-new">
                                    ADD NEW
                                </button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <table id="table-courses" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Teacher Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($courses as $course):
                                ?>
                                    <tr>
                                        <td><?php echo $course['id']; ?></td>
                                        <td><?php echo $course['name']; ?></td>
                                        <td><?php echo $course['user_name']; ?></td>
                                        <td>
                                            <button course-id="<?php echo $course['id']; ?>" type="button" class="btn btn-success btn-block btn-del" data-toggle="modal" data-target="#add-new">
                                                Edit
                                            </button>
                                        </td>
                                        <td><a href="<?php BASE_ADMIN; ?>?del=<?php echo $course['id']; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Teacher Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <div class="modal fade" id="add-new">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New Course</h4>
                </div>
                <form id="form-course">
                    <input type="text" name="course_id" id="course_id" value="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Name" name="name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <select name="user_id" id="user_id" class="form-control">
                                        <?php
                                        foreach (User::find(USER_TEACHER,'user_type') as $user){
                                            ?>
                                            <option value="<?php echo $user['id'] ?>"><?php echo $user['full_name'] ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


<?php
_footer_admin();
?>