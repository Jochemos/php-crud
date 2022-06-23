<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello world</title>
  <link rel="stylesheet" href="/crud/css/records-styles.css">

</head>
<body>

  <div class="table-container">
    <div class="table-description">
      <h3>PHP CRUD BY JOCHEMOS</h3>
    </div>
    <div class="table-main">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile NO.</th>
            <th>Address</th>
            <th>Settings</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include 'model.php';
            $model = new Model();
            $rows = $model->fetch();
            $i = 1;

            if(!empty($rows)){
              foreach($rows as $row){

          ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
              <a href="read.php?id=<?php echo $row['id']; ?>" class="read">Read</a>
              <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>
            </td>
          </tr>

          <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
