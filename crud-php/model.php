<?php

  class Model{

    private $host = "db";
    private $user = "jochemos";
    private $pass = "Password123#@!";
    private $db = "php_db";
    private $conn;

    public function __construct(){
      try {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
      } catch(Exception $e) {
        echo "connection faled " . $e->getMessage();
      }
    }

    public function insert(){
      if(isset($_POST['submit'])){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
          if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){

            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $query = "INSERT INTO records (name, email, mobile, address) VALUES ('$name', '$email', '$mobile', '$address')";

            if($sql = $this->conn->query($query)){
              echo "<script>alert('records added successfully');</script>";
              echo "<script>window.location.href = 'index.php'</script>";
            }else{
              echo "<script>alert('failed');</script>";
              echo "<script>window.location.href = 'index.php'</script>";
            }

          }else{
            echo "<script>alert('empty')</script>";
          }
        }
      }
    }

    public function fetch(){
      $data = null;

      $query = "SELECT * FROM records";
      if($sql = $this->conn->query($query)) {
        while($row = mysqli_fetch_assoc($sql)){
          $data[] = $row;
        }
      }
      return $data;
    }


  }

?>
