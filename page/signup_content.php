    <form class="form-signin" method='post' action='<?=$action->helper->url('action/signup')?>'>
      <!-- <img class=""  href="/assets/images/folder.png"  alt="g" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Full Name</label>
      <input type="Name" id="text" name="full_name" class="form-control" placeholder="Full Name"  autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      <a href='<?=$action->helper->url('login')?>' class='mt-5 mb-3 text-muted'> Already have an account? </a>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
    </form>
