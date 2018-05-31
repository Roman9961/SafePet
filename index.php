<?php
$app = require('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--
	Bent - Bootstrap Landing Page Template by Dcrazed
	Site: https://dcrazed.com/bent-app-landing-page-template/
	Free for personal and commercial use under GNU GPL 3.0 license.
-->

<head>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <?php
    if(isset($app['ga'])){
        $script =
            '<script async src="https://www.googletagmanager.com/gtag/js?id='.$app['ga'].'"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag(\'js\', new Date());
            
              gtag(\'config\', \''.$app['ga'].'\');
        </script>';
        echo $script;
    }
    if(isset($app['fbpixel'])){
        $script =
            '<!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,\'script\',
            \'https://connect.facebook.net/en_US/fbevents.js\');
             fbq(\'init\', \''.$app['fbpixel'].'\'); 
            fbq(\'track\', \'PageView\');
            </script>
            <noscript>
             <img height="1" width="1" 
            src="https://www.facebook.com/tr?id='.$app['fbpixel'].'&ev=PageView
            &noscript=1"/>
            </noscript>
<!-- End Facebook Pixel Code -->';
        echo $script;
    }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SafePet - Ошейники с именной биркой</title>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="/node_modules/owl.carousel2/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/node_modules/owl.carousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet">


    <!-- Pixeden Icon Font -->
    <link rel="stylesheet" href="css/Pe-icon-7-stroke.css">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- PrettyPhoto -->
    <link href="css/prettyPhoto.css" rel="stylesheet">

    <link href="node_modules/magnific-popup/dist/magnific-popup.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <!-- PRELOADER -->
    <div class="spn_hol">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

 <!-- END PRELOADER -->

 <!-- =========================
     START ABOUT US SECTION
============================== -->
    <section class="header parallax home-parallax page" id="HOME">
        <h2></h2>
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="height: 100%;">
                        <div class="headerLogo"></div>
                    </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right" >
                            <!-- NAV -->
                            <li><a href="#HOME">Главная</a> </li>
                            <li><a href="#FEATURES">Преимущества</a></li>
                            <li><a href="#SCREENS">Фото продукта</a> </li>
                            <li><a href="#PRICE">Цена и доставка </a> </li>
                            <li><a href="#BUY" onclick="BuyLead()">Купить</a> </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>

            <div class="container home-container">
                <div class="row">
                    <!--<div class="col-md-12">-->
                        <!--<div class="logo text-center">-->
                            <!--<div class="headerLogoBig"></div>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="home_text">
                            <!-- TITLE AND DESC -->
                            <h1>Ошейник с именной биркой</h1>
                            <p>Ваш питомец всегда с вами - ошейник с контактами хозяина.</p>
                            <div class="download-btn">
                                <!-- BUTTON -->
                                <a class="btn home-btn wow fadeInLeft" href="javascript:void(0);" onclick="oneClickOrder(event)">Купить в один клик</a>
                                <a class="tuor btn wow fadeInRight" href="#FEATURES">Узнать больше <i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END HEADER SECTION -->


<!-- =========================
     START FEATURES
============================== -->
    <section id="FEATURES" class="features page">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- FEATURES SECTION TITLE -->
                    <div class="section_title wow fadeIn" data-wow-duration="1s">
                        <h2>Преимущества</h2>
                        <p>Позаботьтесь о своем домашнем животном заранее - Светоотражающий ошейник поможет отыскать и вернуть потерявшегося питомца. На ошейник крепится специальная бирка, где указана кличка животного и телефон хозяина.</p>
                    </div>
                    <!-- END FEATURES SECTION TITLE -->
                </div>
            </div>
        </div>

        <div class="feature_inner">
            <div class="container features-container">
                <div class="row">
                    <div class="col-md-4 right_no_padding wow fadeInLeft grid-container" data-wow-duration="1s">
                        <!-- FEATURE -->

                        <div class="left_single_feature">
                            <div><span class="wanted"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Бирка с информацией о животном<span>/</span></h3>
                            <p>К ошейнику прикрепляется персонализированная бирка с информацией о животном и контакты хозяина.  Изготавливается индивидуально под заказ. Возможны разные варианты цветов бирка/ошейник</p>
                        </div>

                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="left_single_feature">
                            <div><span class="idea"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Светоотражающие элементы<span>/</span></h3>
                            <p>На ошейник наклеена светоотражающая лента - теперь ваше животное не потеряется в темноте. А еще - это отличный способ обозначить своего питомца вечером на дороге. </p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="left_single_feature">
                            <div><span class="measuring"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Подходит для собак и кошек всех пород<span>/</span></h3>
                            <p>Широкий выбор размеров и форм - подойдет  котам и собакам любых пород. Узкие ошейники для котов и собак мелких пород, широкие - для крупных собак</p>
                        </div>
                        <!-- END SINGLE FEATURE -->

                        <!-- FEATURE -->
                        <div class="left_single_feature">
                            <div><span class="no-erase"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Не стирается<span>/</span></h3>
                            <p> Нанесение  на бирку  выполняется типографским способом специальной износоустойчивой краской. </p>
                        </div>
                        <!-- END SINGLE FEATURE -->

                    </div>
                    <div class="col-md-4">
                        <div class="feature_iphone">
                            <!-- FEATURE PHONE IMAGE -->
                            <img class="wow bounceIn" data-wow-duration="1s" src="images/features.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 left_no_padding wow fadeInRight grid-container" data-wow-duration="1s">

                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <div><span class="dog-leads"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Не намокает</h3>
                            <p>Ошейник изготовлен из синтетических волокон, которые не впитывают влагу и быстро высыхают. Такие ошейники не намокают, не деформируются, не впитывают запах. Бирка выполнена из пластика, а краска не боится влаги.</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <div><span class="shield"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Не рвется</h3>
                            <p>Ошейник выполнен из прочного нейлона, а бирка - из пластика. Бирка надежно прикреплена к ошейнику двумя заклепками.</p>
                        </div>
                        <!-- END SINGLE FEATURE -->

                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <div><span class="pawprint"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Привлекательный внешний вид</h3>
                            <p>Оцените на фото</p>
                        </div>
                        <!-- END SINGLE FEATURE -->

                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <div><span class="leash"></span></div>
                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Можно использовать  как дополнительный ошейник к основному</h3>
                            <p>Если у вашего животного уже есть любимый ошейник - не беда. Наш ошейник можно использовать вместе с основным  как  адресницу. </p>
                        </div>
                        <!-- END SINGLE FEATURE -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES SECTION -->



<!-- =========================
     Start APPS SCREEN SECTION
============================== -->
    <section class="apps_screen page" id="SCREENS">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeInBig" data-wow-duration="1s">
                        <!-- APPS SCREEN TITLE -->
                        <div class="section_title">
                            <h2>Фотографии ошейников и бирок</h2>
                        </div>
                        <!-- END APPS SCREEN TITLE -->
                    </div>
                </div>
            </div>

        <div class="screen_slider">
            <div id="demo" class="wow bounceInRight" data-wow-duration="1s">
                <div id="owl-demo" class="owl-carousel">

                    <!-- APPS SCREEN IMAGES -->
                    <div class="item">
                        <a href="images/collar-2.jpg" rel="prettyPhoto[pp_gal]"><img src="images/collar-2.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/collar-3.jpg" rel="prettyPhoto[pp_gal]"><img src="images/collar-3.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/collar-4.jpg" rel="prettyPhoto[pp_gal]"><img src="images/collar-4.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                    <a href="images/foto1.png" rel="prettyPhoto[pp_gal]"><img src="images/foto1.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/foto2.png" rel="prettyPhoto[pp_gal]"><img src="images/foto2.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/foto3.png" rel="prettyPhoto[pp_gal]"><img src="images/foto3.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/foto4.png" rel="prettyPhoto[pp_gal]"><img src="images/foto4.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/bulldog_collar_500p_down.jpg" rel="prettyPhoto[pp_gal]"><img src="images/bulldog_collar_500p_down.jpg" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ENS APPS SCREEN -->

    <!-- =========================
         START DOWNLOAD NOW
    ============================== -->
    <section class="download page" id="PRICE">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- DOWNLOAD NOW SECTION TITLE -->
                    <div class="section_title">
                        <h2>цена и доставка</h2>
                        <p>Цена ошейника с персонализированной биркой - всего лишь 299 гривень.

                        <p>  За эти деньги вы получаете ошейник с биркой, на которой типографским способом будет нанесена информация о животном и контакты хозяина.</p>

                        <p>   Срок поставки - 3 рабочих дня с момента получения
                            предоплаты.</p>

                        <p>   Способы оплаты: оплата на карту Приват

                        </p>
                    </div>
                    <!--END DOWNLOAD NOW SECTION TITLE -->
                </div>
            </div>
        </div>


    </section>
    <!-- END DOWNLOAD -->


<!-- =========================
     START CONTCT FORM AREA
============================== -->
    <section class="contact page" id="BUY">
        <div class="section_overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 wow bounceIn">
                    <!-- Start Contact Section Title-->
                    <div class="section_title">
                        <h2>Купить</h2>
                    </div>
                </div>
            </div>

            <div class="contact_form wow bounceIn">
                <div class="container">

                <!-- START ERROR AND SUCCESS MESSAGE -->
                    <div class="form_error text-center white-popup mfp-hide ">
                        <div class="name_error hide error">Введите Ваше имя</div>
                        <div class="email_error hide error">Введите Email</div>
                        <div class="recaptcha_val_error hide error">Подтвердите, что Вы не робот ;)</div>
                        <div class="email_val_error hide error">Введите корректный Email</div>
                        <div class="pet_name_error hide error">Введите кличку Вашего питомца</div>
                        <div class="phone_error hide error">Введите номер телефона хозяина питомца</div>
                        <div class="phone_error_quick_order hide error">Введите номер телефона</div>
                    </div>
                    <div class="Sucess white-popup mfp-hide"></div>
                <!-- END ERROR AND SUCCESS MESSAGE -->

                <!-- CONTACT FORM starts here, Go to contact.php and add your email ID, thats it.-->    
                    <form role="form" action="contact.php">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="name" placeholder="Имя">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="petName" placeholder="Кличка собаки на бирке">
                                <input type="number" class="form-control" id="phone" placeholder="Номер телефона хозяина на бирке">
                            </div>


                            <div class="col-md-8">
                                <label for="sel1">Размер <sup style="color: gray"><i class="glyphicon glyphicon-question-sign"></i><span><a href="#test-popup" class="open-popup-link" style="text-decoration: none; color: gray;">Как выбрать размер ошейника</a></span></sup></label>
                                <select class="form-control" name="size" id="size">
                                    <option value="XXS">XXS</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                                <label for="sel1">Цвет</label>
                                <select class="form-control" name="color" id="color">
                                    <option value="red">Красный</option>
                                    <option value="yellow">Желтый</option>
                                    <option value="blue">Синий</option>
                                    <option value="green">Зеленый</option>
                                    <option value="orange">Оранжевый</option>
                                </select>
                                <label for="sel1"> Способ оплаты</label>
                                <select class="form-control" name="pay" id="sel1">
                                    <option value="cash">Наличными через терминал Приват</option>
                                </select>

                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="Комментарии к заказу"></textarea>
                               </div>
                            <div class="col-md-12">
                                <div style="padding-bottom: 15px" id="recaptcha1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-default submit-btn form_submit">Купить</button>
                            </div>

                        </div>


                    </form>
                    <!-- END FORM --> 
                </div>
            </div>
        </div>
        <div class="mail-loader mfp-hide">
            <div class="spinner spinner-white">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <div id="test-popup" class="white-popup mfp-hide">
        <table class="table table-inverse" style="color: white; width: 80%; margin: auto">
            <thead>
            <tr class="active" style="color: black">
                <th scope="col">Размер ошейника</th>
                <th scope="col">Обхват шеи (см)</th>
                <th scope="col">Примерный вес (кг)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">XXS</th>
                <td>13-18</td>
                <td>0,9</td>
            </tr>
            <tr>
                <th scope="row">XS</th>
                <td>18-22</td>
                <td>1,5</td>
            </tr>
            <tr>
                <th scope="row">S</th>
                <td>22-24</td>
                <td>2,8</td>
            </tr>
            <tr>
                <th scope="row">M</th>
                <td>24-28</td>
                <td>6</td>
            </tr>
            <tr>
                <th scope="row">XL</th>
                <td>32-35</td>
                <td>10,2</td>
            </tr>
            <tr>
                <th scope="row">XXL</th>
                <td>35-42</td>
                <td>13,5</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div id="one_click_order" class="white-popup mfp-hide" style="padding: 30px">
        <div class="row">
        <div class="col-md-4 col-md-offset-4" style="background-color: white; padding: 15px;">
        <form id="quick_order" role="form" action="contact.php">
            <div class="form-group">
                <input type="number" class="form-control" id="phone_quick" placeholder="Номер телефона" style="height: 76px; font-size: 28px">
                <input type="hidden" class="form-control" id="quick_form" value="quick_order">
            </div>

            <div class="row">
                <div  class="col-md-6" id="recaptcha2">

                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-default submit-btn form_submit" style="height: 76px;">Купить</button>
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
<!-- =========================
     FOOTER 
============================== -->

    <section class="copyright">
        <h2></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy_right_text">
                    <!-- COPYRIGHT TEXT -->
                        <p>Copyright &copy; 2018. All Rights Reserved.</p>
                        <p>A theme by <a href="https://dcrazed.com/">Dcrazed</a></p>
                        <p>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></p>
                    </div>
                     
                </div>

                <div class="col-md-6">
                    <div class="scroll_top">
                        <a href="#HOME"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER -->


<!-- =========================
     SCRIPTS 
============================== -->


    <script src="js/jquery.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/owl.carousel2/dist/owl.carousel.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.ajaxchimp.langs.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="node_modules/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        var onloadCallback = function() {
            mysitekey = '<?php  echo $app['captcha'] ?>';
            grecaptcha.render('recaptcha2', {
                'sitekey' : mysitekey
            });
            grecaptcha.render('recaptcha1', {
                'sitekey' : mysitekey
            });
        };
        var openPopup = function (selector) {
            $.magnificPopup.open({
                items: {
                    src:  selector,
                },
                type:'inline',
                callbacks: {
                    open: function () {
                        $('.mfp-content').addClass('animated bounceIn');
                    }
                }
            });
        };

        function BuyLead() {
            fbq('trackCustom', 'BuyLead');
            gtag('event', 'BuyLead', {'event_category': 'buy'});
        };

        function oneClickOrder(e) {
            e.preventDefault();
            openPopup($("#one_click_order"));
            fbq('trackCustom', 'BuyLead');
            gtag('event', 'BuyLead', {'event_category': 'buy'});
        };
    </script>

</body>
</html>