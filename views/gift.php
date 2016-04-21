<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-RU" lang="ru-RU"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!DOCTYPE html>
<html lang="ru-RU">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>
            GiftRandom.ru - Рандомизатор подарков
        </title><!-- Meta Data -->
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
        <link href="favicon.png" rel="shortcut icon" type="image/png">

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><!-- Styles -->
        <link href="source/css/loader.css" rel="stylesheet" type="text/css">
        <link href="source/css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="source/css/font-awesome.min.css">
        <link href="source/css/style.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="source/css/ie.css" />
        <![endif]-->
        <!-- Javascript -->

        <script src="source/js/jquery.js"></script>
    </head>
    <body>
        <div class="preloader">
            <div class="loading">
                <h2>
                    Загрузка...
                </h2>
                <span class="progress"></span>
            </div>
        </div>

        <div class="wrapper">
            <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                <li class="layer" data-depth="0.00">
                </li>
                <!-- BG -->

                <li class="layer" data-depth="0.10">
                    <div class="background">
                    </div>
                </li>
				
                <!-- Flakes -->

                <li class="layer" data-depth="0.40">
                    <div class="depth-1 flake1">
                        <img alt="flake" src="source/images/flakes/depth1/flakes1.png">
                    </div>

                    <div class="depth-1 flake2">
                        <img alt="flake" src="source/images/flakes/depth1/flakes2.png">
                    </div>

                    <div class="depth-1 flake3">
                        <img alt="flake" src="source/images/flakes/depth1/flakes3.png">
                    </div>

                    <div class="depth-1 flake4">
                        <img alt="flake" src="source/images/flakes/depth1/flakes4.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.60">
                    <div class="depth-3 flake1">
                        <img alt="flake" src="source/images/flakes/depth3/flakes1.png">
                    </div>

                    <div class="depth-3 flake2">
                        <img alt="flake" src="source/images/flakes/depth3/flakes2.png">
                    </div>

                    <div class="depth-3 flake3">
                        <img alt="flake" src="source/images/flakes/depth3/flakes3.png">
                    </div>

                    <div class="depth-3 flake4">
                        <img alt="flake" src="source/images/flakes/depth3/flakes4.png">
                    </div>
                </li>
				
				<li class="layer" >
                    
                </li>
                <!-- Contact -->

                <li class="layer">
				
					<div class="title">
                        <h2>
                            GiftRandom.ru - Рандомизатор подарков
                        </h2>
                        <span class="line"></span>
                    </div>
					
					<div class="hero">
                        <h2 class="gift sub-title">
                            
                        </h2>
						
						<button class="getgift button">Выбрать подарок!</button>
                    </div>
					
                    <div class="contact">
                        <ul class="icons">
                            <li>
                                <a class="behance" target="_blank" href="#"><i class="fa fa-vk"></i></a>
                            </li>
                        </ul>
                        giftrandom.ru &copy 2016 |
                        <a class="mail" href="mailto:mail@giftrandom.ru">mail@giftrandom.ru</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Javascript -->
        <script src="source/js/plugins.js"></script> 
        <script src="source/js/main.js"></script>

    </body>
</html>