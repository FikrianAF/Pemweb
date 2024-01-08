<?php
    include "connect.php";
    ## Pengkondisian tampilan database 
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
    $password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
    ## Pengkondisian validasinya
    if (!empty($_POST['submit_validate'])) {
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if ($hasil) {
            //$_SESSION['username_decafe'] = $username;
            header('Location: ../home');
        } else { ?>
           <script>
               alert('Username atau Password Salah');
               window.location='../login.php'
           </script>
<?php
    }
  }
?>