<?php


// print_r($_POST);

$subjects = $_POST['subjects'];


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
    
      <br>
      <label for="subject1">subjects 1:</label>
      <input id="subject1" type="text" name="subjects[]">
      <br>

      <br>
      <label for="subject2">subjects 2:</label>
      <input id="subject2" type="text" name="subjects[]">
      <br>


      <br>
      <label for="subject3">subjects 3:</label>
      <input id="subject3" type="text" name="subjects[]">
      <br>
      

      <button type="submit" name="send">Send</button>
    </form>

    <ul>
    <?php foreach ($subjects as $key => $subject) : ?>
      <li><?php echo $subject; ?></li>
    <?php endforeach; ?>
    
    </ul>

  
  </body>
</html>
