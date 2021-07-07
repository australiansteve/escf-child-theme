<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title("-", true, 'right'); ?><?php bloginfo( 'name' ); ?></title>

<!--favicons-->
<link rel="apple-touch-icon" sizes="180x180" href="http://escf.ca/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://escf.ca/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://escf.ca/favicon-16x16.png">
<link rel="manifest" href="http://escf.ca/manifest.json">
<link rel="mask-icon" href="http://escf.ca/safari-pinned-tab.svg" color="#8cc63f">
<link rel="shortcut icon" href="http://escf.ca/favicon.ico">
<meta name="msapplication-config" content="http://escf.ca/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<!--page description-->
	<meta name="description" content="The Elgin St. Thomas Community Foundation helps people give back to the charities and communities they care about, in a way that is simple, convenient and lasting.">

<!--og tags-->
<meta property="og:type" content="business.business">
<meta property="og:title" content="Elgin St. Thomas Community Foundation">
<meta property="og:url" content="http://www.escf.ca/">
<meta property="og:image" content="http://escf.ca/wp-content/themes/escfTheme/img/main_bg.png">
<meta property="business:contact_data:street_address" content="745 Talbot St">
<meta property="business:contact_data:locality" content="St Thomas">
<meta property="business:contact_data:region" content="Ontario">
<meta property="business:contact_data:postal_code" content="N5P 1E3">
<meta property="business:contact_data:country_name" content="Canada">
<!--twitter card-->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@TerryCa83105408">
<meta name="twitter:title" content="Elgin St. Thomas Community Foundation">
<meta name="twitter:description" content="The Elgin St. Thomas Community Foundation helps people give back to the charities and communities they care about, in a way that is simple, convenient and lasting.">
<meta name="twitter:image" content="http://escf.ca/wp-content/themes/escfTheme/img/main_bg.png">

<!--    If is home page delete the space between wp_title and bloginfo -->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php if (is_front_page()){ ?>



        <div id="fb-root"></div>

        <script>(function(d, s, id) {

                var js, fjs = d.getElementsByTagName(s)[0];

                if (d.getElementById(id)) return;

                js = d.createElement(s); js.id = id;

                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=122693078446079";

                fjs.parentNode.insertBefore(js, fjs);

            }(document, 'script', 'facebook-jssdk'));</script>



    <?php } ?>





    <!--    Site Wrapper   -->

    <div class="site-wrapper container-fluid">

        <h1 class="d-none">Elgin St. Thomas Community Foundation</h1>



        <!--    Header    -->

        <header class="container-fluid">

            <h2 class="d-none">Main Header</h2>

            <div class="header-bg"></div>



            <i class="fa fa-bars d-lg-none menu-btn" aria-hidden="true"></i>





            <div class="main-header container cf">



                <div class="logo">

                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/img/ESTCF_logo.png' ?>" alt="ESCF Logo"></a>

                </div>



                <div class="menu-comp d-none d-lg-block">

                    <div class="topside-menu cf">

                        <ul>

                            <li><a href="<?php echo  home_url(); ?>">Home</a></li>

                            <li><a href="<?php echo get_page_link(7); ?>">About</a></li>

                            <li><a href="<?php echo get_page_link(9); ?>">Contact</a></li>

                        </ul>

                        <form role="search" method="get" action="<?php echo home_url('/'); ?>">

                            <input type="search" name="s" placeholder="Search">

                        </form>



                        <a class="donate-today" target="_blank" href="https://escf.fcsuite.com/erp/donate">DONATE TODAY</a>



                        <a class="fb-icon transition" href="https://www.facebook.com/ElginSt.ThomasCommunityFoundation/" target="_blank"></a>

                    </div>

                    <div class="botside-menu">

                        <ul>
			    <li><a href="<?php echo get_page_link(15); ?>">Advisors</a></li>
			    <li><a href="<?php echo get_page_link(6740); ?>">Comm Funds</a></li>
                            <li><a href="<?php echo get_page_link(22); ?>">Events</a></li>
                            <li><a href="<?php echo get_page_link(11); ?>">Give</a></li>
                            <li><a href="<?php echo get_page_link(13); ?>">Grants</a></li>
 			    <li><a href="<?php echo get_page_link(5981); ?>">Scholarships</a></li>
                            <li style="margin-right: 0;"><a href="<?php echo get_page_link(5993); ?>">Sponsors</a></li>                 
                            <!-- <li><a href="<?php echo get_page_link(147); ?>">Stories</a></li> -->
                            <!--                            <li><a href="--><?php ////echo get_page_link(24); ?><!--">Resources</a></li>-->

                        </ul>

                    </div>

                </div>

            </div>

        </header>





        <!--    Mobile Navigation   -->

        <div class="m-menu-con transition d-lg-none">

            <i class="fa fa-times close-btn" aria-hidden="true"></i>

            <nav class="m-nav transition">

                <h2 class="d-none">Mobile Navigation</h2>

                <ul class="menu-list cf">

                    <li><a href="<?php echo  home_url(); ?>">Home</a></li>

                    <li><a href="<?php echo get_page_link(7); ?>">About</a></li>

                    <li><a href="<?php echo get_page_link(9); ?>">Contact</a></li>

                    <li><a href="<?php echo get_page_link(11); ?>">Give</a></li>

                    <li><a href="<?php echo get_page_link(13); ?>">Grants</a></li>

                    <li><a href="<?php echo get_page_link(15); ?>">Advisors</a></li>

                    <li><a href="<?php echo get_page_link(5993); ?>">Sponsors</a></li>

                    <li><a href="<?php echo get_page_link(22); ?>">Events</a></li>

                    <li><a href="<?php echo get_page_link(147); ?>">Stories</a></li>

                    <li><a href="<?php echo get_page_link(5981); ?>">Scholarships</a></li>

<!--                    <li><a href="--><?php ////echo get_page_link(24); ?><!--">Resources</a></li>-->

                </ul>

                <?php get_search_form(); ?>

                <a class="m-donate transition" target="_blank" href="https://escf.fcsuite.com/erp/donate">DONATE TODAY</a>

            </nav>

        </div>



