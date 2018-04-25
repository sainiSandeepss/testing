<?php

//echo 'hel in ';
//$url ='http://newsportal.mjsit.ga/apis/v1/show-news?dc=web&api_key=6ddcfcde7eaa7763f13f52f1cccd9b56&news_types=1&limit=3';
$url ='http://localhost/albuzz/apis/v1/show-news?dc=web&api_key=b6e354dcbe1d746c981998a3e8aac17e&country=au&limit=7';
//$url="https://.../api.php?action=getThreads&hash=123fajwersa&node_id=4&order_by=post_date&order=‌​desc&limit=1&grab_content&content_limit=1";
//echo $url;
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
//debug($result);
//die;

//print_r(json_decode($result,true));exit;
// Closing
curl_close($ch);
//$result = file_get_contents($url);

$news = json_decode($result,true);
//print_r($news);
//die;

?>

<?php
foreach ($news['data'] as $new) :

   ?>
      <div class="list row">
           <div class="list-block col-sm-9 ">
                <!-- news list -->
                <div class="list-news-block" itemscope itemtype="http://schema.org/NewsArticle">
                  <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="news-view.html"/>
                  <div class="media">
                    <div class="media-left">
                      <div class="list-img">
                        <img src="<?php  echo $new['images'];  ?>" class="media-object img-responsive" itemprop="image">
                      </div>
                    </div>
                    <div class="media-body">
                      <div class="news-detail">
                              <h3 class="headline" itemprop="headline"><a href="#!"><?php  echo $new['title'];  ?></a></h3>
                              <meta itemprop="publisher" content="Albuzzer">
                              <p class="writer">
                                <span class="category"><?php  echo $new['category'];  ?></span>
                                <span class="writer-name" >Write by <span itemprop="author"><?php  echo $new['author'];  ?></span></span>
                                <span class="day"  itemprop="datePublished" content ="2017-06-14"> Monday May 29.2017</span> 
                                <span>New Delhi</span>
                              </p>
                              <hr class="no-margin">
                              <p class="news-content" itemprop="description">
                                  <?php  echo $new['description'];  ?>
                              </p>
                          </div>
                    </div>
                  </div>
                </div>
<?php endforeach; ?>