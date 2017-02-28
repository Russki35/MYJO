<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="{{ config('app.locale') }}"><!--<![endif]-->
<head>
    <title>MyJo - Réseau professionnel de journalistes indépendants</title>
    <!--meta info-->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!--web fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
    <!--lins css-->

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('plugins/owl-carousel/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('plugins/jackbox/css/jackbox.min.css')}}">
    <!--theme css-->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/theme-animate.css')}}">
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/style.css')}}">
    <!--head libs-->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.queryloader2.min.js')}}"></script>
    <script src="{{asset('plugins/modernizr.js')}}"></script>
    <script>
        $('html').addClass('d_none');
        $(document).ready(function(){
            $('html').show();
            $("body").queryLoader2({
                backgroundColor: '#fff',
                barColor : '#35eef6',
                barHeight: 4,
                percentage:true,
                deepSearch:true,
                minimumTime:500
            });
        });
    </script>

    </head>
    <body class="sticky_menu">
    <!--layout-->
    <div class="wide_layout bg_light">
        <!--header markup-->
        <header role="banner" class="relative type_2">
            <!-- <span class="gradient_line"></span> -->
            <!--header bottom part-->
            <section class="header_bottom_part bg_light">
                <div class="container">
                    <div class="d_table w_full d_xs_block">
                        <!--logo-->
                        <div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                            <a href="{{route('home')}}" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                <h3>MyJo</h3>
                            </a>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">


                            @if (Route::has('login'))

                            <div class="relative clearfix t_align_r ">
                                <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
                                        <i class="icon-menu"></i>
                                    </button>
                                    <!--main navigation-->
                                    <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
                                        <ul class="hr_list main_menu fw_light">

                                            @if (Auth::check())
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a href="{{ url('/profile') }}">{{Auth::user()->name}}</a>
                                                </li>

                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="pages_about.html">Compétences
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">Télévision</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">Radio</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">Web et  presse écrite</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li class="container3d relative f_xs_none m_xs_bottom_5">

                                                        <a style="cursor:pointer" class="color_dark fs_large relative r_xs_corners">Profil

                                                        </a>
                                                            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><!-- "/profile" -->
                                                                    <a href="/MYJO/public/profile" class="d_block color_dark relative">Voir mon profil</a>
                                                                </li>
                                                                
                                                                <li>
                                                                    <a href="/MYJO/public/createprofile" class="d_block color_dark relative">Editer mon profil</a>
                                                                </li>
                                                        

                                                            </ul>
                                                        

                                                </li>

                                                <li>
                                                    <a href="{{ url('/logout') }}"
                                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                        Déconnexion
                                                    </a>

                                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>

                                            @else

                                                

                                                


                                                <li class="container3d relative f_xs_none m_xs_bottom_5">

                                                        <a style="cursor:pointer" class="color_dark fs_large relative r_xs_corners" data-toggle="modal" data-target="#inscription">S'inscrire
                                                            <!-- <i class="icon-angle-down d_inline_m"></i> -->
                                                        </a>

                                                </li>

                                                <li class="container3d relative f_xs_none m_xs_bottom_5">

                                                        <a style="cursor:pointer" class="color_dark fs_large relative r_xs_corners" data-toggle="modal" data-target="#connexion" >Se connecter

                                                        </a>
                                                        <!--sub menu-->

                                                </li>

                                                <li id="monlien">

                                                        <a  href="display" class="color_dark fs_large relative r_xs_corners">Parcourir les profils</a>

                                                </li>
                                                <!-- style="cursor:pointer" -->

                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="pages_about.html">Média
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">Télévision</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">Radio</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">Web et  presse écrite</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            @endif
                             @endif


                                        </ul>

                                    </nav>

                                    <!--searchform button-->
                                    <div class="relative d_inline_m search_buttons d_xs_none">
                                        <button class="icon_wrap_size_2 circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-cancel"></i></button>
                                        <button class="icon_wrap_size_2 active circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-search"></i></button>
                                    </div>
                                    <!--searchform-->
                                    <form role="search" class="bg_light animate_ vc_child t_align_r fw_light tr_all trf_xs_none">
                                        <input type="text" name="search" placeholder="Rechercher" class="r_corners d_inline_m">
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>


        @yield('content')



        <footer role="contentinfo" class="bg_light_3 p_top_0 p_bottom_0">
            <!--bottom part-->
            <!--top part-->
            <section class="footer_top_part">

                <hr class="m_bottom_45 divider_type_3 m_xs_bottom_30">
                <div class="container">
                    <div class="row">
                        <!--about us-->
                        <div class="col-lg-4 col-md-4 col-sm-4 fw_light m_bottom_30">
                            <h5 class="color_dark m_bottom_20">A propos</h5>
                            <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Suspendisse sollicitudin velit sed leo</p>
                        </div>
                        <!--subscribe-->
                        <div class="col-lg-5 col-md-5 col-sm-5 m_bottom_50 m_sm_bottom_30">
                            <h5 class="color_dark fw_light m_bottom_23">Contactez-nous</h5>
                            <form id="contactform" class="no_captcha">
                                <ul>
                                    <li class="m_bottom_10">
                                        <input type="text" name="cf_name" placeholder="Votre nom" class="w_full r_corners fw_light bg_light">
                                    </li>
                                    <li class="m_bottom_10">
                                        <input type="email" name="cf_email" placeholder="Votre mail" class="w_full r_corners fw_light bg_light">
                                    </li>
                                    <li class="m_bottom_20">
                                        <textarea class="w_full d_block r_corners fw_light height_3" name="cf_message" placeholder="Message"></textarea>
                                    </li>
                                    <li>
                                        <button class="fs_medium button_type_2 color_purple transparent r_corners tr_all">Envoyer</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!--social buttons-->
                        <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_30 m_xs_bottom_20">
                            <h5 class="color_dark m_bottom_20 fw_light">Restez connectés !</h5>
                            <ul class="hr_list social_icons">
                                <!--tooltip_container class is required-->
                                <li class="m_right_15 m_bottom_15 tooltip_container">
                                    <!--tooltip-->
                                    <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
                                    <a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
                                        <i class="icon-facebook fs_small"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 m_bottom_15 tooltip_container">
                                    <!--tooltip-->
                                    <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
                                    <a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
                                        <i class="icon-twitter fs_small"></i>
                                    </a>
                                </li>




                                <li class="m_right_15 m_bottom_15 tooltip_container">
                                    <!--tooltip-->
                                    <span class="d_block r_corners color_default tooltip fs_small tr_all">Youtube</span>
                                    <a href="#" class="d_block youtube icon_wrap_size_2 circle color_grey_light_2">
                                        <i class="icon-youtube-play fs_small"></i>
                                    </a>
                                </li>
                                <li class="m_right_15 m_bottom_15 tooltip_container">
                                    <!--tooltip-->
                                    <span class="d_block r_corners color_default tooltip fs_small tr_all">Vimeo</span>
                                    <a href="#" class="d_block vimeo icon_wrap_size_2 circle color_grey_light_2">
                                        <i class="icon-vimeo fs_small"></i>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--bottom part-->
            <section class="footer_bottom_part t_align_c color_grey bg_light_4 fw_light">
                <p>&copy; 2017 MyJo.</p>
            </section>
        </footer>
    </div>
    <!--back to top button-->
    <button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
        <i class="icon-angle-up fs_large"></i>
    </button>
    <!--Libs-->

@include('layouts.modal_connexion')

@include('layouts.modal_inscription')

    </div>

    <!--Libs-->
    <script src="{{asset('plugins/jquery.iosslider.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.appear.js')}}"></script>
    <script src="{{asset('plugins/afterresize.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.easytabs.min.js')}}"></script>
    <script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plugins/jackbox/js/jackbox-packed.min.js')}}"></script>
    <script src="{{asset('plugins/twitter/jquery.tweet.min.js')}}"></script>
    <script src="{{asset('plugins/flickr.js')}}"></script>
    <script src="{{asset('plugins/jquery.easing.1.3.js')}}"></script>



    <!--Theme Initializer-->

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/theme.plugins.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('js/user.js')}}"></script>
    <script src="{{asset('js/registerform.js')}}"></script>
    <script>
        $(document).ready(function (){

            $('#monlien').click(function() {
                window.location.replace("display");
            })
        })
    </script>





    </body>
</html>
    </body>
</html>
