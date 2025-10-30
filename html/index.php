<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/Icone.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <title>Other Silk</title>
</head>
<body>
    <div class="cabecalho">

        <a href="index.php"><img src="img/ChatGPT Image 21 de set. de 2025, 22_36_58.png" alt="Italian Trulli"></a>

        <input type="text" placeholder="Buscar">

        <?php if (isset($_SESSION['email']) !== true): ?>
                <a href="login.php">
                    <button class="btn liquid">
                        <span>Entrar <i class="bi bi-person-plus-fill"></i></span>
                    </button>
                </a>
        <?php endif; ?>
        <?php if (isset($_SESSION['email']) == true): ?>
            <a href="logout.php">
                <div id="perfil">
                    <i class="bi bi-person-fill"></i>
                </div>
            </a>

                <div id="heart">
                    <i class="bi bi-heart-fill"></i>
                </div>

                <div id="bag">
                    <i class="bi bi-basket-fill"></i>
                </div>
            

        <?php endif; ?>
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



    <div class="container">
        <div class="split-text-container">
            <span class="text-part left">O QUE VOCÊ ESTA D</span>
            <span class="text-part right">ISPOSTO A SACRIFICAR PELO ESTILO?</span>
        </div>
    </div>

    <div class="container">
        <div class="anuncio">
            <div class="swiper mySwiperAnuncio">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-color:#2C2E39; color:white">1</div>
                    <div class="swiper-slide" style="background-color:white;">2</div>
                    <div class="swiper-slide" style="background-color:#2C2E39; color:white">3</div>
                    <div class="swiper-slide" style="background-color:white;">4</div>
                    <div class="swiper-slide" style="background-color:#2C2E39; color:white">5</div>
                    <div class="swiper-slide" style="background-color:white;">6</div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="blank"></div>

    <div class="container second">
            <img src="img/produtosText.png" width="400px">
    </div>
    <div class="container second">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="">
                    <img src="img/Fairy-Grunge-Aesthetic-T-Shirt-Boogzel-Clothing-Photoroom.png" alt="">
                    <h2>Camisas</h2>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="img/grungeblackrippedjeansboogzelclothing_1_800x-Photoroom.png" alt="">
                    <h2>Calças</h2>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="img/Sece82bb15238497a9274a4b1fcbc8217l-Photoroom.png" alt="">
                    <h2>Moletons</h2>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="img/Sece82bb15238497a9274a4b1fcbc8217l-Photoroom (1).png" alt="">
                    <h2>Calçados</h2>
                </a>
            </div>
            </div>
        </div>
        

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script src="js/swiper.js"></script>

    </div>



    <div class="rodape">
        © 2025 Other Silk. Todos os direitos reservados. <br>
        Feito com magia e criatividade. <br> <br>
        contato@othersilk.com <br>
        www.othersilk.com
    </div>

</body>
</html>