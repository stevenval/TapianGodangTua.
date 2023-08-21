<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body onload="runPB1()" class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <?php
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $user = $_POST['username'];
                $pass = md5($_POST['password']);
                $stmt = $db->prepare("SELECT * from tb_admin where username='$user' and password='$pass' limit 0,1");
                $stmt->execute();
                $row = $stmt->fetch();
                if ($row['username'] == $user && $row['password'] = $pass) {
                    session_start();
                    $_SESSION['id'] = $row['id_admin'];
                    $_SESSION['nama'] = $row['nama_admin'];
                    $_SESSION['username'] = $row['username'];
                    ?>
                    <script>
                        location.href='admin.php';
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        $.Notify({
                            caption: 'Maaf',
                            content: 'Anda mungkin salah memasukkan username dan password, silahkan coba lagi!',
                            type: 'alert'
                        });
                    </script>
                    <?php
                }
            }
            ?>
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <img src="../assets/img/alt-services.jpg" height="500" width="500" alt="">
                            </div>
                            <div class="col-lg-6 ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <br><br>
                                    <form class="form" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                name="username"
                                                placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            name="password"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>


                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Login
                                        </button>
                                        <br><br><br>
                                        <hr>

                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>