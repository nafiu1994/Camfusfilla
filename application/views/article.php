<link rel="stylesheet" href="<?=base_url("assets/font-awesome/css/font-awesome.min.css")?>">
<style type="text/css">
.content{
  background: white;
  padding: 5px 5px 20px 15px;
}
@media (max-width: 425px){
  .content{
    padding: 5px 5px 5px 5px;
  }
  .right-col{
    padding: 0px;
    margin-top: 10px;
    width: 100%;
  }
  .apology{
    font-size: 2.3em;
    width: 100%;
    padding-left: 10%;
    font-family: cursive;
  }
}
p.post-meta {
    color: rgb(136, 136, 136);
    font-size: 85%;
    margin: 7px 0px;
}
.post-inner, p.post-meta, span {
    margin-right: 15px;
}
p.post-meta, span {
    display: inline-block;
    margin-right: 10px;
}
.social-links a.twitter {
    background: url(<?=base_url("assets/img/social-icons/twitter.png")?>);
}


.social-links a.facebook {
    background: url(<?=base_url("assets/img/social-icons/facebook.png")?>);
}

.social-links a.youtube {
    background: url(<?=base_url("assets/img/social-icons/youtube.png")?>);
}

.social-links a.twitter:hover {
    background: url(<?=base_url("assets/img/social-icons/twitter-gray.png")?>);
}
.social-links a.facebook:hover {
    background: url(<?=base_url("assets/img/social-icons/facebook-gray.png")?>);
}
.social-links a.youtube:hover {
    background: url(<?=base_url("assets/img/social-icons/youtube-gray.png")?>);
}

.post-title {
    font-family: BebasNeueRegular, arial, Georgia, serif;
    margin-bottom: 10px;
    font-size: 28px;
}
.post-inner {
    padding: 20px;
}
body.single, .post-inner, p.post-meta, span, i {
    margin-right: 5px;
}
p.post-meta a {
    color: rgb(136, 136, 136);
}
hr {
    margin-top: 0px;
    margin-bottom: 10px;
  }
  .article{
    box-shadow: rgb(202, 202, 202) 0px 0px 3px;
    border-bottom: 4px solid rgb(248, 140, 0);
  }
  .img-main
  {
    width: 100%;
    margin-top: 15px;
  }
  .panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
    font-size: 13px;
}
.panel.with-nav-tabs .nav-tabs{
  border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
  margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
  background-color: #ddd;
  border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
  color: #555;
  background-color: #fff;
  border-color: #ddd;
  border-bottom-color: transparent;
}
.nav-tabs>li {
    font-size: 0.9em;
  }
  .nav-tabs>li>a {
    margin-right: 0px;
    padding: 10px 10px;
  }
  @media screen and (max-width: 768px) and (min-width: 320px){
    .right-col{
        padding: 0px;
        margin-top: 10px;
        width: 100%;
    }
    .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11 {
      float: left;
    }
    .img-main{
      width: 100%;
    }
    .fr-fic{
      max-width: 250px !important;
    }
    .breaking-news-title{
      width: 100px;
      font-size: 10pt !important;
    }

  }
@media only screen and (max-width: 1024px) and (min-width: 768px){
  .myleft-panel{
    min-height: 250px;
  }
  .right-col{
    width: 41%;
  }
  
}
.col-xs-4, .col-xs-3, .col-xs-8, .col-xs-9 {
    padding-right: 3px;
    padding-left: 5px;
    margin-bottom: 5px;
    font-size: 13px;
}
#slideshow {
  position: relative;
  height: 32px;
  padding: 0px;
  margin-bottom: 20px;
}

#slideshow > div {
  position: absolute;
  top: 10px;
  left: 200px;
}
.breaking-news span.breaking-news-title {
    background: #F43D2A;
    display: block;
    float: left;
    padding: 6px 10px 0;
    height: 32px;
    color: #FFF;
    font-family: BebasNeueRegular,arial,Georgia,serif;
    font-size: 14pt;
  }
  .breaking-news {
    background: #FFF;
    height: 32px;
    margin-top: -10px;
    overflow: hidden;
    position: relative;
    color: #444;
    text-decoration: none;
    box-shadow: 0 0 2px #CACACA;
  }
  .breaking-news > div > a{
    color: #444;
    text-decoration: none;
  }
