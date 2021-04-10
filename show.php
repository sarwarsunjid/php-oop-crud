<?php
include "user.php";
$obj = new User();
$obj->prepare($_GET);
$data = $obj->singleView();

//print_r($data);
// print_r($_GET);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>CRUD | Display Individual User Data</title>
</head>

<div class="container">
        <div class="jumbotron"><h1>Display Individual User Data</h1></div>
</div>
<div class='container'>
<table border="1px solid black">
  <tr>
    <th>USERNAME</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
  </tr>

	<tr>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['password']; ?></td>
 </table>
 </div>