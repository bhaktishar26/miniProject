<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mental Health issues</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
  <header>
    <div class="header-menu">
      <div class="logo">FreeFly</div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="../p/Blogs1.html">Blogs</a></li>
          <li><a href="../p/stress.html">Stress Meter</a></li>
          <li><a href="../p/suicide.html">Suicide Prevention</a></li>
          <li><a href="../p/faq.php">FAQ</a></li>
          <li><a href="../p/contact.php">Contact</a></li> 
          <li><button class="login"><a href="logout.php">LOGOUT</a></button></li>
        </ul>
      </nav>
      <div class="menu-toggle"><i class=" fa fa-bars" aria-hidden="true"></i></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.menu-toggle').click(function(){
            $('nav').toggleClass('active')
          })
        })
    </script>  

      <div class="content">
      <?php
include('session.php');
$_SESSION['pageStore'] = "sign.php";

if(!isset($_SESSION['login_id'])){
header("location: login.php"); // Redirecting To login
}
echo '<div style="font-size: 25px; color:yellow;text-align:center;margin-bottom:10px;margin-right:350px;">
<strong>WELCOME!</strong>
'.$session_fullName
.'
</div>';
?>
      <b><h1>Affordable private online counselings<br> anytime anywhere.</h1><br><br><br>
      <h2>Talk with licensed,professional therapist online.</h2><br><br>
      <button class="start"><a href="../p/register.php">Get Started</a></button><br><br>
      <h3>FreeFly will match you to one of 100 licensed therapist.<br>Get feedback,advice and guidance from your counselor.</h3></b>
    </div>
    <div class="box">
      <a href="https://www.nytimes.com/2017/07/17/smarter-living/how-to-find-the-right-therapist.html"><img src="//dy7glz37jgl0b.cloudfront.net/start/nytimes.png?v=25" target="_blank" alt=""></a>
      <a href="https://www.wsj.com/articles/all-you-can-text-therapy-services-1413398763"><img src="//dy7glz37jgl0b.cloudfront.net/start/wsj.png?v=25" target="_blank" alt=""></a>
      <a href="https://www.self.com/story/before-you-see-a-therapist-consider-this"><img src="//dy7glz37jgl0b.cloudfront.net/start/self.png?v=25" target="_blank" alt=""></a>
      <a href="https://www.foxnews.com/health/is-online-therapy-right-for-you"><img src="//dy7glz37jgl0b.cloudfront.net/press/fox-news-logo.png?v=25" target="_blank" class="taller-press-logo" alt=""></a>
      <a href="https://www.chicagotribune.com/suburbs/daily-southtown/chi-ugc-article-telemedicine-and-mhealth-driving-cost-saving-2015-09-16-story.html"><img src="//dy7glz37jgl0b.cloudfront.net/start/chicagotribune.png?v=25" target="_blank" alt=""></a>
      <a href="https://www.entrepreneur.com/article/248516"><img src="//dy7glz37jgl0b.cloudfront.net/start/entrepeneur.png?v=25" target="_blank" alt=""></a>
    </div>
    <div class="below">
      <b><h1>Get help from our counselors</h1></b> 
    </div>
  </header>
  <footer>
    <div class="wrapper">
      <div>
        <img src="../Image/Screenshot (227).png" />
        <div class="img-text">
          <h2>Saumya Mukherjee</h2>
        </div>
      </div>
      <div>
        <img src="../Image/Screenshot (229).png" />
        <div class="img-text">
          <h2>Tanisha Chatterjee</h2>
        </div>
      </div>
      <div>
        <img src="../Image/Screenshot (230).png" />
        <div class="img-text">
          <h2>krystal D'souza</h2>
        </div>
      </div>
      <div>
        <img src="../Image/Screenshot (231).png" />
        <div class="img-text">
          <h2>Kiara Peru</h2>
        </div>
      </div>
      <div>
        <img src="../Image/Screenshot (232).png" />
        <div class="img-text">
          <h2>Sonal Mittal</h2>
        </div>
      </div>
      <div>
        <img src="../Image/Screenshot (233).png" />
        <div class="img-text">
          <h2>Riya Bhardwaj</h2>
        </div>
      </div>
    </div>
    <hr width="100%" noshade>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script>
      function mySlick(){
        $(".wrapper").not('slick-initialized').slick({
            centerMode:true,
            autoplay:true,
            dots:true,
            infinite:true,
            slidesToShow:3,
            responsive:[{
              breakpoint:768,
              settings:{
                dots:false,
                arrows:false,
                infinite:false,
                slidesToShow:1,
                slidesToScroll:1
              }
            }]
        });
      }
      mySlick();
    </script>
    <hr width="100%" noshade>
    <section id="sec2">
        <section class="b1">
          <h2>It's professional.</h2>
          <br>
          <p>All counselors are licensed, accredited professionals. BetterHelp allows you to connect with them in a safe and private online environment. Anything you share is confidential.</p>
          <br><br><br>
          <h2>It's affordable.</h2>
          <br>
          <p>Pay a low flat fee for unlimited counseling with your counselor. Counseling doesn't have to be expensive.</p>
        </section>
        <section class="b2">
          <h2>It's Convenient.</h2>
          <br>
          <p>Do it at your own time and at your own pace. Communicate with your therapists as often as you want and whenever you feel it's needed. Help is available at your time and your place.</p>
          <br><br><br>
          <h2>It's effective.</h2>
          <br>
          <p>Thousands have benefited from online therapy (just check out their reviews!) With FreeFly you can switch counselors at any point if you don't feel you are getting enough benefit.</p>
        </section>
    </section>
    <hr width="100%" noshade>
    <section class="table">
      <h1>Join over 1000 people who decided to<br><br><span style="color:green;">get help and get happy.</span></h1><br>
      <button class="start"><a href="../p/register.html">Get Started</a></button><br><br><br>
      <h4>If you are in a crisis or any other person may need help  then Hurry visit the counsellor-  use this site.<br><span style="color:green;">The resources</span> can provide you with immediate help.</h4>
    </section>
    <hr width="100%" noshade>
    <section class="sec3">
      <ul>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      </ul>
    </section>
    <section class="end">
    <ul>
          <li><a href="#">Home</a></li>
          <li><a href="p/suicide.html">Advice</a></li>
          <li><a href="p/faq.php">FAQ</a></li>
          <li><a href="p/blogs1.html">Blog</a></li>
          <li><a href="p/contact.php">Contact</a></li>
      </ul>
    </section>
    <section class="en1">
      <ul>
        <li><a href="#">Terms & Condition</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Web Accessibility</a></li>
        <li><a href="#">&copy;2020 FreeFly</a></li>
      </ul>
    </section>
  </footer>
</body>
</html>
