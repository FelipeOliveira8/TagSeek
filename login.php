<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <section class="s-login">
        <div class="d-login1">
        <img class="logo" src="images/logo.png">
            <form action="index.php" class="f-login">
                <div class="input-box">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                    </span>
                    <input type="email" name="user_email" id="user_emailID" placeholder="" required>
                    <label for="email">Usuário:</label>
                </div>
                <div class="input-box">
                        <span class="icon">
                            <svg id="password-show" onclick="showPassword('user_passID')" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m644-428-58-58q9-47-27-88t-93-32l-58-58q17-8 34.5-12t37.5-4q75 0 127.5 52.5T660-500q0 20-4 37.5T644-428Zm128 126-58-56q38-29 67.5-63.5T832-500q-50-101-143.5-160.5T480-720q-29 0-57 4t-55 12l-62-62q41-17 84-25.5t90-8.5q151 0 269 83.5T920-500q-23 59-60.5 109.5T772-302Zm20 246L624-222q-35 11-70.5 16.5T480-200q-151 0-269-83.5T40-500q21-53 53-98.5t73-81.5L56-792l56-56 736 736-56 56ZM222-624q-29 26-53 57t-41 67q50 101 143.5 160.5T480-280q20 0 39-2.5t39-5.5l-36-38q-11 3-21 4.5t-21 1.5q-75 0-127.5-52.5T300-500q0-11 1.5-21t4.5-21l-84-82Zm319 93Zm-151 75Z"/></svg>
                            <svg id="password-hide" onclick="showPassword('user_passID')" style="display: none;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                        </span>
                    <input type="password" name="user-pass" id="user_passID" placeholder="" required>
                    <label for="senha">Senha:</label>
                </div>
                <a href="#">Esqueci minha senha</a>
                <input type="submit" class="btn-login" value="Log In">
            </form>
        </div>
        <div class="d-login2">
    
        </div>
    </section>
</body>
<script src="js/showPassword.js"></script>
</html>

<?php

    if(isset($_POST['email'])){

        include "mysqlConnect.php";
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $info = mysqli_fetch_array(mysqli_query($connection, "select user_password, user_id, user_permissions, user_name, theme_preference from users where user_email like '$email';"));
        
        if(empty($info)){ //No info returned thus, the user doesn't exist
            
            mysqli_close($connection);
            
            echo"<form action='../login.php' method='post' id='error'><input type='hidden' id='err' name='err' value='100'></form>";
            echo"<script>document.getElementById('error').submit();</script>";
            
        }else if(!password_verify($password, $info[0])){ //Wrong password
            
            mysqli_close($connection);
            
            echo"<form action='../login.php' method='post' id='error'><input type='hidden' id='err' name='err' value='200'></form>";
            echo"<script>document.getElementById('error').submit();</script>";
            
        }else{ //Login succeeded
            
            //Starts the user session and saves their information
            session_start();
            
            $_SESSION['id'] = $info[1];
            $_SESSION['permissions'] = $info[2];
            $_SESSION['username'] = $info[3];
            $_SESSION['theme'] = $info[4];
            
            mysqli_close($connection);
            
            //Makes the session last for 30 days
            $params = session_get_cookie_params();
            setcookie(session_name(), $_COOKIE[session_name()], time() + 60*60*24*30, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            
            //Redirects user to the dashboard
            header("Location: ../user_dashboard.php");
            
        }
        
    }else{
        //Checks if the user is logged in
        session_start();

        if(!isset($_SESSION['username'])){
            header('Location: ../login.php');
        
        }else{
            header('Location: ../user_dashboard.php');
        }
    }
?>