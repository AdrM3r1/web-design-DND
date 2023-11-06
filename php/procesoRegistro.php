<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src='../scripts/dentrites.js'></script>
</header>

<?php 
include ("config.php");
if (isset($_POST)) {
    
    $user_Name = $_POST["nick"];
    $user_Email = $_POST["email"];
    $user_Password = $_POST["password"];
    $user_Cpass = $_POST["cpass"];

    $sql = "Select * from users_ where nick='$user_Name'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "Select * from users_ where mail='$user_Email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_user == 0 && $count_email == 0) {
        if ($user_Password == $user_Cpass) {
            $hash = password_hash($user_Password, PASSWORD_DEFAULT);

            // Password Hashing is used here.
            $sql = "INSERT INTO users_(nick, mail, pass) VALUES('$user_Name', '$user_Email','$hash')";

            $result = mysqli_query($conn, $sql);

            if ($result) { 
            echo' <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Bienvenido '.$user_Name.'",
                text:"Acceso garantizado a usuario",
                showConfirmButton: false,
                timer: 2000,
              }).then(function () {
                window.location.href = "../html/usuario.html";
                createCookie();
              })
                    
                        
                  </script>';
            }
        } else {
            echo '<script>
                    alert("Passwords do not match")
                    window.location.href = "../html/registro.php";
                </script>';
        }
    } else {
        if ($count_user > 0) {
            echo '<script>
                    window.location.href = "../html/registro.php";
                    alert("Username already exists!!")
                </script>';
        }
        if ($count_email > 0) {
            echo '<script>
                    window.location.href = "../html/registro.php";
                    alert("Email already exists!!")
                </script>';
        }
    }
} 
?>