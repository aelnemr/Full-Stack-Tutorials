<?php

if (isset($_POST['name'],
          $_POST['job'],
          $_POST['basic_salary'],
          $_POST['bonus'])) {

    $errors = [];

    if (empty($_POST['name'])) {
      $errors[] = "Please send Name";
    }
    if (empty($_POST['job'])) {
      $errors[] = "Please send job";
    }
    if (empty($_POST['basic_salary'])) {
      $errors[] = "Please send Basic Salary";
    }
    if (!is_numeric ($_POST['basic_salary'])) {
      $errors[] = "Invalid value Basic Salary numbers only";
    }
    if (empty($_POST['bonus'])) {
      $errors[] = "Please send bonus";
    }
    if (!is_numeric ($_POST['bonus'])) {
        $errors[] = "Invalid value bonus numbers only";
    }


    if ( empty($errors)) {
        $bonus = $_POST['bonus'];
        $basicSalary = $_POST['basic_salary'];
        $netSalary = $bonus + $basicSalary;
    } else {
      print_r( $errors );
      $netSalary = 0;
    }


}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="salary.php" method="post">
      <label for="name">Name:</label>
      <input id="name" type="text" name="name">
      <br>
      <br>
      <label for="job">Job:</label>
      <select name="job" id="job">
        <option value="developer">Developer</option>
        <option value="hr_manager">HR Manager</option>
        <option value="ceo">CEO</option>
      </select>
      <br>
      <br>
      <label for="basic_salary">Basic Salary:</label>
      <input id="basic_salary" type="number" name="basic_salary">
      <br>
      <br>
      <label for="bonus">Bonus:</label>
      <input id="bonus" type="number" name="bonus">

      <button type="submit" name="send">Send</button>
    </form>

    <p style="color:green">
      Net Salary: <?php echo $netSalary; ?>
    </p>
  </body>
</html>
