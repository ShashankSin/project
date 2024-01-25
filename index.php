<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kieron.TV</title>
	
    <!-- Main style start -->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Main style end -->
    
    <!-- Google font start -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Google font end -->
    
	<!-- jCarousel start -->
	<script type="text/javascript" src="jcarouselassets/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jcarouselassets/jquery.jcarousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jcarouselassets/skin.css" />
    <script type="text/javascript">    
		jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel({
				wrap: 'circular',
				scroll: 1,
			});
		});
	</script>
	<!-- jCarousel end -->
    
    
	<!-- Placeholder start -->
	<script src="placeholderassets/modernizr.js"></script>
    <script>
    $(document).ready(function(){
    
    if(!Modernizr.input.placeholder){
    
        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });
    
    }
    
    });</script>
    <!-- Placeholder end -->
        
    <!--[if lte IE 9]>    
    <link href="css/iecssfix.css" rel="stylesheet" type="text/css">
    <![endif]-->
    

</head>

<body>

	<!-- Menubar Start -->
    <?php include('includes/menubar.php') ?>
    <!-- Menubar End -->

	<!-- Header Start -->
    <div class="header"><div class="centralizer">
    	
    <!-- Headerlinks start -->

    <?php include('includes/header.php') ?>
    <!-- Headerlinks end -->

        
        <!-- Main video start -->
        <div class="main-video">
            <video src="https://www.youtube.com/embed/l6MxdDvk8QY" height="100%" width="100%" controls>Video not found</video>
        </div>
        <!-- Main video end -->
        
        <!-- Main video title start -->
        <div class="main-video-title">
        	<span>The beginning of a NEW ERA in personal development and business success training</span>
            <a href="#" class="btn btn-withicon main-video-share">SHARE</a>
            <a href="#" class="btn btn-withicon main-video-like">LIKE</a>
        </div>
        <!-- Main video title end -->
        
        <!-- Main video carousel start -->
        <div class="main-video-carousel">
            <ul id="mycarousel" class="jcarousel-skin-tango">
                <li>
                    <div class="video-wrapper">
                    <a href="#" class="bg-overlay"><span></span></a>
                    <img src="images/temp/video-thumb1.png" alt="Main video">
                    </div>
                </li>
                <li>
                    <div class="video-wrapper">
                    <a href="#" class="bg-overlay"><span></span></a>
                    <img src="images/temp/video-thumb2.png" alt="Main video">
                    </div>
                </li>
                <li>
                    <div class="video-wrapper">
                    <a href="#" class="bg-overlay"><span></span></a>
                    <img src="images/temp/video-thumb3.png" alt="Main video">
                    </div>
                </li>
            </ul>
        </div>       
        <!-- Main video carousel end --> 
        
        <!-- Today's video head start -->
        <h2 class="blockhead">
        <div><img src="images/icon-blockhead-white.png" width="25" height="25" alt="Today's video"></div>
        TODAY's Video from Kieron's Mind Mastery Course
        <a href="#" class="btn white-btn">MORE</a>
        </h2>
        <!-- Today's video head end -->
        
    </div></div>
    <!-- Header End -->
    
    <!-- Body content start -->
    <div class="centralizer">
    
    <!-- Today's video start -->
    <div class="todays-video">
    
    	<div class="video-wrapper large-video-wrapper">
        
        <a href="#" class="bg-overlay"><span></span></a>
        
        <img src="images/temp/todays-video.png" alt="Today's video">
        
        </div>
        
        <div>
            <h3>
            Mindset Mastery and Money Module 25
            <span>Added by <a href="#">Kieron Sweeney</a> 2 hours ago </span>
            </h3>
            <div>
            	<span>5<strong>VIEWS</strong></span>
            	<span>0<strong>COMMENTS</strong></span>
            	<span>0<strong>LIKES</strong></span>
            </div>
            <p>
            KieronTV.com is where your host, Kieron Sweeney, with his more than a decade of success training experience, conducts Monday - Friday video coaching to personally train you how to become financially free, self-empowered and acquire a mindset of success that few people ever achieve.</p>
