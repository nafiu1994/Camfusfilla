<style type="text/css">
  @media only screen and (min-width: 768px){
    .content{
      margin: 20px;
      margin-bottom: 100px;
      margin-top: 50px;
    }
  }
  @media only screen and (max-width: 768px){

    .content{
      width: 196px;
      margin: 0px;
      margin-left: 10px;
      margin-bottom: 10px;
      margin-top: 5px;
    }
    }
  }
  .modal-title{
    padding-right: 10px;
    padding-left: 10px;
    width: 60%;
    text-align: center;
  }
</style>
<div class="content">
          <div class="title">
              <h4 class="modal-title" id="myModalLabel">Login to CampusFila.com</h4>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="<?=base_url("index.php/login")?>" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required placeholder="Username">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" required required placeholder="Password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Get Access to the news you deserve</li>
                          <li><span class="fa fa-check text-success"></span> Get news in your campus</li>
                          <li><span class="fa fa-check text-success"></span> Personalise your news</li>
                          <li><span class="fa fa-check text-success"></span> Comment on what you read</li>
                          <li><a href="about.php"><u>Read more</u></a></li>
                      </ul>
                      <p><a href="<?=base_url("index.php/register")?>" class="btn btn-info btn-block">Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
