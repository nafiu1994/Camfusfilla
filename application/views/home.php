<style type="text/css">
  .top-stories > .col-md-6 > .mask img{
    width: 100%;
    height: 300px;
  }
  @media only screen and (min-width: 768px) {
    .top-stories2{
      height: 200
    }
  }
  .top-stories > .col-md-6 > .mask{
    margin-bottom: 1px;
  }
  .top-stories > .col-md-4 > .mask img{
    width: 100%;
    height: 250px;
  }
  .first-row-outer{
    height: 360px;
  }
</style>
<link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/home-style.css")?>">
<div class="content">
    <link href="<?=base_url("assets/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet" type="text/css">
    <div id="slideshow" class="breaking-news">
      <span class="breaking-news-title">BREAKING NEWS</span>
       <?php
          foreach($breaking_news as $news)
          {
              echo '<div><a href="" title="13 Bought Our Theme">'. $news["title"] .'</a></div>';
          }
       ?>
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
      <div class="row top-stories"> 
      
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-6 col-xs-12">
            <div class="grid mask">
            <a href="article/view/<?=$headlines[0]["article_id"]?>">
            <figure>
              <img class="img-responsive" src="http://localhost/TTCJN/assets/uploads/img/covers/<?=$headlines[0]["cover_pic"]?>" alt="IMAGE">
              <figcaption class="overlay">
                <h6 class="time" ><span class="fa fa-clock-o"></span> 
                <?php 
                  $date0 = getdate(strtotime($headlines[0]["time_published"]));
                  echo $date0["mday"] . ' ' . $date0["month"] . ', ' . $date0["year"];
                ?></h6>
                <h2 class="h-title"><?=$headlines[0]["title"]?></h2>
                <p><?=substr($headlines[0]["body"], 0, 300)?>...</p>
              </figcaption><!-- /figcaption -->
            </figure></a><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->

        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-6 col-xs-12">
            <div class="grid mask">
            <a href="article/view/<?=$headlines[1]["article_id"]?>">
            <figure>
              <img class="img-responsive" src="http://localhost/TTCJN/assets/uploads/img/covers/<?=$headlines[1]["cover_pic"]?>" alt="IMAGE">
              <figcaption class="overlay">
                <h6 class="time" ><span class="fa fa-clock-o"></span> 
                <?php 
                  $date0 = getdate(strtotime($headlines[1]["time_published"]));
                  echo $date0["mday"] . ' ' . $date0["month"] . ', ' . $date0["year"];
                ?></h6>
                <h2 class="h-title"><?=$headlines[1]["title"]?></h2>
                <p><?=substr($headlines[1]["body"], 0, 300)?>...</p>
              </figcaption><!-- /figcaption -->
            </figure></a><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        <!-- PORTFOLIO IMAGE 3 -->
        
      </div><!-- /row -->

        <!-- PORTFOLIO IMAGE 4 -->
      <div class="row top-stories top-stories2"> 
        <div class="col-md-6 col-xs-12">
            <div class="grid mask">
            <a href="article/view/<?=$headlines[2]["article_id"]?>">
            <figure>
              <img class="img-responsive" src="http://localhost/TTCJN/assets/uploads/img/covers/<?=$headlines[2]["cover_pic"]?>" alt="">
              <figcaption class="overlay">
                <h6 class="time"><span class="fa fa-clock-o"></span> 
                  <?php 
                  $date0 = getdate(strtotime($headlines[2]["time_published"]));
                  echo $date0["mday"] . ' ' . $date0["month"] . ', ' . $date0["year"];
                ?>
                </h6>
                <h5 class="title"><?=$headlines[2]["title"]?></h5>
                <p><?=substr($headlines[2]["body"], 0, 200)?>...</p>
              </figcaption><!-- /figcaption -->
            </figure></a><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-6 col-xs-12">
            <div class="grid mask">
            <a href="article/view/<?=$headlines[3]["article_id"]?>">
            <figure>
              <img class="img-responsive" src="http://localhost/TTCJN/assets/uploads/img/covers/<?=$headlines[3]["cover_pic"]?>" alt="">
              <figcaption class="overlay">
                <h6 class="time"><span class="fa fa-clock-o"></span> 
                  <?php 
                  $date0 = getdate(strtotime($headlines[3]["time_published"]));
                  echo $date0["mday"] . ' ' . $date0["month"] . ', ' . $date0["year"];
                ?>
                </h6>
                <h5 class="title"><?=$headlines[3]["title"]?></h5>
                <p><?=substr($headlines[3]["body"], 0, 200)?>...</p>
              </figcaption><!-- /figcaption -->
            </figure></a><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-12 col-xs-12">
            <div class="grid mask">
            <a href="article/view/<?=$headlines[4]["article_id"]?>">
            <figure>
              <img class="img-responsive" src="http://localhost/TTCJN/assets/uploads/img/covers/<?=$headlines[4]["cover_pic"]?>" alt="">
              <figcaption class="overlay">
                <h6 class="time"><span class="fa fa-clock-o"></span> 
                  <?php 
                  $date0 = getdate(strtotime($headlines[4]["time_published"]));
                  echo $date0["mday"] . ' ' . $date0["month"] . ', ' . $date0["year"];
                ?>
                </h6>
                <h5 class="title"><?=$headlines[4]["title"]?></h5>
                <p><?=substr($headlines[4]["body"], 0, 200)?>...</p>
              </figcaption><!-- /figcaption -->
            </figure></a><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
      </div><!-- /row -->
      <br>
