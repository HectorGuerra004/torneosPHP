<?php
include_once './interfaces/db/conexion.php';

session_start();


print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/boton.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php include_once 'components/navbar.php' ?>
    <section class="parteInicial">
        <div class="container-fluid-index"> <!-- Usar container-fluid para evitar margen horizontal -->
            <div class="row">
                <!-- Columna izquierda -->
                <div class="col-md-6 col-sm-12 left">
                    <h2 data-aos="fade-down" class="textoIndexTitulo"><b>¡Bienvenido a Game On FC!</b></h2>
                    <p data-aos="fade-down" data-aos-duration="1000" class="textoIndex"><b>Únete a la comunidad de gamers más apasionada, compite y gana dinero en los torneos de FC 25 más emocionantes.</b></p>

                    <div data-aos="fade-down" data-aos-duration="2000" class="images-wrapper d-flex  align-items-center">
                        <button class="cta">
                            <span class="span"><b>COMPITE AHORA</b></span>
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
                        <img class="ms-5 imgFlecha1" src="./assets/img/flecha.png" alt="">
                        <img class="ms-5 imgFlecha2" src="./assets/img/flecha.png" alt="">
                    </div>
                </div>

                <!-- Columna derecha -->
                <div data-aos="fade-up" data-aos-duration="1500" class="col-md-6 col-sm-12 right">
                    <div class="cuerpo">
                        <div class="container-cuerpo">
                            <div class="terminal-frame">
                                <!-- Header with buttons -->
                                <div class="terminal-header">
                                    <div class="terminal-buttons">
                                        <div class="terminal-button"></div>
                                        <div class="terminal-button"></div>
                                        <div class="terminal-button"></div>
                                    </div>
                                    <div>-</div>
                                </div>

                                <!-- Image -->
                                <img src="./assets/img/GAME ON FC_20240917_220035_0000.svg" alt="Image example">

                                <!-- Bottom arrows -->
                                <div class="terminal-bottom">
                                    <div class="arrow arrow-left"></div>
                                    <div class="arrow arrow-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parteDos">
        <div class="index-segunda d-flex container-fluid">
            <div class="container text-center">
                <div class="row textoDos">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="col col-md-4 ">
                        <span class="svg-icon"><svg fill="#ffffff" width="30" height="30" viewBox="-1.6 -1.6 19.20 19.20" id="register-16px" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00016" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-1.6" y="-1.6" width="19.20" height="19.20" rx="0" fill="#2d680f" strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="Path_184" data-name="Path 184" d="M57.5,41a.5.5,0,0,0-.5.5V43H47V31h2v.5a.5.5,0,0,0,.5.5h5a.5.5,0,0,0,.5-.5V31h2v.5a.5.5,0,0,0,1,0v-1a.5.5,0,0,0-.5-.5H55v-.5A1.5,1.5,0,0,0,53.5,28h-3A1.5,1.5,0,0,0,49,29.5V30H46.5a.5.5,0,0,0-.5.5v13a.5.5,0,0,0,.5.5h11a.5.5,0,0,0,.5-.5v-2A.5.5,0,0,0,57.5,41ZM50,29.5a.5.5,0,0,1,.5-.5h3a.5.5,0,0,1,.5.5V31H50Zm11.854,4.646-2-2a.5.5,0,0,0-.708,0l-6,6A.5.5,0,0,0,53,38.5v2a.5.5,0,0,0,.5.5h2a.5.5,0,0,0,.354-.146l6-6A.5.5,0,0,0,61.854,34.146ZM54,40V38.707l5.5-5.5L60.793,34.5l-5.5,5.5Zm-2,.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1,0-1h2A.5.5,0,0,1,52,40.5Zm0-3a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1,0-1h2A.5.5,0,0,1,52,37.5ZM54.5,35h-5a.5.5,0,0,1,0-1h5a.5.5,0,0,1,0,1Z" transform="translate(-46 -28)"></path>
                                </g>
                            </svg></span>

                        <span  class="text-label"><b>REGISTRATE:</b></span>
                        <br>
                        Crea tu cuenta en pocos pasos.
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="2000" class="col col-md-4 ">
                        <span class="svg-icon"><svg width="30" height="30" viewBox="-7.6 -7.6 91.20 91.20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="-7.6" y="-7.6" width="91.20" height="91.20" rx="0" fill="#2d680f" strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 17.4167,58.5833L 17.4167,53.8333L 22.1667,53.8333L 22.1667,45.9167L 17.4167,45.9167L 17.4167,41.1667L 26.9167,41.1667L 26.9167,47.5L 30.0833,47.5L 30.0833,28.5L 26.9167,28.5L 26.9167,34.8333L 17.4167,34.8334L 17.4167,30.0833L 22.1667,30.0833L 22.1667,22.1667L 17.4167,22.1667L 17.4167,17.4167L 26.9167,17.4167L 26.9167,23.75L 34.8333,23.75L 34.8333,34.8333L 41.1667,34.8333L 41.1667,23.75L 49.0833,23.75L 49.0833,17.4167L 58.5833,17.4167L 58.5833,22.1667L 53.8333,22.1667L 53.8333,30.0833L 58.5833,30.0833L 58.5833,34.8333L 49.0833,34.8333L 49.0833,28.5L 45.9167,28.5L 45.9167,47.5L 49.0833,47.5L 49.0833,41.1667L 58.5833,41.1666L 58.5833,45.9167L 53.8333,45.9167L 53.8333,53.8333L 58.5833,53.8333L 58.5833,58.5833L 49.0833,58.5833L 49.0833,52.25L 41.1667,52.25L 41.1667,41.1667L 34.8333,41.1667L 34.8333,52.25L 26.9167,52.25L 26.9167,58.5833L 17.4167,58.5833 Z "></path>
                                </g>
                            </svg></span>

                        <span class="text-label"><b>ÚNETE A UN TORNEO:</b></span>
                        <br>
                        Elige el torneo que más te guste y apúntate.
                        <br>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="3000" class="col col-md-4 ">
                        <span class="svg-icon"><svg width="30px" height="30px" viewBox="0 0 120.00 120.00" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#2d680f">
                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                    <rect x="0" y="0" width="120.00" height="120.00" rx="0" fill="#2d680f" strokewidth="0"></rect>
                                </g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #ffffff;
                                        }
                                    </style>
                                    <path class="st0" d="M101,35.3l-0.2-1.7h-10c0.5-3.4,0.8-6.9,1-10.5c0.1-1.9-1.4-3.5-3.1-3.5H31.4c-1.8,0-3.2,1.6-3.1,3.5 c0.1,3.6,0.5,7.1,1,10.5h-10L19,35.3c-0.1,0.4-1.2,10.6,5.4,19.8c4.3,6,11,10.1,19.7,12.2c2.8,2.8,5.9,4.9,9.2,6.2 c-0.4,4.1-0.9,8.1-1.4,11.8h-3.2c-5,0-9,4-9,9v6.2h40.6v-6.2c0-5-4-9-9-9h-3.1c-0.6-3.8-1.1-7.7-1.5-11.8c3.3-1.2,6.4-3.3,9.2-6.2 c8.7-2.1,15.4-6.2,19.7-12.2C102.2,45.9,101,35.7,101,35.3z M27.3,52.6c-4.2-5.8-4.7-12.1-4.7-15.1h7.3c1.9,9.5,5.3,17.9,9.6,24.2 C34.3,59.7,30.2,56.6,27.3,52.6z M92.7,52.6c-2.9,4-7,7.1-12.2,9.1c4.4-6.4,7.7-14.7,9.6-24.2h7.3C97.4,40.5,96.8,46.8,92.7,52.6z"></path>
                                </g>
                            </svg></span>

                        <span class="text-label"><b>COMPITE Y GANA:</b></span>
                        <br>
                        Juega, gana partidos y escala en la clasificación.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-grid">
        <!-- Parte izquierda -->
        <div class="left-section">
            <h6 data-aos="fade-down" data-aos-duration="1000"><b>SOBRE NOSOTROS</b></h6>
            <p data-aos="fade-down" data-aos-duration="1000">En Game On FC, creemos en el poder del juego competitivo para unir a las personas. Organizamos torneos de
                FC
                25
                para todos los niveles, ofreciendo una experiencia justa, divertida y profesional. Somos dos amigos
                gamers
                que
                transformaron sus torneos caseros en una plataforma en línea para la comunidad gamer. Queremos compartir
                nuestra
                pasión y crear un espacio donde todos puedan disfrutar del juego competitivo.</p>
            <ul data-aos="fade-down" data-aos-duration="1000" class="lista-1">
                <li>Experiencia Personalizada: Diseñamos cada torneo para ofrecer la mejor experiencia posible.</li>
                <li>Plataforma Segura: Juega en un entorno justo y seguro.</li>
                <li>Torneos Semanales y Premios Increíbles: Compite regularmente, mejora tus habilidades y gana
                    premiosen efectivo y más.</li>
                <li>Comunidad Activa: Fomentamos una comunidad vibrante y comprometida.</li>
            </ul>
            <footer><button class="cta">
                    <span class="span"><b>Registrate Ahora</b></span>
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
                </button></footer>
        </div>

        <!-- Parte derecha -->
        <div class="right-section">
            <!-- Mitad superior -->
            <div data-aos="fade-down" data-aos-duration="1000" class="top-right">
                <img src="./assets/img/logoFc.png" alt="">
            </div>

            <!-- Mitad inferior dividida en dos columnas -->
            <div data-aos="fade-down" data-aos-duration="1000" class="bottom-right">
                <div class="bottom-right-left">
                    <img src="./assets/img/controlaPlayFc.png" alt="">
                </div>
                <div class="bottom-right-right">
                    <img src="./assets/img/imgRegistro1.svg" alt="">

                </div>
            </div>
        </div>
    </section>


    <?php include_once 'components/footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>