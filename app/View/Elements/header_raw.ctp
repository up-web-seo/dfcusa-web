<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/"><img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg" alt="img" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'stories') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://designforchange.us/pages/stories" target="_parent">Stories</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'program') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://designforchange.us/pages/program" target="_parent">Program</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://designforchange.us/pages/get-started" target="_parent">Get Started</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://designforchange.us/pages/about-us" target="_parent">About Us</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'resources') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://designforchange.us/pages/resources" target="_parent">Resources</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'contact') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://designforchange.us/pages/contact-us" target="_parent">Contact</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'blog') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="https://blog.designforchange.us" target="_parent">Blog</a>
          </li>
        </ul>
        <div class="account-menu my-projects-nav hide">
          <a href="https://designforchange.us/dfcusa-pm/projects" class="active web-portal" target="_parent">Web Portal</a>
          <div class="dropdown-content">
            <a href="https://designforchange.us/dfcusa-pm/projects" target="_parent">My Projects</a>
            <a href="https://designforchange.us/dfcusa-pm/activities" target="_parent">Activities</a>
            <!-- <a href="/dfcusa-pm/invite">Invite Team Member</a> -->
            <a href="/dfcusa-pm/logout">Logout</a>
          </div>
        </div>
        <div class="account-menu login-nav hide">
          <a href="https://designforchange.us/dfcusa-pm/login#register" class="active" target="_parent">Sign Up</a>
          <a href="https://designforchange.us/dfcusa-pm/login" target="_parent">Login</a>
        </div>
      </div>
    </nav>  	
  </div>
</header>

<div class="donate-nav">
  <a href="https://designforchange.us/pages/donate" target="_parent">Donate</a>
</div>

<section class="inner-hero just-title" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_workshops.png'); background-size: 100%">
    <!-- <img src="/dfcusa-web/app/webroot/img/img_hedr_stories@2x.png" alt="img" class="img-fluid"> -->
  <div class="container">
    <h4><span>Our Blog</span></h4>
  </div>
</section>