<div class="row trends" style="padding: 0px">
  <div class="col-md-8 col-sm-12 first-trend">
  <h4>My News</h4><div class="stripe-line"></div>
    <div class="row outer-trends">
      <div class="col-lg-6 col-xs-6 first-news">
        <img src="<?=base_url("assets/img/005.jpg")?>" alt=" picture" class="thumbnail-pic" >
        <h6 class="post-title" style="font-size: 20px; line-height: 26px;">Title</h6>
        <p>The government promisghes a reform Cras sit amet nibh libero, in gravida nulla. Nulla vel...</p>
        <a class="more-link" href="https://themes.tielabs.com/sahifa/2015/01/30/13000-people-have-bought-our-theme/">Read More »</a>
      </div>
      <div class="col-lg-6">
      <div class="row inner-trends">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a></div>
        <div class="col-xs-8">
          <p class="post-title">The hearing is tomorrow bro</p>
          <h6 class="time" ><span class="fa fa-clock-o"></span> Oct, 2017</h6>
        </div>
      </div>
      <div class="row inner-trends">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/002.jpg")?>" alt=""></a></div>
        <div class="col-xs-8">
          <p class="post-title">The hearing is tomorrow bro</p>
          <h6 class="time" ><span class="fa fa-clock-o"></span> Oct, 2017</h6>
        </div>

      </div>
      <div class="row inner-trends">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/003.jpg")?>" alt=""></a></div>
        <div class="col-xs-8">
          <p class="post-title">The hearing is tomorrow bro</p>
          <h6 class="time" ><span class="fa fa-clock-o"></span> Oct, 2017</h6>
        </div>

      </div>
      <div class="row inner-trends">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/006.jpg")?>" alt=""></a></div>
        <div class="col-xs-8">
          <p class="post-title">The hearing is tomorrow bro</p>
          <h6 class="time" ><span class="fa fa-clock-o"></span> Oct, 2017</h6>
        </div>

      </div>
      </div> 
  </div>
  </div>
  <div class="col-md-4 col-sm-6 mid-col"></div>
    
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-6" style="margin-right: 10px">
    <h4>Fila</h4><div class="stripe-line" sty=""></div>
    <div class="second-trend">
      <div class="row first-row-outer">
        <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
        </div>
        <div class="caption">
          <h6 class="post-title">Imagine Losing 20 Pounds In 14 Days!</h6>
          <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          <p>Don’t act so surprised, Your Highness. You weren’t on any mercy mission this time. Several …</p>
          <a class="more-link" href="">Read More »</a>
        </div>
      </div>
      <div class="row second-inner-trend">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="http://[::1]/campusfila/assets/img/004.jpg" alt=""></a></div>
        <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
      </div>
      <div class="row second-inner-trend">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="http://[::1]/campusfila/assets/img/002.jpg" alt=""></a></div>
        <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
      </div>
      <div class="row second-inner-trend">
        <div class="col-xs-4"><a href=""><img class="img-responsive" src="http://[::1]/campusfila/assets/img/003.jpg" alt=""></a></div>
        <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
      </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <h4>Notice Board</h4><div class="stripe-line"></div>
    <div class="second-trend">
    <div class="row first-row-outer">
      <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
        <img src="http://[::1]/campusfila/assets/img/004.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
      </div>
      <div class="caption">
        <h6 class="post-title">Used Car Dealer Sales Tricks Exposed</h6>
        <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
        <p>Don’t act so surprised, Your Highness. You weren’t on any mercy mission this time. Several …</p>
        <a class="more-link" href="">Read More »</a>
      </div>
    </div>
    <div class="row second-inner-trend">
      <div class="col-xs-4"><a href=""><img class="img-responsive" src="http://[::1]/campusfila/assets/img/004.jpg" alt=""></a></div>
      <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
    </div>
    <div class="row second-inner-trend">
      <div class="col-xs-4"><a href=""><img class="img-responsive" src="http://[::1]/campusfila/assets/img/002.jpg" alt=""></a></div>
      <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
    </div>
    <div class="row second-inner-trend">
      <div class="col-xs-4"><a href=""><img class="img-responsive" src="http://[::1]/campusfila/assets/img/003.jpg" alt=""></a></div>
      <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
    </div>
  </div> 
