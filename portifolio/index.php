
<!doctype html>

<html lang="en-US">
    <head>
		<?php include('../src/sections/head_section.html'); ?>
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
                       criações
                    </p>
                <br/>
        	</div>
        	<div class="content">
                <div class="content-block">
                    <a name="zen"></a> 
            		<h1 class="main-heading size-130">portfólio</h1>
                    <br />
                    <br />
                    <br />
                    <div class="portfolio-slides">
                      <div><img src="../src/img/portifolio/15.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/16.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/14.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/1.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/2.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/3.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/4.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/5.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/6.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/7.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/9.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/10.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <!--
                      <div><img src="../src/img/portifolio/11.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      -->
                      <div><img src="../src/img/portifolio/12.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/13.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/17.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/18.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/19.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/20.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/21.jpg" alt="Zenart Arte Zen Drawing"/></div>
                      <div><img src="../src/img/portifolio/22.jpg" alt="Zenart Arte Zen Drawing"/></div>
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