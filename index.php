<!DOCTYPE html>

   
<html>
<head>
<title>Neuro Clinic</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/jqslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<div class="container">
      <header id="header">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="header_bottom">
              <div class="header_bottom_left"><a class="logo" href="#"><img src="images/logo.png" alt="Logo" title="Propkon"/></a></div>
               <div class="header_top_right">
                   <form class="navbar-form navbar-left" role="search" method="get" action="list-news.php">
                    <!-- <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <i class="fa fa-search"></i>
                    </div>  -->
                    <div class="input-group add-on">
                      <input class="form-control no-radius" placeholder="Search" name="search" id="srch-term" type="text">
                      <div class="input-group-btn">
                        <button class="btn btn-red no-radius" type="submit"><i class="fa fa-search"></i></button>
                      </div>
                    </div>                   
                  </form>
                </div>
            </div>
          </div>
        </div>
      </header>
  </div>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      <div id="navbar" class="navbar-collapse collapse">
          <div class="container">
            <ul class="nav navbar-nav custom_nav">
                        <?php

$url ='http://newsportal.mjsit.ga/apis/v1/show-category';

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);

curl_close($ch);

$news_category = json_decode($result,true);


?>
                          <li><a href="list-news.php?news=">chutya</a></li>      
              
            <li><a href="#">Delhi NCR</a></li>
              <li><a href="#">Mumbai</a></li>
              <li><a href="#">Banglore</a></li>
              <li><a href="#">Pune</a></li>
                 <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Other Cities</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Chennai</a></li>
                  <li><a href="#">Hydrabad</a></li>
                  <li><a href="#">Kolkata</a></li>
                  <li><a href="#">Archive 3</a></li>
                </ul>
              </li>
            </ul>
          </div> 
        </div>
      </div>
    </nav>
  </div>
	<div class="container">
                <?php

$url ='http://localhost/albuzz/apis/v1/show-news?dc=web&api_key=b6e354dcbe1d746c981998a3e8aac17e&limit=2';


//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);

curl_close($ch);


$news_tops = json_decode($result,true);


?>
            
  
    <div class="grid-view">
          <div class="mtb-15">
             <div class="pull-left small-heading">Category : <?php  if (isset($slug) && !empty($slug)) {
             echo  $slug; } ?></div>
             <div class="pull-right small-heading">View by : <a href="grid-view.html"><i class="fa fa-th-large" aria-hidden="true"></i></a> </div>  
          </div> 
          <div class="clearfix"></div>
          <div class="row">
                <div class="col-sm-9 right_padding">
   
                    
                                       
                    
                    
                    
     
                   <div class="row mtb-15">
                      <div>
                        <div class="list_card">
                           <div class="padding0 col-sm-4"> <img class="card-img-top img-responsive" src="" alt=""></div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    
                            <a href="detail-news.php?slug="> 
                             <h4 class="card-title bottom-margin2">titlt</h4></a>
                             
                            
                                  <div class="card-footer">
                                      
                                      
                                    <small>     uuiuiu
                                   ghgh
                                    </small>
                                  </div>
                                 
                                </div>
                            </div>              
                          </div>
                      </div>
                   </div>


                   <div class="row mtb-15">
                      <div>
                        <div class="list_card">
                           <div class="padding0 col-sm-4"> <img class="card-img-top img-responsive" src="" alt=""></div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    
                            <a href="detail-news.php?slug="> 
                             <h4 class="card-title bottom-margin2">titlt</h4></a>
                             
                            
                                  <div class="card-footer">
                                      
                                      
                                    <small>     uuiuiu
                                   ghgh
                                    </small>
                                  </div>
                                 
                                </div>
                            </div>              
                          </div>
                      </div>
                   </div>
      
                </div>
                <div class="col-sm-3 mtb-15">
                    <div class="left_padding"><img src="https://dummyimage.com/300x250/e0e0e0/000000&text=300x250"/></div>
                </div>
            </div>
      </div>
 



	</div>
  <footer class="footer2">
    <div class="footer">
        <div class="container">
            <div class="row">
                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Browse <span>Categories</span></h3>
                    <ul>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                    </ul>
                </nav>
                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>How <span>to Buy</span></h3>
                    <ul>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                    </ul>
                </nav>
                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Help <span>& Support</span></h3>
                    <ul>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href="#">Lorem Ipsum</a>
                        </li>
                    </ul>
                </nav>

                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Lorem <span>Ipsum</span></h3>
                    <div class="input-group input-group-md">
                      <input type="text" class="form-control" placeholder="Email Address">
                      <span class="input-group-addon btn btn-red">Subscribe</span>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </nav>

            </div> <!--/.row--> 
        </div> <!--/.container--> 
    </div> <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <div class="pull-left"> Copyright © 2017. All right reserved.</div>
        </div>
    </div> <!--/.footer-bottom--> 
</footer>
<script src="assets/js/jquery-3.2.1.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jqcarousel.js"></script> 
<script type="text/javascript">
  $('#s1').multislider({
    duration: 750,
    interval: 3000
  });
  $('#s2').multislider({
    duration: 750,
    interval: 3000
  });
</script>
</body>
</html>