</div>
</div>
  <div class="row">
    <div class="col-md-4 col-sm-6" style="margin-right: 10px">
    <h4>Business</h4><div class="stripe-line" sty></div>
    <div class="second-trend">
      <div class="row first-row-outer">
        <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
          <img src="http://localhost/TTCJN/assets/uploads/img/covers/<?=$category["business"][0]["cover_pic"]?>" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
        </div>
        <div class="caption">
          <h6 class="post-title"><?=$category["business"][0]["title"]?></h6>
          <h6 class="time" ><span class="fa fa-clock-o"></span> 
            <?php 
                  $date0 = getdate(strtotime($category["business"][0]["time_published"]));
                  echo $date0["mday"] . ' ' . $date0["month"] . ', ' . $date0["year"];
                ?>
          </h6>
          <p><?=substr($category["business"][0]["body"], 0, 80)?>...</p>
          <a class="more-link" href="article/view/<?=$category["business"][0]["article_id"]?>">Read More »</a>
        </div>
      </div>
        <?php
          for ($i = 1; $i <= 3; $i++) 
          {
              echo '<div class="row second-inner-trend">
                      <div class="col-xs-4"><img class="img-responsive" src="http://localhost/TTCJN/assets/uploads/img/covers/'. $category["business"][$i]["cover_pic"] .'" alt="IMAGE"></div>
                      <div class="col-xs-8">
                        <p>'. substr($category["business"][$i]["title"], 0, 20) .'</p>
                        <a class="more-link" href="article/view/'. $category["business"][$i]["article_id"] .'">Read More »</a>
                      </div>

                    </div>';
          }
        ?>
    </div>
    </div>
    <div class="col-md-4 col-sm-6" >
    <h4>Entertainment</h4><div class="stripe-line"></div>
    <div class="second-trend">
    <div class="row first-row-outer">
      <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
        <img src="<?=base_url("assets/img/004.jpg")?>" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
      </div>
      <div class="caption">
        <h6 class="post-title">Used Car Dealer Sales Tricks Exposed</h6>
        <h6 class="time" ><span class="fa fa-clock-o"></span> Oct, 2017</h6>
        <p>Don’t act so surprised, Your Highness. You weren’t on any mercy mission this time. Several …</p>
        <a class="more-link" href="">Read More »</a>
      </div>
    </div>
    <div class="row second-inner-trend">
      <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a></div>
      <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
    </div>
    <div class="row second-inner-trend">
      <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/002.jpg")?>" alt=""></a></div>
      <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
    </div>
    <div class="row second-inner-trend">
      <div class="col-xs-4"><a href=""><img class="img-responsive" src="<?=base_url("assets/img/003.jpg")?>" alt=""></a></div>
      <div class="col-xs-8"><p>The hearing is tomorrow bro</p></div>
    </div>
  </div> 
</div>
</div>
<div class="row trends">
<div class="col-md-8 carousel-block">
<h4>More Stories</h4>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>Business</h4><div class="stripe-line"></div>
      <div class="row">
        <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4 carousel-item-inner">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
          <div class="caption">
            <h6 class="post-title">Imagine Losing 20 Pounds In 14 Days!</h6>
            <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          </div>
        </div> 
        <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4 carousel-item-inner">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
          <div class="caption">
            <h6 class="post-title">Imagine Losing 20 Pounds In 14 Days!</h6>
            <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4 carousel-item-inner">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
          <div class="caption">
            <h6 class="post-title">Imagine Losing 20 Pounds In 14 Days!</h6>
            <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
    <h4>Other News</h4><div class="stripe-line"></div>
      <div class="row">
        <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4 carousel-item-inner">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
          <div class="caption">
            <h6 class="post-title">Imagine Losing 20 Pounds In 14 Days!</h6>
            <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          </div>
        </div> 
        <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4 carousel-item-inner">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
          <div class="caption">
            <h6 class="post-title"><a href="">New! A Stain Remover That Works Like Magic</a></h6>
            <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-md-4 col-sm-4 carousel-item-inner">
          <img src="http://[::1]/campusfila/assets/img/006.jpg" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
          <div class="caption">
            <h6 class="post-title">Imagine Losing 20 Pounds In 14 Days!</h6>
            <h6 class="time"><span class="fa fa-clock-o"></span> Oct, 2017</h6>
          </div>
        </div>
      </div>
    </div>

  </div> 
  </div>
</div>
  
</div>
</div>
</div>