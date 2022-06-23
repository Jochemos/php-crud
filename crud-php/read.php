<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello world</title>
  <link rel="stylesheet" href="read-styles.css">

</head>
<body>
  <?php

    include 'model.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $row = $model->fetch_one($id);

    if(!empty($row)){

  ?>
  <div class="card-container">
    <div class="card-description">
      <h3>SINGLE RECORD</h3>
    </div>
    <div class="card-main">
      <p><?php echo $row['name']; ?></p>
      <p><?php echo $row['email']; ?></p>
      <p><?php echo $row['mobile']; ?></p>
      <p><?php echo $row['address']; ?></p>
    </div>
  </div>

  <?php

    }else{
      echo "no data";
    };

  ?>

</body>
</html>
