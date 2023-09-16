<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Build Your Resume</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      <a class="nav-item nav-link <?='@$myresume'?>" href="#">My Resume</a>
      <a class="nav-item nav-link <?='@$profile'?>" href="#">Profile</a>
      <a class="nav-item nav-link " href="<?=$action->helper->url('action/logout') ?>"> LogOut</a>
    </div>
  </div>
</nav>