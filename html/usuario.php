<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>
        <| DND BUILDER |>
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--Estilos dados-->
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/diceroll.css'>
    <!--estilo y js inicio-->
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/pupils.css'>
    <script src='../scripts/dentrites.js'></script>
    <!--JQuery-->
    <script src="../lib/jquery-3.4.1.min.js"></script>
    <!--Bootstrap-->
    <script src='../scripts/bootstrap.bundle.js'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/bootstrap.css'>
    <!--Sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body id="website">
    <div>
        <h1 class="titulo">The Iris Of The Beholder </h1>
    </div>

    <div class="content">
        <!--content start-->
        <div class="row-cols-auto">
            <div id="img_logo"> </div>
            <div id="divisor">
                    <ul id="contenedorNav" role="menubar">
                        <li class="itemNav" role="menuitem"><a href="info.html"> Informacion</a></li>
                        <li class="itemNav" role="menuitem"><a href="utilidades.html">Herramientas</a></li>
                        <li class="itemNav" role="menuitem" id="reg"><a href="registro.php">Registrate</a></li>
                        <li class="itemNav" role="menuitem" id="log"><a style="cursor: pointer;" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</a></li>
                        <li class="itemNav" role="menuitem" id="user"><a href="usuario.php">Mi cuenta</a></li>
                        <a onclick="logOut()" style="cursor: pointer;font-size: 14px; margin-left: 12px;" id="logout">Cerrar sesion</a>
                    </ul>
                <div class="io">
                    <div class="container">
                        <div class="row justify-content-md-start">
                            <div class="col-md-12">
                                    <h4>Lista de Personajes</h4>
                                    <a class="itemNav" href="charCreator.php"> Crear nuevo personaje</a>

                                    <?php 
                                        include("../php/config.php");

                                        $sql = "Select * from personajes_ where asociadoa= '$_COOKIE[nick]';";
                                        $result = mysqli_query($conn, $sql);
                                    ?>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Clase</th>
                                            <th scope="col">Raza</th>
                                            <th scope="col">Nivel</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        $result = mysqli_query($conn, $sql);  
                                        $count = mysqli_num_rows($result);  
                                        if($count !=0){
                                        while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr class='character'>";
                                        echo "<td>".$row['nombre']."</td>";
                                        echo "<td>".$row['clase']."</td>";
                                        echo "<td>".$row['raza']."</td>";
                                        echo "<td>".$row['nivel']."</td>";
                                        echo "<th scope='row'><a href='charEditor.php' style='cursor: pointer'>Edit</a></th>";
                                        echo "</tr>";
                                        }
                                        }else{
                                            echo "<h6 style='color:#FFFEBD' >Actualmente no tienes ningun personaje</h6>";
                                        }
                                        
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="principal.html">Home</a></li>
                <li style="color:greenyellow" class="breadcrumb-item active" aria-current="page">Usuario</li>
            </ol>
        </nav>
    </div>

    <script>
        cambioLogo();
        getCookie();
    </script>
</body>

</html>