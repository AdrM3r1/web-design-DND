<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='../scripts/dentrites.js'></script>
</header>

<?php
include "config.php";
if (isset($_POST)) {
    $user_Name = $_POST["nick"];
    $user_Email = $_POST["email"];
    $user_Password = $_POST["password"];
    $user_Cpass = $_POST["cpass"];
    /* busqueda de nick en tabla de usuarios */
    $sql = "SELECT * from users_ where nick='$user_Name'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);
    /* busqueda de mail en la tabla de usuarios */
    $sql = "SELECT * from users_ where mail='$user_Email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    $cookie_name = "nick";
    $cookie_value = $user_Name;
    setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/");
    /* sql inserte un nuevo usuario en la bbdd */
    if ($count_user == 0 && $count_email == 0) {
        if ($user_Password == $user_Cpass) {
            $sql = "INSERT INTO users_(nick, mail, pass) VALUES('$user_Name', '$user_Email','$user_Password')";
            /*  respuestas con sweetalert, controla si el registro es correcto te lleva a la vista de 'mi cuenta',
              si las contraseñas no coinciden emite un error tienes que repetir registro
              si ya existe un usuario con el mismo nick devuelve mensaje de error
              si el email ya esta registrado devuelve mensaje de error
            */
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo ' <script>
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Bienvenido ' . $user_Name . '",
                            text:"Acceso garantizado a usuario",
                            showConfirmButton: false,
                            timer: 2000,
                        }).then(function () {
                            createCookie();
                            window.location.href = "../html/usuario.php";
                        })                
                    </script>';
            }
        } else {
            echo '<script>
                        Swal.fire({
                            position: "center",
                            icon: "warning",
                            title: "Advertencia",
                            text:"Las contraseñas no coinciden",
                            showConfirmButton: false,
                            timer: 2000,
                        }).then(function () {
                            window.location.href = "../html/registro.php";
                        })
                    </script>';
        }
    } else {
        if ($count_user > 0) {
            echo '<script>
                        Swal.fire({
                            position: "center",
                            icon: "warning",
                            title: "Advertencia",
                            text:"El nombre de usuario / nick ya existe",
                            showConfirmButton: false,
                            timer: 2000,
                        }).then(function () {
                            window.location.href = "../html/registro.php";
                        })
                    </script>';
        }
        if ($count_email > 0) {
            echo '<script>
                        Swal.fire({
                            position: "center",
                            icon: "warning",
                            title: "Advertencia",
                            text:"La direccion de correo ya esta registrada",
                            showConfirmButton: false,
                            timer: 2000,
                        }).then(function () {
                            window.location.href = "../html/registro.php";
                        })
                    </script>';
        }
    }
}

?>