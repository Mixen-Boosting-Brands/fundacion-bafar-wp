<?php
// Custom fields (Contacto)
$contacto = get_field("contacto", "option") ?: [];
$titulo_normal = $contacto["titulo_normal"] ?? "";
$titulo_en_negritas = $contacto["titulo_en_negritas"] ?? "";
$contactos = $contacto["contactos"] ?? [];
$direccion_data = $contacto["direccion"] ?? [];
$direccion_texto = $direccion_data["direccion"] ?? "";
$telefono_visible = $direccion_data["telefono"] ?? "";
// Formatea número para el href
$telefono_numerico = preg_replace("/\D+/", "", $telefono_visible); // elimina paréntesis, espacios, etc.
$telefono_href = "+52" . $telefono_numerico;
$extension = $direccion_data["numero_de_extension"] ?? "";
$imagen_decorativa = $contacto["imagen_decorativa"] ?? "";

// Custom fields (pie)
$pie = get_field("pie", "option") ?: [];
$logotipo_footer = $pie["logotipo"] ?? "";
$enlace_logotipo = $pie["enlace_del_logotipo"] ?? home_url(); // fallback al home
$imagen_fondo_footer = $pie["imagen_de_fondo"] ?? "";
?>

		<!-- section id="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5035.61538524368!2d-106.1211510918162!3d28.582024651338507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea5d0765b419f5%3A0x97c8db700a6c8f85!2sGrupo%20Bafar!5e0!3m2!1ses-419!2smx!4v1721861492320!5m2!1ses-419!2smx"
                width="100%"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </section -->

        <section id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 my-auto">
                        <div class="row mb-4">
                            <div class="col mb-4">
                                <h1>
                                    <span class="fw-light"><?php echo esc_html(
                                        $titulo_normal
                                    ); ?></span>
                                    <span class="fw-bold color-primary comentario"><?php echo esc_html(
                                        $titulo_en_negritas
                                    ); ?></span>
                                </h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                                <div id="form-messages"></div>
                                <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                                <form
                                    action="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/mailer.php"
                                    method="POST"
                                    class="row g-3 needs-validation contact-form mb-4"
                                    id="ajax-contact"
                                    novalidate
                                >
                                    <div class="col-md-12 form-floating">
                                        <input
                                            type="text"
                                            class="form-control shadow-none"
                                            id="nombre"
                                            name="nombre"
                                            placeholder="Nombre*"
                                            pattern=".{5,50}"
                                            required
                                        />
                                        <label for="nombre" class="form-label">Nombre*</label>
                                        <div class="valid-feedback">¡Se ve bien!</div>
                                        <div class="invalid-feedback">Por favor introduce tu nombre completo.</div>
                                    </div>
                                    <div class="col-md-12 form-floating">
                                        <input
                                            type="email"
                                            class="form-control shadow-none"
                                            id="correo"
                                            name="correo"
                                            placeholder="Correo*"
                                            required
                                        />
                                        <label for="correo" class="form-label">Correo*</label>
                                        <div class="valid-feedback">¡Se ve bien!</div>
                                        <div class="invalid-feedback">Por favor introduce un correo electrónico válido.</div>
                                    </div>
                                    <div class="col-md-12 form-floating">
                                        <input
                                            type="tel"
                                            class="form-control shadow-none"
                                            id="telefono"
                                            name="telefono"
                                            placeholder="Teléfono*"
                                            required
                                        />
                                        <label for="telefono" class="form-label">Teléfono*</label>
                                        <div class="valid-feedback">¡Se ve bien!</div>
                                        <div class="invalid-feedback">Por favor introduce un número de teléfono válido.</div>
                                    </div>
                                    <div class="col-md-12 form-floating mb-4">
                                        <textarea
                                            class="form-control shadow-none"
                                            id="mensaje"
                                            name="mensaje"
                                            placeholder="Mensaje*"
                                            style="height: 100px"
                                            required
                                        ></textarea>
                                        <label for="mensaje">Mensaje*</label>
                                        <div class="valid-feedback">¡Se ve bien!</div>
                                        <div class="invalid-feedback">Por favor introduce tu mensaje.</div>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            <i class="fa-solid fa-paper-plane"></i> Enviar
                                        </button>
                                        <div id="hold-on-a-sec">
                                            <i id="contact-spinner" class="fas fa-spinner fa-spin"></i>
                                            Espera un momento por favor...
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <ul class="list-inline">
                                    <?php if (!empty($contactos)): ?>
                                        <?php foreach ($contactos as $c): ?>
                                            <?php
                                            $nombre = $c["nombre"] ?? "";
                                            $puesto = $c["puesto"] ?? "";
                                            $correo = $c["correo"] ?? "";
                                            ?>
                                            <li class="list-inline-item">
                                                <small>
                                                    <?php echo esc_html(
                                                        $nombre
                                                    ); ?><br>
                                                    <?php echo esc_html(
                                                        $puesto
                                                    ); ?><br>
                                                    <?php if ($correo): ?>
                                                        <a href="mailto:<?php echo esc_attr(
                                                            $correo
                                                        ); ?>"><?php echo esc_html(
    $correo
); ?></a>
                                                    <?php endif; ?>
                                                </small>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                                <address>
                                    <?php echo esc_html(
                                        $direccion_texto
                                    ); ?><br>
                                    Tel. <a href="tel:<?php echo esc_attr(
                                        $telefono_href
                                    ); ?>">
                                        <?php echo esc_html(
                                            $telefono_visible
                                        ); ?>
                                        <?php if ($extension): ?>
                                            ext. <?php echo esc_html(
                                                $extension
                                            ); ?>
                                        <?php endif; ?>
                                    </a>
                                </address>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 my-auto">
                        <?php if (!empty($imagen_decorativa)): ?>
                            <img
                                src="<?php echo esc_url($imagen_decorativa); ?>"
                                alt=""
                                class="img-fluid mb-5 mb-lg-0"
                            />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <footer style="<?php if (
            $imagen_fondo_footer
        ): ?>background-image: url('<?php echo esc_url(
    $imagen_fondo_footer
); ?>'); background-size: cover; background-repeat: no-repeat;<?php endif; ?>">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-1 col-lg-12 offset-lg-0 text-center">
                        <a href="<?php echo esc_url($enlace_logotipo); ?>">
                            <?php if ($logotipo_footer): ?>
                                <img
                                    src="<?php echo esc_url(
                                        $logotipo_footer
                                    ); ?>"
                                    alt="Logotipo del pie"
                                    class="logo img-fluid"
                                />
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a -->

        <!-- Modal Imagen -->
        <div class="modal fade" id="modal-image" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="" alt="" class="img-fluid rounded-4" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Imagen -->
        <div class="modal fade" id="modal-video" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src=""
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

        <script
            src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
            crossorigin="anonymous"
            async
        ></script>
        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js?v=2"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7W38P74T14"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-7W38P74T14');
        </script>
    </body>
</html>
