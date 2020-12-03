<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mental Health issues</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
  <link rel="stylesheet" type="text/css" href="../style/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
  <header>
    <div class="header-menu">
      <div class="logo">FreeFly</div>
      <nav>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../p/Blogs1.html">Blogs</a></li>
          <li><a href="../p/suicide.html">Suicide Prevention</a></li>
          <li><a href="../p/stress.html">Stress Meter</a></li>
          <li><a href="../p/faq.php">FAQ</a></li>
          <li><a href="#">Contact</a></li> 
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
</header>
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="userinfo.php" method="post">
          <input type="text" name="user" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
</body>
</html>
