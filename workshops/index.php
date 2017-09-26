
<!doctype html>

<html lang="en-US">
    <head>
		<?php include('../src/sections/head_section.html'); ?>
        <style type="text/css">
        	html {
        		background-image: url("../src/img/bg_07.jpg");
        	}          

            .your-class {
                margin: 0 auto;
                width: 600px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/>
    </head>
    <body>
		<?php include('../src/sections/header_section.html'); ?>
        <div class="wrapper">
        	<div class="phrase-of-effect">
                <br/>
                <p>
                    Satisfação
                    <br/>
                    Alegria
                    <br/>
                    realização
                </p>
                <br/>
        	</div>
        	<div class="content">
                <div class="content-block">                
                    <a name="zen"></a> 
            		<h1 class="main-heading size-130">Workshops</h1>
                    <p>Os workshops de ArtZen podem ser ministrados em espaços variados, de salas fechadas a parques e praças. Todo o material necessário para a atividade é fornecido pela equipe ArtZen.</p>
                    <p>Trabalhamos com workshops de 30 minutos, uma hora ou duas horas, que podem ser realizados para turmas de 5 a 30 pessoas. O Workshop ArtZen é desenvolvido para pessoas a partir de 16 anos, sendo que o ArtKidz é formatado especialmente para crianças de 5 a 15 anos (os pais são encorajados a participar).</p>
            		<p>Entre em <a href="../contact">contato</a> para mais informações.</p>

                    <br />
            	</div>

                    <div class="your-class">
                      <div><img src="../src/img/workshops/1.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/2.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/3.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/4.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/5.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/6.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/7.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/8.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/9.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/10.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                      <div><img src="../src/img/workshops/11.jpg" alt="Zenkidz Zen Kidz Workshops"/></div>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script type="text/javascript" src="../src/slick/slick.min.js"></script>

                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.your-class').slick({
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
		<?php include('../src/sections/footer_section.html'); ?>
    </body>
</html>