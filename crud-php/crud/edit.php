<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello world</title>
  <link rel="stylesheet" href="/styles.css">

</head>
<body>
  <div class="container">
    <div class="describe-up">
      <h2>Update values of user</h2>
    </div>

    <?php

      include 'model.php';
      $model = new Model();
      $id = $_REQUEST['id'];
      $row = $model->edit_one($id);


      if(isset($_POST['update'])){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
          if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){

            $data['id'] = $id;
            $data['name'] = $_POST['name'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['address'] = $_POST['address'];

            $update = $model->update($data);

            if($update){
              echo "<script>alert('record update successfully');</script>";
              echo "<script>window.location.href = 'records.php';</script>";
            }else{
              echo "<script>alert('record update failed');</script>";
              echo "<script>window.location.href = 'records.php';</script>";
            }

          }else{
            echo "<script>alert('empty')</script>";
            header("Location: edit.php?id=$id");
          }
        }
      }

    ?>


    <form action="" method="post" class="form-container">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
      </div>
      <div class="form-group">
        <label for="">Mobile phone</label>
        <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
      </div>
      <div class="form-group">
        <label for="">Address</label>
        <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address']; ?></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="update" class="form-button">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
