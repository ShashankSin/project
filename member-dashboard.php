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
    <?php include('includes/menubar-loggedin.php') ?>
    <!-- Menubar End -->

	<!-- Header Start -->
    <div class="header"><div class="centralizer">
    	
        <!-- Headerlinks start -->

<?php include('includes/header.php') ?>
<!-- Headerlinks end -->

        
    </div></div>
    <!-- Header End -->
    
    <!-- Body content start -->
    <div class="centralizer">
    
    <!-- 2 Column layout start -->
    <div class="main-content">
    
    	<!-- Left column start -->
        <div class="leftcol">
        	<h1>Welcome Kieron Sweeney !<span>This is your member area, please <a href="#">click here</a> if yout want to logout.</span></h1>
            
            <div class="dashboard">
            	<ul>
                
                	<li>
                    	<h3>Your profile</h3>
                        <div>
                        	<h4>Kieron Sweeney<a href="#">kieron@kierontv.com</a></h4>
                            <p><a href="edit-profile.php">Edit profile</a><br>
                            <a href="#">Logout</a>
                          </p>
                      </div>
                    </li>
                
                	<li>
                    	<h3>Active subscriptions</h3>
                        <div>
                        	<h4>You are subscribed to Gold Membership<strong>$19.97 per month</strong></h4>
                            <p>You have <strong>12 day(s)</strong> remaining to <a href="add-renew-subscription.php">Renew</a> your subscription.</p>
                            <p><a href="add-renew-subscription.php" class="btn">RENEW NOW !</a></p>
                            <!--<p><a href="#">Click here</a> if you wish to upgrade your membership subscription to better one.</p>-->
                      </div>
                    </li>
                
                	<li>
                    	<h3>Helpdesk</h3>
                        <div>
                        	<p>
                            You have<br>
							<a href="#">2 Active ticket(s)</a>.</p>
                            <p>You have <a href="#">1 reply(s)</a> from kierontv.com.
							</p>
                        </div>
                    </li>
                    
                </ul>
                
            	<ul class="twocol">
                
                	<li class="redblock">
                    	<h3>Newsletter Subscriptions</h3>
                        <form><label><input name="" type="checkbox" value=""> Subscribe to capturektv.</label></form>
                    </li>
                
                	<li class="redblock">
                    	<h3>Unsubscribe from all e-mail messages</h3>
                        <form><label><input name="" type="checkbox" value=""> Unsubscribe from all e-mail messages.</label></form>
                    </li>
                    
                </ul>
                
                <ul>
                
                	<li>
                    	<h3>Affiliate info</h3>
                      <div>
                       	<h4>Your affiliate link<a href="#">http://kierontv.com/amember/aff/go?r=70</a></h4>
                          <p style="font-size: 11px;">No Banners and Links added by admin yet. </p>
                      </div>
                    </li>
                
                	<li>
                    	<h3>Payout info</h3>
                        <div>
                          <p>You have selected <a href="payout-info.php">Paypal</a> as your commission payout medium.</p>
                            <p><a href="payout-info.php" class="btn">CHANGE</a></p>
                            <!--<p><a href="#">Click here</a> if you wish to upgrade your membership subscription to better one.</p>-->
                      </div>
                    </li>
                
                	<li>
                    	<h3>Affiliate stats</h3>
                        <div>
                       	  <p><a href="affiliate-stats.php">No records found.</a></p>
                        </div>
                    </li>
                    
                </ul>
                
            </div>
            
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
