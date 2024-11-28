<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " - ";
        }
        bloginfo("name");
        ?></title>

        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-16x16.png"
        />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />
        <link rel="mask-icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/safari-pinned-tab.svg" color="#5bbad5" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name"
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />
        <meta name="msapplication-TileColor" content="#092f57" />
        <meta name="theme-color" content="#092f57" />

        <?php wp_head(); ?>

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css?v=2" />
    </head>
    <body <?php body_class(); ?>>
        <div class="redes-sociales">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="https://www.facebook.com/fundacion.bafar" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://x.com/fundgrupobafar" target="_blank">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/fundaciongrupobafar" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt=""
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a href="<?php echo esc_url(
                                home_url()
                            ); ?>">Inicio</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="<?php echo get_permalink(
                                2
                            ); ?>"
                                >Nosotros</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="<?php echo get_permalink(
                                10
                            ); ?>"
                                >Noticias</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="<?php echo get_permalink(
                                8
                            ); ?>"
                                >Galerías</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-5" href="<?php echo get_permalink(
                                14
                            ); ?>"
                                >Voluntarios</a
                            >
                        </li>
                    </ul>
                </nav>
                <a
                    href="#contacto"
                    class="anchor btn btn-secondary"
                    id="btn-contacto"
                    >Contáctanos</a
                >
                <div id="social">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/fundacion.bafar" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://x.com/fundgrupobafar" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/fundaciongrupobafar" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+526144390100">(614) 439 0100 ext. 7213</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header id="navbar" <?php if (
            is_home()
        ): ?>class="navbar-home"<?php endif; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-3 col-lg-1 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo<?php if (
    is_home()
): ?>-azul<?php endif; ?>@2x.png"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-9 col-lg-11 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url()
                                    ); ?>">Inicio</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo get_permalink(
                                        2
                                    ); ?>">Nosotros</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo get_permalink(
                                        10
                                    ); ?>">Noticias</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo get_permalink(
                                        8
                                    ); ?>">Galerías</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo get_permalink(
                                        12
                                    ); ?>">Videos</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php echo get_permalink(
                                        14
                                    ); ?>">Voluntarios</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#contacto">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
