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

        
    </div></div>
    <!-- Header End -->
    
    <!-- Body content start -->
    <div class="centralizer">
    
    <!-- 2 Column layout start -->
    <div class="main-content">
    
    	<!-- Left column start -->
        <div class="leftcol">
            
          <h1><u>User login</U><span>Not a member? Please <a href="membership-signup.php">click here</a> to sign up for free!</span></h1>
          
            
            <div class="success-msg error-message">
            Invalid username or password.
            </div>
          
          <form>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership" style="margin-top: 20px;">
          <thead>
    <tr align="left">
      <td colspan="2">Enter your login details<span title="04/12/13, 05:37 PM"></span></td>
      </tr>
  </thead>
  <tr>
    <td><input name="textfield2" type="text" id="textfield2" class="placeholder" placeholder="Username" style="vertical-align: top;">
      &nbsp;
      <input name="textfield3" type="password" id="textfield3" class="placeholder" placeholder="Password" style="vertical-align: top;">
      &nbsp;
  <input type="submit" name="button2" id="button2" value="Login" class="btn"></td>
    <td style="width: 80px;"><a href="#" class="btn grey-btn">Forgot&nbsp;your&nbsp;password?</a></td>
    </tr>
  <tfoot>
  </tfoot>
</table>
          </form>
          <p></p>
          
          <h1><u>Forgot password?</U><span>Please enter the same email address used while registering with us.</span></h1>
          
          <div class="success-msg">
          A password reset link has been sent to you. Please check your email.
          </div>
          
          <div class="success-msg error-message">
            E-mail address doesn't exist.
          </div>
          
          <form>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership" style="margin-top: 20px;">
          <thead>
    <tr align="left">
      <td>Enter your login email</td>
      </tr>
  </thead>
  <tr>
    <td><input name="textfield2" type="email" class="placeholder" id="textfield2" placeholder="Email address" style="vertical-align: top;" size="40">
      &nbsp;
  <input type="submit" name="button2" id="button2" value="Submit" class="btn"></td>
    </tr>
  <tfoot>
  </tfoot>
</table>
          </form>


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
