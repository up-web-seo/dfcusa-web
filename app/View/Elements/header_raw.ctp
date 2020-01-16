<div class="hide-mobile" style="width: 100%; background-color: #4dc310; color: #fff; font-size: 15pt; font-weight: bold; position: relative; text-align: center; padding: 15px">
  Register your projects to be considered for the 2020 Be The Change Conference in São Paulo, Brazil!&nbsp;&nbsp;&nbsp;<a href="/dfcusa-pm/projects#project/new/submit" class="btn btn-primary">Register My Projects</a>
</div>

<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/" target="_parent"><img src="/dfcusa-web/app/webroot/img/img_logo_dfc.svg" alt="img" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item show-only-mobile">
            <a class="nav-link" href="/" target="_parent">Home</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'program') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/program" target="_parent">How It Works</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'get-started') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/get-started" target="_parent">Getting Started</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'stories') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/stories" target="_parent">Real Stories</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://blog.designforchange.us/tag/blog/" target="_parent">What's New</a>
          </li>
          <li class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], 'about-us') > -1) { ?>active<?php } ?>">
            <a class="nav-link" href="/pages/about-us" target="_parent">About Us</a>
          </li>
        </ul>
        <div class="account-menu my-projects-nav hide">
          <a href="/dfcusa-pm/dashboard" class="web-portal" target="_parent">Your Dashboard</a>
          <div class="dropdown-content">
            <a href="/dfcusa-pm/dashboard" target="_parent">Sprints and Projects</a>
            <a href="/dfcusa-pm/activities" target="_parent">Activities</a>
            <a href="/dfcusa-pm/logout" target="_parent">Logout</a>
          </div>
        </div>
        <div class="account-menu login-nav hide">
            <a href="/dfcusa-pm/login#register" target="_parent">Sign Up</a>
            <a href="/dfcusa-pm/login" target="_parent">Login</a>
          </div>
      </div>
    </nav>  	
  </div>
</header>

<section class="inner-hero inside get-started one-line" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png'); background-size: 100%">
  <div class="container">
    <h4 class="one-line" <?php if ($_GET['subline'] != '') {?> style="margin-top: -20px"<?php } ?>><span><?php if ($_GET['title'] == '') { echo 'What\'s new'; } else { echo $_GET['title']; } ?></span></h4>
    <?php if ($_GET['subline'] != '') {?><div class="sub-line"><?php echo $_GET['subline']; ?></div><?php } ?>
  </div>
</section>

