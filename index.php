<?php
    require_once('class/atracciones.class.php');
    $atracciones = $ATRACCION->read();
    $sliders = $ATRACCION->getallSlider();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/7a93f8c7d6.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Zoologico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <div id="wrapper" class="container-fluid">
        <div class="row">
            <div class="col">
                <header>

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                                foreach($sliders as $slider):
                            ?>
                            <div class="carousel-item <?php if($slider['prioridad']==1) echo "active"; ?>">
                                <a href="<?php echo $slider['url'] ?>" target="_blank"><img src="<?php echo $slider['imagen'] ?>" class="d-block w-100" alt="<?php echo $slider['slider'] ?>"></a>
                            </div>
                            <?php
                                endforeach;
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mapa.php">Mapa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="costos.php">Costos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Atracciones
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                            foreach($atracciones as $atraccion){
                                                echo '<li><a class="dropdown-item" href="atracciones.php">'.$atraccion["atraccion"].'</a></li>';
                                            }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="medio" class="row">
            <div class="col-8">
                <section>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ??Mam??feros!
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card mb-3">
                                        <img src="images/Animales/leon.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Le??n</h5>
                                            <p class="card-text">El ???Rey de la Selva??? integra a los mam??feros que se pueden hallar en el zool??gico.
                                                Su alimentaci??n debe ser sustanciosa debido a que este tiene que mantener un peso gozar de una salud optima, se dice que a diario son 7 kilogramos de carne que debe comer un le??n de zool??gico.
                                                Entre sus principales caracter??sticas destacan sus fuertes patas, colmillos afilados y una mand??bula que podr??a matar hasta a las presas m??s temidas.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/elefante.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Elefante</h5>
                                            <p class="card-text">Este es uno de los animales del zool??gico m??s buscados por los visitantes, a pesar de su gran tama??o es uno de los m??s queridos en ese lugar.
                                                Su alimentaci??n diaria debe ser m??nimo de 150 kilogramos y se distribuyen en manadas dirigidas por las hembras.
                                                Poseen una larga trompa con la capacidad de analizar todo lo que se le pase por el frente, la misma es muy flexible y poderosa.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/chimpance.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Chimpanc??</h5>
                                            <p class="card-text">Su manada puede estar integrada hasta por 75 u 80 especies de este tipo guiadas por un l??der.
                                                Gracias a sus caracter??sticas f??sicas pueden trepar por los ??rboles y pasarse por las ramas, por lo general, andan en modo cuadr??pedo, es decir, en cuatro patas.
                                                ??Sab??as qu??? Su gen??tica es 99% similar a la de las personas. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/tigre.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Tigre de Bengala</h5>
                                            <p class="card-text">Son animales solitarios y que ??nicamente socializan en ??poca de apareamiento. Estos, deben alimentarse a diario m??nimo con 40 kilogramos de alimentos para su pleno desarrollo.
                                                A pesar de que son poco sociables se adaptan a cualquier h??bitat y el zool??gico no escapa de ello, por tal motivo, son muy comunes en estos espacios de entretenimiento y esparcimiento. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/jirafa.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Jirafa</h5>
                                            <p class="card-text">Este animal de caracter??stico cuello largo no puede faltar en la mayor??a de los zool??gicos, sin embargo, en su estado salvaje se ubican en sabanas africanas.
                                                Su altura promedio es de 5 metros aproximadamente los machos y 4 metros las hembras, ambos cuentan con siete vertebras y una lengua de gran tama??o, 40 cent??metros que usan para llegar a las ramas y obtener su alimento.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/monoarana.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Mono Ara??a</h5>
                                            <p class="card-text">Actualmente pertenece a las especies de zool??gico que est??n a punto de extinguirse como resultado de la caza que lleva adelante el hombre.
                                                Por lo general, este animal de zool??gico consume sus alimentos en horas de la ma??ana porque despu??s dedica el d??a a dormir y/o descansar.
                                                En los ??ltimos a??os, sus poblaciones han ido desapareciendo para superar la tala definida y se esconden en arboles de gran tama??o.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/jaguar.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Jaguar</h5>
                                            <p class="card-text">Otra de las especies m??s comunes en los zool??gicos y que por desgracia tambi??n est?? en peligro de extinci??n tras la p??rdida de su h??bitat natural y la caza que emprenden las personas en busca de su piel.
                                                Este felino marca su zona y afianza su liderazgo a trav??s de la orina y se expresa por medio de rugidos y/o maullidos. Generalmente y en su h??bitat natural caza en horas de la noche, captura a sus presas y las traslada hasta un sitio donde las devora. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/oso.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Oso Negro</h5>
                                            <p class="card-text">Aunque es originario del continente americano, espec??ficamente de Norteam??rica, se han repartido muchos de estos animales en los zool??gicos.
                                                Aunque est?? activo todo el d??a realiza sus actividades cotidianas en la noche y su principal caracter??stica es que trata de acumular mucha grasa en su cuerpo para recibir al invierno y asegurarse de no sufrir por el fuerte frio.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/hipopotamo.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Hipop??tamo</h5>
                                            <p class="card-text">Integra a los animales del zool??gico m??s pesados, son hasta 4.500 kilogramos de peso.
                                                Se desplazan por aguas profundas que contemplan pastos cercanos para que este pueda alimentarse.
                                                A diario deben consumir un aproximado de 40 kilogramos de pasto y aunque se desplazan en agua tambi??n pueden correr en tierra, se les conoce como agresivo.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/rino.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Rinoceronte</h5>
                                            <p class="card-text">Es un animal muy solitario y que se molesta r??pidamente. Tiene un potencial en el olfato y en el d??a su visi??n es decadente, por lo tanto, cazan a sus presas ???generalmente- en horas nocturnas.
                                                Es originario de ??frica, sin embargo, desde hace muchos a??os forman parte de los animales de zool??gico.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ??Reptiles!
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card mb-3">
                                        <img src="images/Animales/boa.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Boa Constrictora</h5>
                                            <p class="card-text">Una de las serpientes m??s temidas y grandes de todo el mundo, que a trav??s de sus 4 metros de longitud atraen a los visitantes de los zool??gicos que deciden inclusive hasta fotografiarse con ellas.
                                                Su alimentaci??n se basa en roedores o p??jaros de peque??o tama??o y uno que otro mam??fero, a todos los muerden y luego los asesina al asfixiarlos y posteriormente trag??ndolos.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/cocodrilo.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Cocodrilo</h5>
                                            <p class="card-text">Otro de los seres vivos que no puede faltar en la mayor??a de los zool??gicos.
                                                Se dice que son uno de los animales m??s arcaicos de todos los tiempos, de gran tama??o y buenos nadadores.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ??Aves!
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card mb-3">
                                        <img src="images/Animales/cisne.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Cisne Negro</h5>
                                            <p class="card-text">Uno de los animales de zool??gico con mayor elegancia, por ende, se distinguen de los dem??s. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/emu.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Em??</h5>
                                            <p class="card-text">Son originarias de Australia y aunque son aves no vuelan.
                                                No poseen caracter??sticas muy llamativas para el p??blico, sin embargo, el hecho de carecer de belleza no significa que no sean atractivas y llamativas por su actitud. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/pavo.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Pavo Real</h5>
                                            <p class="card-text">Su cuidado es sencillo y pueden desplazarse por todo el zool??gico sin necesidad de estar en jaulas debido a que no son agresivas con el p??blico.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/guacamaya.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Guacamaya</h5>
                                            <p class="card-text">No solo son unas de las aves m??s bellas del planeta, sino que al tener colores tan llamativos son muy buscadas por los visitantes del zool??gico.
                                                Poseen gran inteligencia y son muy amigables. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/buho.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">B??ho Nival</h5>
                                            <p class="card-text">Originarios de Asia, Europa y algunas partes de Norteam??rica. En los ??ltimos a??os ha sido exhibido en zool??gicos.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/buhoreal.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">B??ho Real</h5>
                                            <p class="card-text">Otra especie de b??ho muy com??n en zool??gicos y sitios de exhibici??n.
                                                Por lo general, cuando est??n en estado salvaje es normal verlos sobrevolando por la pen??nsula espa??ola. Sus grandes y firmes ojos hacen que inesperadamente la persona centre atenci??n en ellos. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ??Otros Animales de Zool??gico!
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card mb-3">
                                        <img src="images/Animales/panda.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Panda Gigante</h5>
                                            <p class="card-text">Existen animales ex??ticos en zool??gicos como el de Chapultepec en Ciudad de M??xico.
                                                Tal es el caso del Panda Gigante, una especia originaria de China pero que se ubica en ese lugar atractivo y son ??nicos de su tipo en Am??rica Latina. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <img src="images/Animales/condor.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">C??ndor de California</h5>
                                            <p class="card-text">Son descrito como uno de los cuatro c??ndores originarios de M??xico.
                                                Actualmente, se encuentran en peligro de extinci??n, sin embargo, la naci??n azteca conserva y protege a??n a estos animales poco comunes y muy llamativos para el p??blico. </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-4">
                <aside>
                    <div class="card">

                        <img src="images/safari.jpg" class="card-img-top" alt="Imagen Safari">
                        <div class="card-body">
                            <h5 class="card-title">Zoo-Safari</h5>
                            <p class="card-text">!Ven! y disfruta de esta experiencia tan increible de sentir la naturaleza a todo color, paseando a lado de todas nuestras especies que se encuentran en un estado mas natural,<br>
                                <strong>!No pierdas la oportunidad!.</strong>
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="row">
                <div class="col">
                    <footer>
                        <div class="row">
                            <div class="col-4">
                                <nav class="menuinferior">
                                   <h3>Enlaces rapidos</h3>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-center"><a href="preguntas.php">Preguntas Frecuentes</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="facturacion.php">Facturaci??n</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="docs/Art8-II-D_Los_reglamentos_federales,_estatales_y_municipales.pdf" target="_blank">Reglamento</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <nav class="menuinferior">
                                    <h3>Contacto</h3>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-center"><a href="tel:4621234567">4621234567</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="mailto:uncorreo@correo.com"> uncorreo@tucorreo.com</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="#">Paseo del Zool??gico No. 600 y Calzada Independencia No.4510. Col. Huentit??n el Alto, C.P. 44390.</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <h3>Redes Sociales</h3>
                                <a id="face" href="https://es-la.facebook.com/" class="redess"><i class="fab fa-facebook"></i></a>
                                <a id="whats" href="https://wa.me/524641005647" class="redess"><i class="fab fa-whatsapp"></i></a>
                                <a id="insta" href="https://www.instagram.com/?hl=es-la"><span class="rainbow-lr"><i class="fab fa-instagram"></i></span></a>
                                <br>
                                <a id="youtube" href="https://www.youtube.com/" class="redess"><i class="fab fa-youtube"></i></a>
                                <a id="tiktok" href="https://www.tiktok.com/es/" class="redess"><i class="fab fa-tiktok"></i></a>
                                <a id="twiter" href="https://twitter.com/?lang=es" class="redess"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div>
                            <a href="admin/login.php">login</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>

</body>

</html>
