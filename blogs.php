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
    
	<!-- Custom Select Start -->
    <script type="text/javascript" src="jcarouselassets/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="customselectassets/expandselect.js"></script>
	<!-- Custom Select End -->
    
    
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
    
	<!-- Custom Select Start -->
    <link href="customselectassets/custom-select.css" rel="stylesheet" type="text/css">
	<!-- Custom Select End -->
        
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

        
        <!-- Main video start --><!-- Main video end -->
        
        <!-- Main video title start --><!-- Main video title end -->
        
        <!-- Main video carousel start --><!-- Main video carousel end --> 
        
        <!-- Today's video head start --><!-- Today's video head end -->
        
    </div></div>
    <!-- Header End -->
    
    <!-- Body content start -->
    <div class="centralizer">
    
    <!-- Today's video start --><!-- Today's video end -->
    
    <!-- 2 Column layout start -->
    <div class="main-content">
    
    	<!-- Left column start -->
        <div class="leftcol">
            
			<!-- blog start -->
                <h1>Blogs</h1>
                
                <form class="page-actions">
                <div>
                <input name="" type="text" class="placeholder" placeholder="Search blogs ..."><input name="" type="submit" class="btn" value="">
                </div>
                <ins>SORT BY:</ins>
                
                <div class="select-wrapper">
                <select name="" id="">
                	<option selected>Date</option>
                	<option>Title</option>
                	<option>Views</option>
                	<option>Long long option very long</option>
                </select>
                
                
                </div><span class="descending" title="Descending order"></span><!--<span class="ascending order" title="Ascending"></span>-->
                </form> 
                              
			<div class="blog-item">               
                
                <div class="video-wrapper medium-video-wrapper">
                <a href="#" class="bg-overlay"><span></span></a>
                <div class="comments-overlay">
                            <span class="views">69</span>
                            <a href="#" class="comments">35<span></span></a>
                            <a href="#" class="likes liked">7<span></span></a>
                </div>
                <img src="images/temp/weeks-live-coaching.png" width="300" height="168" alt="Weeks live coaching">
                </div>
                
                <div>
                <h3>Live coaching 1<span>Added by <a href="#">Kieron Sweeney</a> 1 month ago</span></h3>
                <p>https://new.livestream.com/accounts/2627721/events/1862829</p>
                </div>                
          	</div>
            
            <div class="blog-item">               
                
                <div class="video-wrapper medium-video-wrapper">
                <a href="#" class="bg-overlay"><span></span></a>
                <div class="comments-overlay">
                            <span class="views">69</span>
                            <a href="#" class="comments">35<span></span></a>
                            <a href="#" class="likes liked">7<span></span></a>
                </div>
                <img src="images/temp/weeks-live-coaching.png" width="300" height="168" alt="Weeks live coaching">
                </div>
                
                <div>
                <h3>Live coaching 1<span>Added by <a href="#">Kieron Sweeney</a> 1 month ago</span></h3>
                <p>https://new.livestream.com/accounts/2627721/events/1862829</p>
                </div>                
          	</div>
            
            <div class="blog-item">               
                
                <div class="video-wrapper medium-video-wrapper">
                <a href="#" class="bg-overlay"><span></span></a>
                <div class="comments-overlay">
                            <span class="views">69</span>
                            <a href="#" class="comments">35<span></span></a>
                            <a href="#" class="likes liked">7<span></span></a>
                </div>
                <img src="images/temp/weeks-live-coaching.png" width="300" height="168" alt="Weeks live coaching">
                </div>
                
                <div>
                <h3>Live coaching 1<span>Added by <a href="#">Kieron Sweeney</a> 1 month ago</span></h3>
                <p>https://new.livestream.com/accounts/2627721/events/1862829</p>
                </div>                
          	</div>
            
            <div class="blog-item">               
                
                <div class="video-wrapper medium-video-wrapper">
                <a href="#" class="bg-overlay"><span></span></a>
                <div class="comments-overlay">
                            <span class="views">69</span>
                            <a href="#" class="comments">35<span></span></a>
                            <a href="#" class="likes liked">7<span></span></a>
                </div>
                <img src="images/temp/weeks-live-coaching.png" width="300" height="168" alt="Weeks live coaching">
                </div>
                
                <div>
                <h3>Live coaching 1<span>Added by <a href="#">Kieron Sweeney</a> 1 month ago</span></h3>
                <p>https://new.livestream.com/accounts/2627721/events/1862829</p>
                </div>                
          	</div>
            
            <!-- Blog end -->
            
            <!-- Home page highlights start -->
            
            <div class="pagination">
            	
                <a href="#" class="btn">Previous</a>
                       
                <div class="page-numbers">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                </div>
                
                <a href="#" class="btn">Next</a>
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
            <div><div class="centralizer"></div></div>
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
