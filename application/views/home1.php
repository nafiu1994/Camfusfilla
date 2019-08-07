<style type="text/css">

.col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6 {
    padding-right: 1px;
    padding-left: 1px;
    margin-bottom: 1px;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  color: white;
  text-shadow: 0 1px 3px rgba(0,0,0,0.25);
  padding-left: 20px;
  padding-right: 20px;
  background-color: rgba(0,0,0,0.075);
  overflow: hidden;
  width: 100%;
  height: 50px;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -ms-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .1s ease-in-out;
}
.mask:hover .overlay {
  height: inherit;
  transition: all .s ease-in-out;
}
.h-title{
    margin-bottom: 15px;
    text-shadow: rgba(0,0,0,.6) 0 0 5px;
    font-size: 20px;
    line-height: 26px;
    margin-top: 1px;
    margin-bottom: 10px;
}
.h-sub-title{
    font-size: 10pt;
    opacity: 0.8;
    min-height: 40px;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}
.time{
  margin-bottom: 1px;
}

.thumbnail
{
    background-color: rgba(0,0,0,0.075);
}
.mid-col{
  background: #e8e8e8;
}
@media only screen and (max-width: 767px)
{
    .col-xs-4, .col-xs-6, .col-xs-8, .col-xs-10, .col-xs-12 {
        padding-right: 1px;
        padding-left: 1px;
        margin-bottom: 5px;
        margin-top: 5px
    }
    .caption{
        padding: 5px;
    }
    .row{
        margin-right: 0px;
        margin-left: 0px; 
    }
    
    .container > col-md-6 {
        margin: 10px;
    }
    .container > col-md-4 {
        margin: 10px;
    }
}
@media screen and (max-width: 768px) and (min-width: 426px){
    #main-nav{
        font-size: 8px;

    }
    #nav-title{
        font-size: 13px !important;
    }
}
.thumbnail-pic
{
    width: 100%;
}
/* On small screens, set height to 'auto' for sidenav and grid */
@media only screen and (min-width: 768px) {

    .thumbnail-pic
    {
        width: 100%;
        height: 200px;
    }
    #main-title
    {
        margin: 0px;
        width: auto;
        font-size: 26px;
    }
    .container{
        margin: 0px;
        padding: 0px;
    }
    .row{
      margin-right: 0px;
        margin-left: 0px; 
    }
    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */

}

.container{
    width: 100%;
}
.content{
  padding: 10px;
  background: #FFF;
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

</style>
<div class="content">
    <link href="<?=base_url("assets/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet" type="text/css">
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
          .fadeOut(300)
          .next()
          .fadeIn(300)
          .end()
          .appendTo('#slideshow');
      }, 3600);
    </script>
</div>
      <div class="container">
      <div class="row"> 
      
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-6 col-xs-6">
            <div class="grid mask">
            <figure>
              <a href="article"><img class="img-responsive" src="<?=base_url("assets/img/003.jpg")?>" alt="IMAGE"></a>
              <figcaption class="overlay">
                <h6 class="time" ><span class="fa fa-clock-o"></span> Oct, 2017</h6>
                <h2 class="h-title">ECG apologizes to students</h2>
                <h3 class="h-sub-title">ECG boss has issued a apology to the University of Ghana students who are currently witting their.....</h3>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->

        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-6 col-xs-6">
            <div class="grid mask">
            <figure>
              <a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a>
              <figcaption class="overlay">
                <h6><span class="fa fa-clock-o"></span> Oct, 2017</h6>
                <h5>TEWU On Strike</h5>
                <p>ECG boss has issued a apology to the University of Ghana students who are currently witting their.....</p>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-sm">Read more</a>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        <!-- PORTFOLIO IMAGE 3 -->
        
      </div><!-- /row -->

        <!-- PORTFOLIO IMAGE 4 -->
      <div class="row"> 
        <div class="col-md-4 col-xs-4">
            <div class="grid mask">
            <figure>
              <a href=""><img class="img-responsive" src="<?=base_url("assets/img/006.jpg")?>" alt=""></a>
              <figcaption class="overlay">
                <h6><span class="fa fa-clock-o"></span> Oct, 2017</h6>
                <h5 class="title">ECG apologizes to students</h5>
                <p>ECG boss has issued a apology to the University of Ghana students who are currently witting their.....</p>
                <a data-toggle="modal" href="" class="btn btn-primary btn-sm">Read more</a>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4 col-xs-4">
            <div class="grid mask">
            <figure>
              <a href=""><img class="img-responsive" src="<?=base_url("assets/img/004.jpg")?>" alt=""></a>
              <figcaption class="overlay">
                <h6><span class="fa fa-clock-o"></span> Oct, 2017</h6>
                <h5 class="title">ECG apologizes to students</h5>
                <p>ECG boss has issued a apology to the University of Ghana students who are currently witting their.....</p>
                <a data-toggle="modal" href="" class="btn btn-primary btn-sm">Read more</a>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
        
        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4 col-xs-4">
            <div class="grid mask">
            <figure>
              <a href=""><img class="img-responsive" src="<?=base_url("assets/img/002.jpg")?>" alt=""></a>
              <figcaption class="overlay">
                <h6><span class="fa fa-clock-o"></span> Oct, 2017</h6>
                <h5 class="title">ECG apologizes to students</h5>
                <p>ECG boss has issued a apology to the University of Ghana students who are currently witting their.....</p>
                <a data-toggle="modal" href="" class="btn btn-primary btn-sm">Read more</a>
              </figcaption><!-- /figcaption -->
            </figure><!-- /figure -->
            </div><!-- /grid-mask -->
        </div><!-- /col -->
      </div><!-- /row -->
      <br>
