<?php
include "user.php";
$obj = new User();
// $show = $obj->show();
$data = $obj->show();

//print_r($data);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>CRUD | Display All User Data</title>
</head>
<div class="container">
        <div class="jumbotron"><h1>Display All User Data</h1></div>
</div>
<div class='container'>
  <table border="1px solid black">
    <tr>
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>show</th>
      <th>update</th>
      <th>Delete</th>
    </tr>
  <!-- Display data from database -->
  <?php foreach ($data as $value) {?>
    <tr>
      <td><?php echo $value['username']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['password']; ?></td>
      <td><a href="show.php?id=<?php echo $value["id"]; ?>">show</a></td>
      <td>edit</td>
      <td><a href="delete.php?id=<?php echo $value["id"]; ?>">delete</a></td>
    </tr>
  <?php }?>
  </table>
</div>
