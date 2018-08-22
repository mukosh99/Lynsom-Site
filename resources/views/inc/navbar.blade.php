<nav class="navbar navbar-expand-md navbar-dark bg-info">
      <a class="navbar-brand" href="#">Lynsom Technologies</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Request::is('/') ? "active" :""}}">
            <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ Request::is('about') ? "active" :""}}">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item {{ Request::is('services') ? "active" :""}}">
            <a class="nav-link" href="services">Services</a>
          </li>
           <li class="nav-item {{ Request::is('contact') ? "active" :""}}">
            <a class="nav-link" href="contact">Contact</a>
          </li>

          
        </ul>

        <div>
        <ul class="navbar-nav mr-auto pull-right">
          <li class="nav-item {{ Request::is('https://twitter.com') ? "active" :""}}">
            <a class="nav-link" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item {{ Request::is('https://facebook.com') ? "active" :""}}">
            <a class="nav-link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
          </li>
          <li class="nav-item {{ Request::is('https://facebook.com') ? "active" :""}}">
            <a class="nav-link" href="https://facebook.com"><i class="fab fa-linkedin"></i></a>
          </li>
           <li class="nav-item {{ Request::is('https://google-plus.com') ? "active" :""}}">
            <a class="nav-link" href="https://google-plus.com"><i class="fab fa-google-plus"></i></a>
          </li>
         </ul>
       </div>
      </div>
    </nav>