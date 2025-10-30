<?php

session_start();

    if(isset($_POST['submit'])) {

        $email_a = 'exemplo@example.com';

        include_once('config.php');

        $username = $_POST['username'];
        $email = $_POST['email'];
        $PASSWORD = $_POST['PASSWORD'];
        $PASSWORDCONF = $_POST['PASSWORDCONF'];
        

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            if ($_POST["PASSWORD"] === $_POST["PASSWORDCONF"]) {

                $password = $_POST['PASSWORD'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $result = mysqli_query($connection, "INSERT INTO user1(username,email,PASSWORD) 
                VALUES ('$username','$email','$password')");

                $_SESSION['email'] = $email;
                $_SESSION['PASSWORD'] = $PASSWORD;

                header('Location: index.php');
            
            }
  
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="img/Icone.png">
    <title>Entrar</title>

</head>
<body>

    <div class="cabecalho">

        <a href="index.php"><img src="img/ChatGPT Image 21 de set. de 2025, 22_36_58.png" alt="Italian Trulli"></a>

        <input type="text" placeholder="Buscar">

    
    </div>

        <div class="menuhor">

            <ul>
                <li>
                    <div>
                        <a class="link" href="index.php">
                            <span class="link--top">Inicio</span>
                            <span class="link--bottom">Inicio</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a class="link" href="">
                            <span class="link--top">Feminino</span>
                            <span class="link--bottom">Feminino</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a class="link" href="">
                            <span class="link--top">Masculino</span>
                            <span class="link--bottom">Masculino</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    
    <div class="principal">

        <div class="entrar">
            <h1>Entrar</h1>
            <br>
            <form action="testLogin.php" method="POST">
                <div class="inputBox">
                    <label for="email">Email</label> <br>
                    <input type="text" id="email" name="email" class="inputUser" required>
                </div>
                <br>

                <div class="inputBox">
                    <label for="PASSWORD">Senha</label> <br>
                    <input type="password" id="passwordL" name="PASSWORD" class="inputUser">

                    <i id="togglePassword1" class="bi bi-eye-slash" onclick="passwordhider()" style="cursor: pointer;"></i>

                    <script>
                        function passwordhider() {
                        var x = document.getElementById("passwordL");
                        var icon = document.getElementById("togglePassword1");

                        if (x.type === "password") {
                            x.type = "text";
                            icon.classList.remove("bi-eye-slash");
                            icon.classList.add("bi-eye");
                        } else {
                            x.type = "password";
                            icon.classList.remove("bi-eye");
                            icon.classList.add("bi-eye-slash");
                        }
}
                    </script>
                    
                </div>
                <br>

                <button class="btn liquid" name="submit" >
                    <span>Confirmar <i id="conf" class="bi bi-forward-fill"></i></span>
                </button>
            </form>
        </div>

        
        <div class="cadastrar">
            <h1>Não tem uma conta?</h1>
            <div class="wave-container">
                <h1 class="wave-text">
                    <span>C</span><span>A</span><span>D</span><span>A</span><span>S</span><span>T</span><span>R</span><span>E</span>
                </h1>
            </div>
            <br>

            <form action="login.php" method="POST">
                <div class="inputBox">
                    <label for="username">Usuario</label> <br>
                    <input type="text" id="username" name="username" class="inputUser" minlength="8" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="email">Email</label> <br>
                    <input type="text" id="email" name="email" class="inputUser" placeholder="...@exemplo.com" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="PASSWORD">Senha</label> <br>
                    <input type="password" id="passwordC1" name="PASSWORD" class="inputUser" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter pelo menos um número, uma letra maiúscula e uma minúscula, e ter no mínimo 8 caracteres." required>

                    <i id="togglePassword2" class="bi bi-eye-slash" onclick="passwordhider2()" style="cursor: pointer;"></i>

                    <script>
                        function passwordhider2() {
                        var x = document.getElementById("passwordC1");
                        var icon = document.getElementById("togglePassword2");

                        if (x.type === "password") {
                            x.type = "text";
                            icon.classList.remove("bi-eye-slash");
                            icon.classList.add("bi-eye");
                        } else {
                            x.type = "password";
                            icon.classList.remove("bi-eye");
                            icon.classList.add("bi-eye-slash");
                        }
}
                    </script>
                </div>
                
                <br>
                <div class="inputBox">
                    <label for="PASSWORD">Confirmar Senha</label> <br>
                    <input type="password" id="passwordC2" name="PASSWORDCONF" class="inputUser" minlength="8" required="">

                    <i id="togglePassword3" class="bi bi-eye-slash" onclick="passwordhider3()" style="cursor: pointer;"></i>

                    <script>
                        function passwordhider3() {
                        var x = document.getElementById("passwordC2");
                        var icon = document.getElementById("togglePassword3");

                        if (x.type === "password") {
                            x.type = "text";
                            icon.classList.remove("bi-eye-slash");
                            icon.classList.add("bi-eye");
                        } else {
                            x.type = "password";
                            icon.classList.remove("bi-eye");
                            icon.classList.add("bi-eye-slash");
                        }
}
                    </script>
                </div>
            <br>

                <button class="btn liquid" name="submit" >
                    <span>Confirmar <i class="bi bi-forward-fill"></i></span>
                </button>
            </form>
        </div>
    </div>

    <div class="rodape">
        © 2025 SeuSite. Todos os direitos reservados. <br>
        Feito com café e criatividade. <br> <br>
        contato@seusite.com <br>
        www.seusite.com
    </div>

</body>
</html>