<p>You will also find more coaching programs, courses and useful resources here.</p>
<p>Join us and get access now!</p>
        </div>
        
    </div>
    <!-- Today's video end -->
    
    <!-- 2 Column layout start -->
    <div class="main-content">
    
    	<!-- Left column start -->
        <div class="leftcol">
            
			<!-- Week's live coaching start -->                
			<div class="weeks-live-coaching">
                <h2 class="modulehead">
                This Week's Live Coaching Event
                <a href="#" class="btn">MORE</a>
                </h2>                
                
                <div class="video-wrapper medium-video-wrapper">
                <a href="#" class="bg-overlay"><span></span></a>
                <div class="comments-overlay">
                            <span class="views">69</span>
                            <a href="#" class="comments">35<span></span></a>
                            <a href="#" class="likes liked">7<span></span></a>
                            <a href="#" class="like unlike">Unlike<span></span></a>
                </div>
                <div class="video-thumb">
                <img src="images/temp/weeks-live-coaching.png" alt="Weeks live coaching">
                </div>
                </div>
                
                <div>
                <h3>Live coaching 1<span>Added by <a href="#">Kieron Sweeney</a> 1 month ago</span></h3>
                <p>https://new.livestream.com/accounts/2627721/events/1862829</p>
                </div>                
          	</div>
            <!-- Week's live coaching end -->
            
            <!-- Home page highlights start -->
            <div class="home-highlights">
            
            	<div>
                	<h2 class="modulehead">Leadership<br>insights</h2>                    
            
                    <div class="video-wrapper compact">
                    
                        <a href="#" class="bg-overlay"><span></span></a>
                        
                        <div class="comments-overlay">
                            <span class="views">100</span>
                            <a href="#" class="comments">45<span></span></a>
                            <a href="#" class="likes liked">27<span></span></a>
                            <a href="#" class="like unlike">Unlike<span></span></a>
                        </div>
                        
                        <div class="video-thumb"><img src="images/temp/video-thumb1.png" alt="Latest from blog"></div>
                        
                    </div>
                
                    <h3>
                    8 Steps to Authentic Leadership
                    <span>Added by <a href="#">Kieron Sweeney</a> 2 hours ago </span>
                    </h3>
                    
                    <p>
                    Sooner or later every leader realizes that 99% of the people he depends on for success don’t report to him.  Authentic leadership relies on persuasion and persuasion relies on trust. Trust is the most important.
 asset ...
                    <a href="#">View more</a>
                    </p>
                </div>
                
                <div>
                	<h2 class="modulehead">Today's Inspirational<br>News Story</h2>                    
            
                    <div class="video-wrapper compact">
                    
                        <a href="#" class="bg-overlay"><span></span></a>
                        
                        <div class="comments-overlay">
                            <span class="views">34</span>
                            <a href="#" class="comments">2<span></span></a>
                            <a href="#" class="likes liked">57<span></span></a>
                        </div>
                        <div class="video-thumb"><img src="images/temp/video-thumb2.png" alt="Latest from blog"></div>
                    </div>
                    
                    <h3>
                    Riccochet
                    <span>Added by <a href="#">Kieron Sweeney</a> 2 hours ago </span>
                    </h3>
                    <p>Sooner or later every leader realizes that 99% of the people he depends on for success don’t report to him.  Authentic leadership relies on persuasion and persuasion relies on trust. Trust is the.
                    <a href="#">View more</a>
                    </p>
                </div>
                
                <div>
                	<h2 class="modulehead">Kieron's Personal<br>Journeys</h2>                    
            
                    <div class="video-wrapper compact">
                    
                        <a href="#" class="bg-overlay"><span></span></a>
                        
                        <div class="comments-overlay">
                            <span class="views">45</span>
                            <a href="#" class="comments">87<span></span></a>
                            <a href="#" class="likes">27<span></span></a>
                            <a href="#" class="like">Like<span></span></a>
                        </div>
                        <div class="video-thumb"><img src="images/temp/video-thumb3.png" alt="Latest from blog"></div>
                    </div>
                    
                    <h3>
                    My latest special experience
                    <span>Added by <a href="#">Kieron Sweeney</a> 2 hours ago </span>
                    </h3>
                    <p>
                    Sooner or later every leader realizes that 99% of the people he depends on for success don’t report to him.  Authentic leadership relies on persuasion and persuasion relies on trust. Trust is the most.
                    <a href="#">View more</a>
                    </p>
                </div>
            </div>
            <!-- Home page highlights end -->
            
        </div>
        <!-- Left column end -->
        
        <!-- Right column start -->
        <div class="rightcol">
        
            <!-- Newsletter Signup start -->
        	<?php include('includes/newsletter-signup.php') ?>
            <!-- Newsletter Signup end -->
            
            <!-- Watch kieron tv start -->
            <?php include('includes/watch-kierontv.php') ?>
            <!-- Watch kieron tv start -->
            
        </div>
        <!-- Right column end -->
        
    </div>
    <!-- 2 Column layout end -->
    
    </div>
            
            <!-- Latest from blog start -->
            <div><div class="centralizer">
            
                <h2 class="blockhead black-blockhead">
                <div><img src="images/icon-blockhead-white.png" width="25" height="25" alt="Today's video"></div>
                Latest, from the blog
        		<a href="#" class="btn">MORE</a>
                </h2>
            
            </div></div> 
            
            <div class="latest-from-blog"><div class="centralizer"><div>
            
            	
                <div>
                <div class="video-wrapper compact">
                    
                    <a href="#" class="bg-overlay"><span></span></a>
                        
                	<div class="comments-overlay">
                    	<span class="views">34</span>
                    	<a href="#" class="comments">569<span></span></a>
                    	<a href="#" class="likes">26<span></span></a>
                    </div>
           	    	<div class="video-thumb"><img src="images/temp/video-thumb1.png" alt="Latest from blog"></div>
                </div>
                <h4>Riccochet</h4>
                </div>
            
            	<div>
                <div class="video-wrapper compact">
                    
                    <a href="#" class="bg-overlay"><span></span></a>
                    
                	<div class="comments-overlay">
                    	<span class="views">57</span>
                    	<a href="#" class="comments">28<span></span></a>
                    	<a href="#" class="likes">35<span></span></a>
                    </div>
           	    	<div class="video-thumb"><img src="images/temp/video-thumb2.png" alt="Latest from blog"></div>
                </div>
                <h4>Stronger – Cancer patients ...</h4>
                </div>
            
            	<div>
                <div class="video-wrapper compact">
                    
                    <a href="#" class="bg-overlay"><span></span></a>
                    
                	<div class="comments-overlay">
                    	<span class="views">675</span>
                    	<a href="#" class="comments">33<span></span></a>
                    	<a href="#" class="liked">75<span></span></a>
                    </div>
           	    	<div class="video-thumb"><img src="images/temp/video-thumb3.png" alt="Latest from blog"></div>
                </div>
                <h4>Stronger – Cancer patients ...</h4>
                </div>
            
            	<div>
                <div class="video-wrapper compact">
                    
                    <a href="#" class="bg-overlay"><span></span></a>
                    	
                	<div class="comments-overlay">
                    	<span class="views">45</span>
                    	<a href="#" class="comments">12<span></span></a>
                    	<a href="#" class="likes">98<span></span></a>
                    </div>
           	    	<div class="video-thumb"><img src="images/temp/video-thumb1.png" alt="Latest from blog"></div>
                </div>
                <h4>Mindset Mastery Module 3</h4>
                </div>
                
            </div></div></div>                       
            <!-- Latest from blog end -->
            
    <!-- Body content end -->
    
    <!-- Footerlinks Start -->
    <?php include ('includes/footerlinks.php') ?>
    <!-- Footerlinks End -->  
    
	<!-- Footer Start -->
    <?php include ('includes/footer.php') ?>
    <!-- Footer End -->   


</body>
</html>