.news{
  margin-right: 10px;
  margin-bottom: 10px;
  padding-top: 5px;
  padding-left: 5px;
  box-shadow: rgb(202, 202, 202) 0px 0px 2px;
  height: 32px;
  position: relative;
  background: rgb(255, 255, 255);
  overflow: hidden;
}
.fr-fic{
  float:left;
  margin: 10px;
}
</style>
<div class="content">
  <div id="slideshow" class="breaking-news">
      <span class="breaking-news-title">BREAKING NEWS</span>
       <div>
         <a href="" title="13 Bought Our Theme">13,000+ People Have Bought Our Theme</a>
       </div>
       <div>
         <a href="" title="13 Bought Our Theme">Top Search Engine Optimization Strategies!</a>
       </div>
       <div>
         <a href="" title="Used Car Dealer Sales Tricks Exposed">Used Car Dealer Sales Tricks Exposed</a>
       </div>
    <script type="text/javascript">
      $("#slideshow > div:gt(0)").hide();
      setInterval(function() {
        $('#slideshow > div:first')
          .fadeOut(1000)
          .next()
          .fadeIn(1000)
          .end()
          .appendTo('#slideshow');
      }, 3000);
    </script>
</div>
  <div class="container">
        
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8 col-sm-7 article">

                <!-- Blog Post -->


                <!-- Preview Image -->
                <img class="img-responsive img-main" src="<?="http://[::1]/ttcjn/assets/uploads/img/covers/". $cover_pic?>" alt="">
                <!-- Blog title-->
                <h1 class="name post-title entry-title"><span itemprop="name"><?=$title?></span></h1>

                <p class="post-meta">
                <span class="post-meta-author"><i class="fa fa-user"></i><a href="/author/admin/" title="">Fouad Badawy </a></span>
                <span class="tie-date"><i class="fa fa-clock-o"></i><?=$time_published?></span>
                <span class="post-comments"><i class="fa fa-comments"></i><a href="https://themes.tielabs.com/sahifa/2014/10/24/the-secrets-of-rich-and-famous-writers/#respond">Leave a comment</a></span>
                <span class="post-views"><i class="fa fa-eye"></i><?=$views?> Views</span> </p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?=$body?></p>

                <hr>
                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="fa fa-clock-o"></span> Posted on <?=$time_published?></p>

                <hr>
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 col-xs-12 col-sm-5 right-col">
                <div class="links">
                  <h3>Follow Us</h3>
                  <div class="social-links">
                        <a class="facebook" href="#"></a>
                        <a class="twitter" href="#"></a>
                        <a class="youtube" href="#"></a>
                    </div>
                </div>
                <div class="panel with-nav-tabs panel-default myleft-panel">
                  <div class="panel-heading">
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#Popular" data-toggle="tab">Popular</a></li>
                              <li><a href="#Recent" data-toggle="tab">Recent</a></li>
                              <li><a href="#Comments" data-toggle="tab">Comments</a></li>
                              <li><a href="#Tags" data-toggle="tab">Tags</a></li>
                          </ul>
                  </div>
                  <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active container" id="Popular">
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/002.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/003.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/006.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div> 
                        </div>
                        <div class="tab-pane fade container" id="Recent">
                           <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/002.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/003.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/006.jpg")?>" alt=""></a></div>
                            <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
                          </div> 
                        </div>
                        <div class="tab-pane fade container" id="Comments">
                           <div class="row">
                            <div class="col-xs-3"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a></div>
                            <div class="col-xs-9"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/002.jpg")?>" alt=""></a></div>
                            <div class="col-xs-9"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/003.jpg")?>" alt=""></a></div>
                            <div class="col-xs-9"><p>The hearing is tomorrow bro</p></div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/006.jpg")?>" alt=""></a></div>
                            <div class="col-xs-9"><p>The hearing is tomorrow bro</p></div>
                          </div> 
                        </div>
                        <div class="tab-pane fade container" id="Tags">
                            <ul>
                              <li>Entertainment</li>
                              <li>Fila</li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
                

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>News Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="<?=base_url("index.php/news/my_news")?>">My News</a>
                                </li>
                                <li><a href="<?=base_url("index.php/news/Entertainment")?>">Entertainment</a>
                                </li>
                                <li><a href="<?=base_url("index.php/news/Fila")?>">Fila</a>
                                </li>
                                <li><a href="<?=base_url("index.php/news/Sports")?>">Sports</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="<?=base_url("index.php/news/Notice_board")?>">Notice Board</a>
                                </li>
                                <li><a href="<?=base_url("index.php/news/Business")?>">Business</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>

    </div>
  </div>