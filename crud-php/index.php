<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello world</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>
  <div class="container">
    <div class="describe-up">
      <h2>Fill the form</h2>
    </div>

    <?php

      include 'model.php';
      $model = new Model();
      $insert = $model->insert();

    ?>


    <form action="" method="post" class="form-container">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Mobile phone</label>
        <input type="text" name="mobile" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Address</label>
        <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="form-button">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
