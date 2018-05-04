<?php
require_once "../../config/config.php";


if (isset($_POST['del'])) {
    $id = $_POST['del'];

    if (User::delete($id)) {
        echo "Done";
    } else {
        echo "Error";
    }

} else if(isset($_POST['getAll'])) {

foreach (User::all() as $user):
    ?>
    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['full_name']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><a href="<?php BASE_ADMIN; ?>?edit=<?php echo $user['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><button type="button" class="btn btn-danger del" user-id="<?php echo $user['id']; ?>">Delete</button></td>
    </tr>
<?php endforeach;

}


//form php to json
// echo json_encode($user);

//form json to php
/*$test = '[{"id":"asda","0":26566},["asda",26566],["asda",26566],["asda",26566],["asda",26566],["asda",26566]]';
print_r ( json_decode($test));*/