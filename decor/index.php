
<!doctype html>

<html lang="en-US">
    <head>
		<?php include('../src/sections/head_section.html'); ?>
        <link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/>
        <style type="text/css">
          html {
            background-image: url("../src/img/bg_08.jpg");
                background-color: #FFEFDF;
                background-repeat: no-repeat;
          }

            .portfolio-slides {
                margin: 0 auto;
                width: 600px;
            }

            .decor-img {
              width: 600px;
              height: 400px;
              text-align: center;
            }

            .slick-slide img {
              display: inline-block;
            }

            .caneca {
              width: 49%;
            }

        </style>
    </head>
    <body>
		<?php include('../src/sections/header_section.html'); ?>
        <div class="wrapper">
        	<div class="phrase-of-effect">
                <br/>
                    <p>
                       ARTZEN DECOR
                    </p>
                <br/>
        	</div>
        	<div class="content">
                <div class="content-block">
                <a name="zen"></a> 


            		<h1 class="main-heading size-140">ArtZen Decor</h1>
                <p>ArtZen Decor são peças de decoração criadas com estampas exclusivas.</p>
                <ul>
                  <li>
                    <strong>Jogos americanos com canecas:</strong> O Kit com estampas exclusivas coordenadas, contém:
                    <ul>
                      <li>1 peça de jogo americano, dupla face em tecido córdoba 31x431.</li>
                      <li>1 caneca em porcelana com estampa coordenada. </li>
                      <li>O jogo americano e a caneca podem ser vendidos separadamente.</li>
                    </ul>
                  </li>
                  <li><strong>Cúpulas :</strong> feitas com papéis Indianos com relevo em veludo, podemos fazer sob medida.</li>
                  <li><strong>Almofadas:</strong> feitas com estampas exclusivas e pode ser coordenada com a cúpula, medida ; 40x40 com tecido lavável.</li>
                  <li><strong>Tatoo de parede:</strong> São desenhos exclusivos feitos em residencias ou estabelecimentos comerciais.</li>
                </ul>

                <img class="caneca" src="imgs/jogo1.jpg" alt="">
                <img class="caneca" src="imgs/jogo2.jpg" alt="">
                <img class="caneca" src="imgs/mandala_luz.jpg" alt="">
                <img class="caneca" src="imgs/NY_times.jpg" alt="">
                <img class="caneca" src="imgs/Disco_dance1.jpg" alt="">
                <img class="caneca" src="imgs/Disco_dance2.jpg" alt="">
                <img class="caneca" src="imgs/Dandelion.jpg" alt="">
                <img class="caneca" src="imgs/bike_free.jpg" alt="">
                <img class="caneca" src="imgs/dots.jpg" alt="">
                <img class="caneca" src="imgs/meditation_code.jpg" alt="">
                <img class="caneca" src="imgs/pasaro_Jasmim.jpg" alt="">
                <img class="caneca" src="imgs/India_house.jpg" alt="">
                <img class="caneca" src="imgs/black_tree.jpg" alt="">
                <img class="caneca" src="imgs/button.jpg" alt="">
                <img class="caneca" src="imgs/love_is_beautiful.jpg" alt="">
                <img class="caneca" src="imgs/old_car.jpg" alt="">

                <br />
                <br />
                <br />
                    
                <h1 class="main-heading size-140">+Decor</h1>
                    <br />
                    <br />
                    <br />
                    <div class="portfolio-slides">
                      <div class="decor-img"><img src="garrafa_colorida.jpg" alt="Garrafas Coloridas Arte Zen"/></div>
                      <div class="decor-img"><img src="cupula_acessa.jpg" alt="Cupulas Artisticas Arte Zen"/></div>
                      <div class="decor-img"><img src="cupulas_5.jpg" alt="Cupulas Artisticas Arte Zen"/></div>
                      <div class="decor-img"><img src="almofada_discos.jpg" alt="Almofadas Artisticas Discos Arte Zen"/></div>
                      <div class="decor-img"><img src="almofada_elefantes.jpg" alt="Almofadas Artisticas Elefantes Arte Zen"/></div>
                      <div class="decor-img"><img src="almofada_retro.jpg" alt="Almofadas Artisticas Retro Arte Zen"/></div>
                      <div class="decor-img"><img src="almofada_medieval.jpg" alt="Almofadas Artisticas Medieval Arte Zen"/></div>

                      <div class="decor-img"><img src="buda_e_sofa.jpg" alt="Buda Sofa Zenart Arte Zen"/></div>
                      <div class="decor-img"><img src="porta_com_flor.jpg" alt="Porta Flor Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="buda_e_cama.jpg" alt="Buda Cama Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_1.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_2.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_3.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_4.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_5.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_6.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                      <div class="decor-img"><img src="mandala_parede_7.jpg" alt="Mandala Zenart Arte Zen Drawing"/></div>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script type="text/javascript" src="../src/slick/slick.min.js"></script>

                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.portfolio-slides').slick({
                                dots: true,
                                infinite: true,
                                speed: 500,
                                fade: true,
                                cssEase: 'linear'
                            });
                        });
                    </script>

            	</div>
            </div>
        </div>
		<?php include('../src/sections/footer_section.html'); ?>
    </body>
</html>