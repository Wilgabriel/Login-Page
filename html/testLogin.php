<?php 
    session_start();
    //print_r($_REQUEST)

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['PASSWORD'])) {

        include_once('config.php');
        $email = $_POST['email'];
        $PASSWORD = $_POST['PASSWORD'];

        $sql = "SELECT * FROM user1 WHERE email = '$email' and PASSWORD = '$PASSWORD'";

        $result = $connection->query($sql);

        if (mysqli_num_rows($result) < 1){

            if (password_verify('PASSWORD', $PASSWORD)) {
                echo 'Password is valid!';

                $_SESSION['email'] = $email;
                $_SESSION['PASSWORD'] = $PASSWORD;
                header('Location: index.php');

            } else {
                
                unset($_SESSION['email']);
                unset($_SESSION['PASSWORD']);
                header('Location: login.php');
            }

        } else {

            $_SESSION['email'] = $email;
            $_SESSION['PASSWORD'] = $PASSWORD;
            header('Location: index.php');

        }

    } else {
        header('Location: login.php');
    }

?>