<body>
<style type="text/css">
  body
  {
    background: #FFF url(<?=base_url("assets/img/patterns/body-bg7.png")?>);
  }
</style>
<div id="body" class="center-div">
    <header role="banner" style="background: #FFF">
      <img id="logo-main" src="<?=base_url("assets/img/logo.png")?>" alt="CampusFila">
        <nav id="main-nav" class="navbar navbar-inverse" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=base_url("index.php/home")?>"><span id="nav-title" style="color: #2196F3;font-size: 25px">Campus<span style="color:#4caf50">Fila</span></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Academics</a></li>
                    <li><a href="#">Fila</a></li>
                    <li><a href="#">Notice Board</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fila <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Gossip</a></li>
                    <li><a href="#">Rumor Mail</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Hall Weeks</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertainment <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Shows</a></li>
                    <li><a href="#">Other</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Football</a></li>
                    <li><a href="#">Basketball</a></li>
                    <li><a href="#">Campus Sports</a></li>
                    <li><a href="#">Extreme Sports</a></li>
                    <li><a href="#">Athletics</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Business <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Ecomony</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Stock Exchange</a></li>
                    <li><a href="#">New Business</a></li>
                    <li><a href="#">Banking</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notice Board <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Hall Week</a></li>
                    <li><a href="#">Campus News</a></li>
                    <li><a href="#">Campus Events</a></li>
                  </ul>
                </li>
              </ul>
              <?php
                 $status = false;
                if(isset($_SESSION["authenticated"]))
                {
                  $status = true;
                }
                if($status && ($_SESSION["authenticated"] === "user" || $_SESSION["authenticated"] === "editor" || $_SESSION["authenticated"] === "writer"))
                  {
                    echo '<ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <span style="color: #03a9f4; font-size: x-large">'. $_SESSION["firstname"] .'</span> <b class="caret"></b></a>
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <ul id="login-dp" class="dropdown-menu">
                            <li><a href="'.base_url("index.php/user/profile") . '">Profile</a></li>
                            <li><a href="'.base_url("index.php/user/personalize") . '">Personalise</a></li>
                            <li><a href="'. base_url("index.php/user/logout") . '">Logout</a></li>
                          </ul></li></ul></li></ul>';
                  }
                  else{
                    echo '<ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <ul id="login-dp" class="dropdown-menu">
                            <li>
                               <div class="row">
                                  <div class="col-md-12">
                                    <label>Login</label>
                                     <form class="form" role="form" method="post" action="'.base_url("index.php/login") . '" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                           <input type="text" class="form-control" name="username" id="exampleInputEmail2" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputPassword2">Password</label>
                                           <input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Password" required>
                                                                 <div class="help-block text-right"><a href="'.base_url("index.php/account_recovery") . '">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                           <label>
                                           <input type="checkbox"> keep me logged-in
                                           </label>
                                        </div>
                                     </form>
                                  </div>
                                  <div class="bottom text-center">
                                    <a href="'.base_url("index.php/register") . '"><b>Create an Account</b></a>
                                  </div>
                               </div>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                    <li><a href="'.base_url("index.php/register") . '">Register</a></li>
                    
                    </ul>';
                  }
                
              ?>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
          <script type="text/javascript" src="<?=base_url("assets/js/nav.js")?>"></script>
        </nav>
      </header>