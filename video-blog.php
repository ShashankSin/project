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

<!-- Headerlinks start -->

<?php include('includes/header.php') ?>
<!-- Headerlinks end -->

<!-- Headerlinks end -->

        
        <!-- Main video start -->
        <div class="main-video">
        <img src="images/temp/main-video.png" alt="Video">
        </div>
        <!-- Main video end -->
        
        <!-- Main video title start -->
        <div class="main-video-title">
        	<span>The beginning of a NEW ERA in personal development and business success training</span>
            <a href="#" class="btn btn-withicon main-video-share">SHARE</a>
            <a href="#" class="btn btn-withicon main-video-like">LIKE</a>
        </div>
        <!-- Main video title end -->
        
       
        <div class="seperator"></div>
        
    </div></div>
    <!-- Header End -->
    
    <!-- Body content start -->
    <div class="centralizer">
    
    <!-- Today's video start --><!-- Today's video end -->
    
    <!-- 2 Column layout start -->
    <div class="main-content">
    
    	<!-- Left column start -->
        <div class="leftcol">
        
        	<div class="blog-stats">
            	About this video
            	<span class="btn">VIEWS<strong>5</strong></span>
            	<span class="btn">COMMENTS<strong>10</strong></span>
            	<span class="btn">LIKES<strong>4</strong></span>
            </div>
            
            <div class="blog-categorized">
            Categorized under: <a href="#">Today's Inspirational News Story</a> | 
            Posted by: <a href="#">Kieron Sweeny</a> on 21/11/2012
            </div>
            
          <!--<div class="blog-desc"><p>Copy and paste the code below into your page between the <body> and </body> tags. The buttons will appear wherever you place them. Want to customize? Use our API.</p></div>-->
          
          <div class="static-contents">
          <h1>The beginning of a NEW ERA in personal development and business success training</h1>
          <p>Copy and paste the code below into your page between the <body> and </body> tags. The buttons will appear wherever you place them. Want to customize? Use our API.</p>
          </div>
            
            <div class="blog-comments">
            	<h2 class="modulehead">Comments <span>12</span></h2>
                <div>
                <p>code below into your page between the - by <a href="#">username</a> <small>2 Days ago</small></p>
                </div>
                <div>
                <p>code below into your page between the - by <a href="#">username</a> <small>7 Hours ago</small></p>
                </div>
            </div>
            
            
          <form method="post" action="member-dashboard.php" class="membership-signup">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
                <tr align="left">
                  <td colspan="2">Post your comments</td>
                </tr>
              </thead>
              <tr>
                <td><span class="input-required">*</span>First and Last name:</td>
                <td align="left"><label for="textfield"></label>
                <input type="text" name="textfield" id="textfield" class="placeholder" placeholder="First name">&nbsp;&nbsp;<input type="text" name="textfield2" id="textfield2" class="placeholder" placeholder="Last name"></td>
              </tr>
              <tr>
                <th><span class="input-required">*</span>Your email address:
                <span class="input-info">Your email address will not be published</span>
                </th>
                <th align="left"><input name="textfield3" type="text" id="textfield3" size="30"><div class="error-msg"><span>This&nbsp;field&nbsp;is&nbsp;required.</span></div></th>
              </tr>
              <tr>
                <td>Website:</td>
                <td align="left"><input type="text" name="textfield4" id="textfield4"></td>
              </tr>
              <tr>
                <th><span class="input-required">*</span>Comments:</th>
                <th align="left"><label for="textarea"></label>
                <textarea name="textarea" cols="40" rows="7" id="textarea"></textarea></th>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left"><input type="submit" name="button2" id="button2" value="Post comments" class="btn"></td>
              </tr>
              <tfoot>
              </tfoot>
            </table>
          </form>
            
            <div class="success-msg">
            Your comments has been submitted.
            </div>
        
        
      </div>
        <!-- Left column end -->
        
        <!-- Right column start -->
        <div class="rightcol">
        
            <!-- You may also like start -->
        	<div>
            	<h2 class="modulehead">You may also like</h2>
                
                <div>
                <div class="video-wrapper compact">
                    
                    <a href="#" class="bg-overlay"><span></span></a>
                        
                	<div class="comments-overlay">
                    	<span class="views">34</span>
                    	<a href="#" class="comments">569<span></span></a>
                    	<a href="#" class="liked">26<span></span></a>
                      <a href="#" class="like">Like<span></span></a>
                    </div>
           	    	<div class="video-thumb"><img src="images/temp/video-thumb1.png" alt="Latest from blog"></div>
                </div>
                
                <div class="video-desc">
                	<strong>Mindset Mastery Module 3</strong>
                    Added by <a href="#">Kieron Sweeney</a> 1 month ago
                </div>
                </div>
                
                <div>
                <div class="video-wrapper compact">
                    
                    <a href="#" class="bg-overlay"><span></span></a>
                        
                	<div class="comments-overlay">
                    	<span class="views">34</span>
                    	<a href="#" class="comments">569<span></span></a>
                    	<a href="#" class="likes">26<span></span></a>
                        <a href="#" class="like unlike">Unlike<span></span></a>
                    </div>
           	    	<div class="video-thumb"><img src="images/temp/video-thumb1.png" alt="Latest from blog"></div>
                </div>
                
                <div class="video-desc">
                	<strong>Mindset Mastery Module 3</strong>
                    Added by <a href="#">Kieron Sweeney</a> 1 month ago
                </div>
                </div>
                
            </div>
            
            
            <!-- You may also like end -->
            
      </div>
        <!-- Right column end -->
        
    </div>
    <!-- 2 Column layout end -->
    
    </div>
            
            <!-- Latest from blog start -->
            <div><div class="centralizer">
            
                <h2 class="blockhead black-blockhead">
                <div><img src="images/icon-blockhead-white.png" width="25" height="25" alt="Today's video"></div>
                Recently updated
                <a href="#" class="btn">VIEW ALL</a>
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
                    	<a href="#" class="likes liked">75<span></span></a>
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
