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
                                    <span class="fw-light">¿Cómo podemos</span>
                                    <span
                                        class="fw-bold color-primary comentario"
                                        >ayudarte?</span
                                    >
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
                                        <label for="nombre" class="form-label"
                                            >Nombre*</label
                                        >
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce tu nombre
                                            completo.
                                        </div>
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
                                        <label for="correo" class="form-label"
                                            >Correo*</label
                                        >
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce un correo
                                            electrónico válido.
                                        </div>
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
                                        <label for="telefono" class="form-label"
                                            >Teléfono*</label
                                        >
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce un número de
                                            teléfono válido.
                                        </div>
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
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce tu mensaje.
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-lg btn-block"
                                        >
                                            <i
                                                class="fa-solid fa-paper-plane"
                                            ></i>
                                            Enviar
                                        </button>
                                        <div id="hold-on-a-sec">
                                            <i
                                                id="contact-spinner"
                                                class="fas fa-spinner fa-spin"
                                            ></i>
                                            Espera un momento por favor...
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <small>
                                            Lic. Martha González O.<br>
                                            Dirección Fundación<br>
                                            <a href="mailto:mgonzalez@bafar.com.mx">mgonzalez@bafar.com.mx</a>
                                        </small>
                                    </li>
                                    <li class="list-inline-item">
                                        <small>
                                            Prof. David Contreras Ch.<br>
                                            Escuelas Socio Deportivas<br>
                                            <a href="mailto:dcontreras@bafar.com.mx">dcontreras@bafar.com.mx</a>
                                        </small>
                                    </li>
                                </ul>
                                <address>
                                    Km 7.5 Carretera a Cuauhtémoc, Col. Las Ánimas. C.P. 31450, Chihuahua, Chih. México<br>
                                    Tel. <a href="+526144390100">(614) 439 0100 ext. 7213</a>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/thumb-contacto.png"
                            alt=""
                            class="img-fluid mb-5 mb-lg-0"
                        />
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div
                        class="col-10 offset-1 col-lg-12 offset-lg-0 text-center"
                    >
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo-footer@2x.png"
                                alt=""
                                class="logo img-fluid"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a -->

        <!-- Modal -->
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

        <?php wp_footer(); ?>

        <script
            src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
            crossorigin="anonymous"
            async
        ></script>
        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js?v=5"></script>
    </body>
</html>
