<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- Navigation -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="./">
            <img src="./assets/img/logo.svg" alt="Logo">
        </a>

        <!-- Togglers -->
        <div class="d-flex ms-auto order-lg-1">
            <!-- Top navigation toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar"
                aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-three-dots-vertical"></i>
            </button>

            <!-- Offscreen navigation toggler -->
            <button class="btn shadow-no position-relative center-both text-dark" id="off-toggler" type="button"
                aria-expanded="false" aria-label="Toggle navigation"
                data-tor="click:class.toggle(active, {target: body})">
                <!-- <i class="bi bi-list h4 mb-0 z-index-1 center-both"></i> -->
                <i class="bi bi-arrow-left-short position-absolute d-flex"
                    data-tor="hover(#off-toggler):reveal(left) delay(100ms) quad"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    data-tor-group="path => hover(#off-toggler):scaleX.to(0) originX(0%) quad delay(/+100ms/);">
                    <path fill="currentColor"
                        d="M2.5 4c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z" />
                    <path fill="currentColor"
                        d="M2.5 8c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z" />
                    <path fill="currentColor"
                        d="M2.5 12c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z" />
                </svg>
                <span class="circle circle-md position-absolute bg-opacity-10"
                    data-tor="hover(#off-toggler):[bg(dark) scale.from(0)]"></span>
            </button>
        </div>

        <!-- Navigation -->
        <div class="collapse navbar-collapse small order-lg-0" id="topNavbar">
            <ul class="navbar-nav d-flex w-100 justify-content-evenly px-2 px-lg-7 links-dark">
                <li class="nav-item">
                    <a class="nav-link" href="#">Call me (+977) 9800000000</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">your_email@pro.com</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Download CV
                        <i class="bi bi-file-earmark-arrow-down-fill text-primary"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Let's chat
                        <i class="bi bi-chat-dots-fill text-primary"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- Offscreen backdrop -->
<div id="offscreen-backdrop" class="z-index-master w-h-100 fixed-top bg-black bg-opacity-50"
    data-tor="active(body):[fade.in @pointer-events(none;auto)] click:class.remove(active, {target: body})">
</div>

<!-- Offscreen navigation -->
<nav id="offscreen-nav"
    class="overflow-auto position-fixed z-index-master end-0 bg-white shadow w-80 w-sm-auto p-5 pe-8 h-100"
    data-tor="active(body):pull.left(full)">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
        data-tor="click:class.remove(active, {target: body})" aria-label="Close"></button>
    <ul class="nav flex-column links-dark nav-style-opacity nav-style-hover-primary" data-tor-group="
      .nav-item => active(body):[fade.in pull.left(sm)] delay(/25ms+25ms/) slow;
      .nav-link => hover:push.right(xs) quad;
    ">

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#home">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#services">Services</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#skills">Skills</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#experience">Experience</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#portfolio">Portfolio</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#testimonials">Testimonials</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#work-process">Work Process</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#contact">Contact</a>
        </li>

        <li class="nav-item">
            <a class="nav-link transition-unset" href="#stay-connected">Stay connected</a>
        </li>

        <li class="nav-item">
            <h6 class="text-primary font-sans-serif small text-uppercase opacity-50 mt-5 ms-3">Subpages</h6>
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link transition-unset" href="./light-services.html">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link transition-unset" href="./light-portfolio.html">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link transition-unset" href="./light-contact.html">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link transition-unset" href="./light-404.html">404</a>
                </li>

            </ul>
        </li>
    </ul>
</nav>
