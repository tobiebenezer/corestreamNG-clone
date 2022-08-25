<header id="site-header" class="fixed-top">
      <section class="w3l-header-4">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <h1>
              <a class="navbar-brand" href="{{route('home')}}"
                ><img
                  src="{{ asset('img/logo.png') }}"
                />
              </a>
            </h1>
            <button
              class="navbar-toggler collapsed"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="fa icon-expand fa-bars"></span>
              <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}"
                    >Home
                  </a>
                </li>
                <li class="nav-item @@about__active">
                  <a class="nav-link" href="{{route('about)}}"
                    >About</a
                  >
                </li>
                <li class="nav-item @@services__active">
                  <a class="nav-link" href="{{route('services')}}"
                    >Services</a
                  >
                </li>
                <li class="nav-item @@project__active">
                  <a class="nav-link" href="{{route('project)}}"
                    >Project</a
                  >
                </li>
                <li class="nav-item @@project__active">
                  <a class="nav-link" href="{{route('softwares')}}"
                    >Software Dev</a
                  >
                </li>
                <li class="nav-item @@project__active">
                  <a class="nav-link" href="{{route('blog.index')}}"
                    >Blog</a
                  >
                </li>
                <li class="nav-item @@surveillance__active">
                  <a
                    class="nav-link"
                    href="{{route(surveilance)}}"
                    >Surveillance</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    href="{{route('contact')}}"
                    class="btn btn-primary d-none d-lg-block btn-style mr-2"
                    >Contact Us</a
                  >
                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2"></ul>

              <!-- //toggle switch for light and dark theme -->
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">
                  <form action="#" method="GET" class="d-sm-flex">
                    <input
                      type="search"
                      placeholder="Search.."
                      name="search"
                      required=""
                      autofocus=""
                    />
                    <button type="submit">Search</button>
                    <a class="close" href="#url">×</a>
                  </form>
                </div>
              </div>
              <!-- /search popup -->
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
              <nav class="navigation">
                <div class="theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="mode-container">
                      <i class="gg-sun"></i>
                      <i class="gg-moon"></i>
                    </div>
                  </label>
                </div>
              </nav>
            </div>
          </nav>
        </div>
      </section>
    </header>