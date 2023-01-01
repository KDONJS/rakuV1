<x-layouts.app>

    <header class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand pe-sm-3" href=""><span class="text-primary flex-shrink-0 me-2">
                    <img src="{{ asset('assets/picture/logo.png') }}" alt="logo de digital Raku" width="50px">
                </span>Raku</a>
            <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                <input class="form-check-input" type="checkbox" id="theme-mode" />
                <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
                <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
            </div>

            <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px">

                    <li class="nav-item">
                        <a class="nav-link" href="">Inicio</a>
                    </li>


                    <li class="nav-item section_services">
                        <a class="nav-link" href="#service">Servicios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Plantillas</a>
                    </li>

                </ul>
            </nav>
        </div>
        <script>
            const links = document.querySelectorAll(".section_services a");

            for (const link of links) {
                link.addEventListener("click", clickHandler);
            }

            function clickHandler(e) {
                e.preventDefault();
                const href = this.getAttribute("href");
                const offsetTop = document.querySelector(href).offsetTop;

                scroll({
                    top: offsetTop,
                    behavior: "smooth"
                });
            }
        </script>
    </header>


    <!-- Hero-->
    <section class="position-relative pt-5">
        <div class="position-absolute top-0 start-0 w-100" style="height: 79%">
            <div class="bg-primary position-absolute top-0 start-0 w-100 h-100"></div>
            <div class="position-absolute start-0 bottom-0 w-100 overflow-hidden mb-n1"
                style="padding-bottom: 6.2%; color: var(--ar-body-bg)">
                <svg class="position-absolute start-0 bottom-0 w-100 h-100" viewBox="0 0 3000 185.4"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor"
                        d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                    </path>
                </svg>
            </div>
        </div>
        <svg class="position-absolute end-0 zindex-2 mt-4 mt-sm-5" width="836" height="755" fill="none"
            stroke="white" stroke-miterlimit="10" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M21.253 754.495c-18.309-66.796-31.642-139.581-6.067-203.929 33.531-84.307 126.54-131.543 216.622-142.348 90.082-10.831 180.803 7.052 271.284 13.945s187.376.931 261.969-50.776C868.476 299.694 902.433 159.981 995.762 75.54 1073.58 5.151 1191.04-18.081 1289.8 17.446M89.774 754.494c-17.324-63.177-29.938-132.049-5.748-192.911 31.722-79.756 119.701-124.438 204.913-134.657 85.239-10.246 171.036 6.68 256.621 13.2s177.263.878 247.812-48.035c97.852-67.835 129.947-199.99 218.248-279.853 73.61-66.584 184.74-88.565 278.15-54.954M158.305 754.496c-16.313-59.585-28.235-124.492-5.402-181.894 29.912-75.206 112.862-117.333 193.231-126.966 80.368-9.661 161.269 6.307 241.983 12.427 80.715 6.148 167.151.825 233.655-45.293 92.264-63.949 122.522-188.574 205.768-263.886 69.4-62.805 174.17-83.509 262.26-51.814M226.834 754.495c-15.328-55.965-26.532-116.96-5.083-170.876 28.103-70.655 106.023-110.228 181.521-119.276 75.499-9.074 151.503 5.908 227.321 11.683s157.011.772 219.497-42.553c86.675-60.09 115.097-177.157 193.31-247.891 65.2-59 163.64-78.453 246.37-48.674M295.359 754.495c-14.344-52.372-24.802-109.429-4.763-159.859 26.266-66.104 99.183-103.122 169.812-111.584 70.628-8.489 141.736 5.535 212.657 10.937s146.899.719 205.366-39.811c81.087-56.205 107.699-165.741 180.859-231.925 60.99-55.193 153.1-73.396 230.48-45.533"
                stroke-opacity=".12"></path>
        </svg>
        <div class="container dark-mode position-relative zindex-5 pt-5 mt-4 mt-lg-5">
            <div class="row justify-content-center text-center pt-md-2 pt-lg-0 pt-xl-2 pb-5 mb-md-2">
                <div class="col-lg-10 col-xl-9 col-xxl-8">

                    <h1 class="display-3 mb-sm-4">
                        ¡El sistema administrativo ideal para tu negocio!
                    </h1>
                    <p class="pb-3 mb-3 mb-lg-4">Con tecnologias lideres en el mercado</p>
                    <a class="btn btn-lg btn-warning" href="">Conocenos</a>
                </div>
            </div>
            <div class="bg-black rounded-4 p-2 mx-auto" style="max-width: 1160px">
                <div class="overflow-hidden" style="border-radius: calc(var(--ar-border-radius) * 1.25)">
                    <img-comparison-slider class="m-n1">
                        <figure slot="first">
                            <img src="{{ asset('assets/img/landing/saas-1/hero/dashboard-dark.jpg') }}"
                                alt="Dashboard Dark Mode" />
                        </figure>
                        <figure slot="second">
                            <img src="{{ asset('assets/img/landing/saas-1/hero/dashboard-light.jpg') }}"
                                alt="Dashboard Light Mode" />
                        </figure>
                        <div slot="handle" style="width: 42px">
                            <svg class="text-primary rounded-circle" width="42" height="42" viewBox="0 0 42 42"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <circle fill="currentColor" cx="21" cy="21" r="21"></circle>
                                </g>
                                <path fill="white"
                                    d="M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z">
                                </path>
                            </svg>
                        </div>
                    </img-comparison-slider>
                </div>
            </div>
        </div>
    </section>

    <section class="container pb-5 pt-lg-3 pt-xl-4 pt-xxl-5 mt-n2 mt-md-0">
        <div
            class="row justify-content-center row-cols-2 row-cols-3 row-cols-md-5 gx-0 gx-sm-3 gx-md-2 gx-lg-3 gx-xl-4">
            <div class="col">
                <div class="py-sm-2 my-xl-1"><img class="d-block d-dark-mode-none mx-auto"
                        src="assets/img/brands/clutch-rating-dark.svg" width="196" alt="Clutch"><img
                        class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/clutch-rating-light.svg"
                        width="196" alt="Clutch"></div>
            </div>
            <div class="col">
                <div class="py-sm-2 my-xl-1"><img class="d-block d-dark-mode-none mx-auto"
                        src="assets/img/brands/deloitte-dark.svg" width="196" alt="Deloitte"><img
                        class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/deloitte-light.svg"
                        width="196" alt="Deloitte"></div>
            </div>
            <div class="col">
                <div class="py-sm-2 my-xl-1"><img class="d-block d-dark-mode-none mx-auto"
                        src="assets/img/brands/vuejs-dark.svg" width="196" alt="Vue.js"><img
                        class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/vuejs-light.svg"
                        width="196" alt="Vue.js"></div>
            </div>
            <div class="col">
                <div class="py-sm-2 my-xl-1"><img class="d-block d-dark-mode-none mx-auto"
                        src="assets/img/brands/awwwards-dark.svg" width="196" alt="Awwwards"><img
                        class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/awwwards-light.svg"
                        width="196" alt="Awwwards"></div>
            </div>
            <div class="col">
                <div class="py-sm-2 my-xl-1"><img class="d-block d-dark-mode-none mx-auto"
                        src="assets/img/brands/clutch-dark.svg" width="196" alt="Clutch"><img
                        class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/clutch-light.svg"
                        width="196" alt="Clutch"></div>
            </div>
        </div>
    </section>

    <!--- mandar una variable al archivo -->
    <section class="container py-5" id="service">
        <h2 class="h1 text-center">Nuestros servicios</h2>
        <p class="text-center pb-4 mb-2 mb-lg-3">Brindamos una amplia gama de servicios de desarrollo</p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

            @foreach ($servicios as $servicio)
                <!-- Item-->
                <div class="col"><a class="card card-hover-primary border-0 h-100 text-decoration-none"
                        href="#">
                        <div class="card-body pb-0">

                            <h3 class="h4 card-title mt-0">{{ $servicio['nombreServicio'] }}</h3>
                            <style>
                                .test_text {
                                    Word-wrap: break-Word;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 3;
                                    -webkit-box-orient: vertical;
                                }
                            </style>
                            <p class="card-text test_text">{{ $servicio['descripcion'] }}</p>
                        </div>
                        <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                            <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                                <i class="{{ $servicio['colorIcon'] }} fs-3"></i>
                            </div>
                        </div>
                    </a></div>
            @endforeach

        </div>
    </section>


    <section class="overflow-hidden pt-2 pt-sm-3 pt-md-4 pt-lg-3 pb-1 pb-sm-3 pb-md-4 pb-lg-5">
        <div class="container position-relative py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="position-absolute aos-init aos-animate" style="margin-left: -12.7%;" data-aos="zoom-in"
                data-aos-duration="500" data-aos-offset="300" data-disable-parallax-down="lg">
                <svg class="text-warning d-none d-lg-block" width="744" height="744" viewBox="0 0 744 744"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="372" cy="372" r="372"></circle>
                </svg>
            </div>
            <div class="d-none d-xxl-block" style="height: 190px;"></div>
            <div class="d-none d-lg-block d-xxl-none" style="height: 150px;"></div>
            <div class="row justify-content-center justify-content-lg-start position-relative zindex-2">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4 text-center text-lg-start aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="850" data-aos-offset="120"
                    data-disable-parallax-down="lg">
                    <div class="ignore-dark-mode d-none d-lg-block">
                        <h2 class="display-5 mb-4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Páginas interiores para todo lo que puedas
                                    necesitar</font>
                            </font>
                        </h2>
                        <p class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Gran colección de plantillas de páginas internas
                                    cuidadosamente diseñadas, desde Cuenta de usuario/Panel hasta páginas especializadas
                                    como 404 y Próximamente.</font>
                            </font>
                        </p>
                    </div>
                    <div class="d-lg-none">
                        <h2 class="display-5 mb-4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Páginas interiores para todo lo que puedas
                                    necesitar</font>
                            </font>
                        </h2>
                        <p class="fs-lg text-dark pb-3 pb-sm-4 mb-lg-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Gran colección de plantillas de páginas internas
                                    cuidadosamente diseñadas, desde Cuenta de usuario/Panel hasta páginas especializadas
                                    como 404 y Próximamente.</font>
                            </font>
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-block" style="margin-top: -240px;"></div>
            <div class="d-none d-lg-block d-xl-none" style="margin-top: -160px;"></div>
            <div class="d-flex position-relative zindex-2 mb-3">
                <div class="flex-xxl-shrink-0 position-relative zindex-2 aos-init aos-animate"
                    style="max-width: 540px; margin-top: 26%; margin-right: -9.6%;" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="400" data-disable-parallax-down="lg"><img
                        class="rounded-3 mt-n5 mt-lg-0 d-block d-dark-mode-none"
                        src="assets/img/landing/intro/pages/01-light.jpg" alt="Página"
                        style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"><img
                        class="border rounded-3 mt-n5 mt-lg-0 d-none d-dark-mode-block"
                        src="assets/img/landing/intro/pages/01-dark.jpg" alt="Página"
                        style="box-shadow: 1.875rem .625rem 5rem rgba(0,0,0, .2);"></div>
                <div class="flex-xxl-shrink-0 position-relative zindex-1 aos-init aos-animate"
                    style="max-width: 481px; margin-top: 17.6%; margin-right: -8.5%;" data-aos="fade-up"
                    data-aos-duration="500" data-aos-delay="200" data-disable-parallax-down="lg"><img
                        class="rounded-3 mt-n5 mt-lg-0 d-block d-dark-mode-none"
                        src="assets/img/landing/intro/pages/02-light.jpg" alt="Página"
                        style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"><img
                        class="border rounded-3 mt-n5 mt-lg-0 d-none d-dark-mode-block"
                        src="assets/img/landing/intro/pages/02-dark.jpg" alt="Página"
                        style="box-shadow: 1.875rem .625rem 5rem rgba(0,0,0, .2);"></div>
                <div class="flex-xxl-shrink-0 aos-init aos-animate" style="max-width: 510px;" data-aos="fade-up"
                    data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="lg"><img
                        class="rounded-3 d-block d-dark-mode-none" src="assets/img/landing/intro/pages/03-light.jpg"
                        alt="Página" style="box-shadow: 1.875rem .625rem 5rem rgba(65,81,98, .2);"><img
                        class="border rounded-3 d-none d-dark-mode-block"
                        src="assets/img/landing/intro/pages/03-dark.jpg" alt="Página"
                        style="box-shadow: 1.875rem .625rem 5rem rgba(0,0,0, .2);"></div>
            </div>
        </div>
    </section>


    <section class="container overflow-hidden py-5 my-md-3 my-lg-2 my-xl-4 my-xxl-5">
        <div class="row align-items-center my-2 py-2 py-sm-4 py-lg-5 my-xxl-2">

            <div class="col-md-7 col-lg-6 offset-lg-1">
                <div class="position-relative mx-auto" style="max-width: 510px;">
                    <img class="d-block d-dark-mode-none" src="{{ asset('assets/picture/icons/circle-gray-1.png') }}"
                        style="animation: rotate-cw 100s linear infinite;" alt="Circle"><img
                        class="d-none d-dark-mode-block" src="{{ asset('assets/picture/icons/circle-light-1.png') }}"
                        style="animation: rotate-cw 100s linear infinite;" alt="Circulo"><img
                        class="d-block d-dark-mode-none position-absolute top-0 start-0"
                        src="{{ asset('assets/picture/icons/circle-gray-2.png') }}"
                        style="animation: rotate-ccw 50s linear infinite;" alt="Circle"><img
                        class="d-none d-dark-mode-block position-absolute top-0 start-0"
                        src="{{ asset('assets/picture/icons/circle-light-2.png') }}"
                        style="animation: rotate-ccw 50s linear infinite;" alt="Circulo"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-1.png') }}" data-aos="fade"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="1200" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-2.png') }}" data-aos="fade"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="450" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-3.png') }}" data-aos="fade"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="600" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-4.png') }}" data-aos="fade"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="750" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-5.png') }}" data-aos="fade"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="900" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-6.png') }}" data-aos="fade"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="1050" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-7.png') }}" data-aos="zoom-in"
                        data-aos-duration="600" data-aos-offset="250" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONON-8.png') }}" data-aos="zoom-in"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="150" alt="Icono"><img
                        class="position-absolute top-0 start-0 zindex-2 aos-init aos-animate"
                        src="{{ asset('assets/picture/icons/ICONO-9.png') }}" data-aos="zoom-in"
                        data-aos-duration="600" data-aos-offset="250" data-aos-delay="300" alt="Icono">
                </div>
            </div>

            <div class="col-md-5 text-center text-md-start pe-md-5 pe-lg-0 pe-xxl-4 ps-xl-5 mb-5 mb-md-0">
                <h2 class="h1 pb-3 pb-xl-2 mb-lg-4 mb-xl-5">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Únase a Around con sus herramientas favoritas que usa a
                            diario y mantenga las cosas en orden</font>
                    </font>
                </h2><a class="btn btn-outline-primary rounded-pill" href="#">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Ver todas las integraciones</font>
                    </font>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
