
    <form class="form-signin" method='post' action='<?=$action->helper->url('action/login')?>'>
      <!-- <img class=""  href="/assets/images/folder.png"  alt="g" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
      <a href="<?=$action->helper->url('signup')?>" class="my-5"> Creat New Account! </a>
    </form>
    