<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Handling</title>
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>
  <?php
    $nim=$nama=$alamat=$email=$nohp=$prodi="";
    $nimErr=$namaErr=$alamatErr=$emailErr=$nohpErr=$prodiErr="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nim"])) {
        $nimErr = "NIM is required";
      } else {
        $nim = test_input($_POST["nim"]);
      }
      
      if (empty($_POST["nama"])) {
        $namaErr = "Nama is required";
      } else {
        $nama = test_input($_POST["nama"]);
      }
        
      if (empty($_POST["alamat"])) {
        $alamatErr = "Alamat is required";
      } else {
        $alamat = test_input($_POST["alamat"]);
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
      if (empty($_POST["nohp"])) {
        $nohpErr = "NO HP is required";
      } else {
        $nohp = test_input($_POST["nohp"]);
      }
      if (empty($_POST["prodi"])) {
        $prodiErr = "Prodi is required";
      } else {
        $prodi = test_input($_POST["prodi"]);
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
  <h2>Form Input Data Mahasiswa</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    NIM : <input type="text" name="nim"><span class="error"> * <?php echo $nimErr;?></span><br><br>
    Nama : <input type="text" name="nama"><span class="error"> * <?php echo $namaErr;?></span><br><br>
    Alamat : <input type="text" name="alamat"><span class="error"> * <?php echo $alamatErr;?></span><br><br>
    Email : <input type="text" name="email"><span class="error"> * <?php echo $emailErr;?></span><br><br>
    No HP : <input type="text" name="nohp"><span class="error"> * <?php echo $nohpErr;?></span><br><br>
    Prodi : <input type="text" name="prodi"><span class="error"> * <?php echo $prodiErr;?></span><br><br>
    <button>Submit</button><br><br>
  </form>
      
  <?php
    echo "Nim  : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Alamat : " . $alamat . "<br>";
    echo "Email : " . $email . "<br>";
    echo "No Hp : " . $nohp . "<br>";
    echo "Prodi : " . $prodi . "<br>";
  ?>
</body>
</html>