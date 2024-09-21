<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/torneos.css">
    <link rel="stylesheet" href="./assets/css/boton.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Document</title>
</head>
<style>
    .tipo-torneos {
        text-align: center;
        display: flex;
        flex-direction: column;
        /* Cambia a columna en pantallas pequeñas */
        align-items: center;
        /* Centra horizontalmente los elementos */
        justify-content: center;
        /* Centra verticalmente */
        flex-direction: column;
    }

    .caja-section-1,
    .caja-section-2,
    .caja-section-3 {
        position: relative;
        /* Habilita el posicionamiento relativo */
        padding: 2vh;
        margin-top: 22vh
    }

    .caja-section-1 img {
        position: absolute;
        /* Posiciona la imagen sobre el div */
        top: -20px;
        /* Ajusta la posición vertical */
        left: 50%;
        /* Centra horizontalmente */
        transform: translateX(-50%) translateY(-40%);
    }

    .caja-section-2 img {
        position: absolute;
        /* Posiciona la imagen sobre el div */
        top: -20px;
        /* Ajusta la posición vertical */
        left: 50%;
        /* Centra horizontalmente */
        transform: translateX(-50%) translateY(-50%);
    }

    .caja-section-3 img {
        position: absolute;
        /* Posiciona la imagen sobre el div */
        top: -20px;
        /* Ajusta la posición vertical */
        left: 50%;
        /* Centra horizontalmente */
        transform: translateX(-50%) translateY(-45%);
    }

    .torneo-bronce {
        background-color: #94c745;
        width: 50vh;
        height: 40vh;
        margin-top: 10vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* border: 2px solid black; */
    }

    .torneo-plata {
        background-color: #94c745;
        width: 50vh;
        height: 45vh;
        margin-top: 5vh;
        padding-top: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .torneo-oro {
        background-color: #2d680f;
        width: 50vh;
        height: 50vh;
        padding-top: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (min-width: 768px) {
        .tipo-torneos {
            display: flex;
            flex-direction: row;
            /* Organiza en filas en pantallas grandes */

            /* justify-content: space-between; */
            margin-top: 22vh;
            margin-left: 10vh;
            margin-right: 10vh;
        }

        .caja-section-1,
        .caja-section-2,
        .caja-section-3 {
            position: relative;
            /* Habilita el posicionamiento relativo */
            padding: 2vh;
            margin-top: 1vh;
        }

        .img-bronce {
            width: 40vh;
        }

        .img-plata {
            width: 45vh;
        }

        .img-oro {
            width: 50vh;
        }
    }

    @media (max-width: 415px) {
        .torneo-bronce {
            background-color: #94c745;
            width: 45vh;
            height: 36vh;
            margin-top: 5vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* border: 2px solid black; */
        }

        .torneo-plata {
            background-color: #94c745;
            width: 45vh;
            height: 40.5vh;
            margin-top: 4.5vh;
            padding-top: 9%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .torneo-oro {
            background-color: #2d680f;
            width: 45vh;
            height: 45vh;
            padding-top: 13.5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-bronce {
            width: 36vh;
        }

        .img-plata {
            width: 40.5vh;
        }

        .img-oro {
            width: 45vh;
        }
    }
</style>

<body>
    <!-- navbar -->
    <?php include_once 'components/navbar.php' ?>
    <!-- final navbar -->

    <div class="container registro">
        <div data-aos="fade-up" data-aos-duration="500" class="form-container">
            <h1><b>¡UNETE A UN TORNEO!</b></h1>
            <h2><b>¿Estás listo para demostrar tu habilidad en la cancha? </b></h2>
            <form>

            </form>
        </div>
        <div data-aos="fade-up" data-aos-duration="500" class="right-image">
            <button class="cta">
                <span class="span"><b><b>Ver Torneos</b></b></span>
                <span class="second">
                    <svg
                        width="50px"
                        height="20px"
                        viewBox="0 0 66 43"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g
                            id="arrow"
                            stroke="none"
                            stroke-width="1"
                            fill="none"
                            fill-rule="evenodd">
                            <path
                                class="one"
                                d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                fill="#FFFFFF"></path>
                            <path
                                class="two"
                                d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                fill="#FFFFFF"></path>
                            <path
                                class="three"
                                d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                fill="#FFFFFF"></path>
                        </g>
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <section class="tipo-torneos">
        <div data-aos="fade-up" data-aos-duration="1000" class="caja-section-1">
            <img class="img-bronce" src="./assets/img/bronce.png" alt="">
            <div class="torneo-bronce">
                <h3><i style="color: gold;" class="fa-solid fa-star"></i><br>Torneos de bronce<br>2.5$</h3>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="3000" class="caja-section-2">
            <img class="img-oro" src="./assets/img/oro.png" alt="">
            <div class="torneo-oro">
                <h3><i style="color: gold;" class="fa-solid fa-star"></i><i style="color: gold;" class="fa-solid fa-star"></i><i style="color: gold;" class="fa-solid fa-star"></i><br>Torneos de oro<br>10$</h3>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="caja-section-3">
            <img class="img-plata" src="./assets/img/plata.png" alt="">
            <div class="torneo-plata">
                <h3><i style="color: gold;" class="fa-solid fa-star"></i><i style="color: gold;" class="fa-solid fa-star"></i><br>Torneos de Plata<br>5$</h3>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include_once 'components/footer.php' ?>
    <!-- final footer -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>