<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pakar Kedelai | Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </head>
<body>
    <div class="judul text-center">
        <p><marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">Lupa Password - Sistem Pakar Diagnosa Hama dan Penyakit Kedelai</marquee></p>
    </div>
    <div class="container-fluid text-center">
        <div class="row content">
            <img src="../img/litbang.png" height="60px" width="60px">
            <h4 style="font-weight: bold; color: white;">BSIP ANEKA KACANG</h4>
            <div class="col-sm-12 text-left">
                <form class="login form-horizontal" method="post" action=" ">
                    <div class="panel panel-info">
                        <div class="panel-heading">LUPA PASSWORD</div>
                        <div class="panel-body">
                        <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Password</label> -->
                                <div class="col-sm-12">
                                <input type="text" class="form-control" required name="username" data-error="Isi kolom dengan benar" placeholder="Username">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Password</label> -->
                                <div class="col-sm-12">
                                <input type="password" class="form-control" required name="password" data-error="Isi kolom dengan benar" placeholder="Password Baru">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <!-- <label class="control-label col-sm-2" for="nama">Konfirmasi Password</label> -->
                                <div class="col-sm-12">
                                <input type="password" class="form-control" required name="cpassword" data-error="Isi kolom dengan benar" placeholder="Konfirmasi Password">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors" role="alert"></div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Lanjutkan</button>
                        </div>
                        <div class="panel-footer">
                            <p><a href="loginuser.php">Masuk</a></p>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST["submit"])){
                        $username = $_POST["username"];
                        $result = mysqli_query($konek_db, "SELECT * FROM member WHERE username = '$username'");
                        if(mysqli_num_rows($result) === 1){
                            $row = mysqli_fetch_assoc($result);
                        }else{
                            echo "<script>alert('Username Tidak Sesuai!');</script>";
                            return false;
                        }
                        $password = mysqli_real_escape_string($konek_db, $_POST["password"]);
                        $cpassword = mysqli_real_escape_string($konek_db, $_POST["cpassword"]);
                        if ($password !== $cpassword){
                            echo "<script>
                                    alert('Konfirmasi Password tidak sesuai!');
                                  </script>";
                            return false;
                        }
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_query($konek_db, "UPDATE member SET password = '$password' WHERE username='$username'");
                        echo "<script>
                                alert('Password berhasil diperbarui!');
                              </script>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php include "../footer.php"; ?>
</body>
</html>