</div>
<div class="row trends" style="padding: 0px">
  <div class="col-md-4 col-sm-6">
  <div class="category"><h4>News</h4></div>
    <div class="row">
      <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
        <img src="<?=base_url("assets/img/crank.jpg")?>" alt=" picture" class="thumbnail-pic" >
      </div>
      <div class="col-xs-6 caption">
        <h6>Title</h6>
        <p>The government promises a reform</p>
      </div>
    </div>
    <h5><u>Other Stories</u></h5>
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
  <div class="col-md-4 col-sm-6 mid-col">
    <div class="category"><h4>Fila</h4></div>
    <div class="row">
      <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
        <img src="<?=base_url("assets/img/004.jpg")?>" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
      </div>
      <div class="col-xs-6 caption">
        <h6>Title</h6>
        <p>The government promises a reform</p>
      </div>
    </div>
    <h5><u>Other Stories</u></h5>
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
  <div class="col-md-4 col-sm-6">
    <div class="category"><h4>Notice Board</h4></div>
    <div class="row">
      <div class="col-lg-12 col-xs-6 col-md-12 col-sm-12">
        <img src="<?=base_url("assets/img/006.jpg")?>" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
      </div>
      <div class="col-xs-6 caption">
        <h6>Title</h6>
        <p>The government promises a reform</p>
      </div>
    </div>
    <h5><u>Other Stories</u></h5>
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
</div> 
<div class="row trends">
  <div class="col-md-4 col-sm-6">
  <div class="category"><h4>Business</h4></div>
    <div class="row">
      <div class="col-lg-12 col-xs-6">
        <img src="<?=base_url("assets/img/crank.jpg")?>" alt=" picture" class="thumbnail-pic" >
      </div>
      <div class="col-xs-6 caption">
        <h6>Title</h6>
        <p>The government promises a reform</p>
      </div>
    </div>
    <h5><u>Other Stories</u></h5>
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
  <div class="col-md-4 col-sm-6 mid-col">
    <div class="category"><h4>Sports</h4></div>
    <div class="row">
      <div class="col-lg-12 col-xs-6 thumbnail">
        <img src="<?=base_url("assets/img/004.jpg")?>" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
      </div>
      <div class="col-xs-6 caption">
        <h6>Title</h6>
        <p>The government promises a reform</p>
      </div>
    </div>
    <h5><u>Other Stories</u></h5>
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
  <div class="col-md-4 col-sm-6">
    <div class="category"><h4>Entertainment</h4></div>
    <div class="row">
      <div class="col-lg-12 col-xs-6 thumbnail">
        <img src="<?=base_url("assets/img/002.jpg")?>" alt="course picture" class="thumbnail-pic" style="vertical-align: middle">
      </div>
      <div class="col-xs-6 caption">
        <h6>Title</h6>
        <p>The government promises a reform</p>
      </div>
    </div>
    <h5><u>Other Stories</u></h5>
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
</div>
</div>