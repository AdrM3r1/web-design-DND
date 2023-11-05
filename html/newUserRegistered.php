<?php
    session_start();
	$user_Name = document.getElementById("userName").value;
	$user_Email = document.getElementById("userEmail").value;
	$user_Password = document.getElementById("userPassword").value;
	$user_Data = { 'nick': $user_Name, 'email': $user_Email, 'password': $user_Password }


    // initializing variables
    $user = "root";
    $pass = "";
    $errors = array(); 
    $dtbs = 'db_tib'

    $db = mysqli_connect('localhost',$user,$pass,$dtbs);

    // registro
    if (isset($_POST['username'])) {
        // pilla los valores del form
        $user_Name = mysqli_real_escape_string($db, $_POST['nick']);
        $user_Email = mysqli_real_escape_string($db, $_POST['mail']);
        $user_Password = mysqli_real_escape_string($db, $_POST['password']);

        // comprobar que no existe usuario anterior con los mimos datos (nick o email)
        $user_check_query = "SELECT * FROM users_ WHERE nick='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // si existe
            if ($user['nick'] === $username) {
            array_push($errors, "Username already exists");
            }

            if ($user['mail'] === $email) {
            array_push($errors, "email already exists");
            }
        }

        // resgistrar si no tiene fallos
        if (count($errors) == 0) {

                $query = "INSERT INTO users_ (nick, mail, pass) 
                                VALUES('$username', '$email', '$password')";
                mysqli_query($db, $query);
                $_SESSION['nick'] = $username;
                $_SESSION['success'] = "You are now logged in";
        }
    }
