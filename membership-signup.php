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
            
          <h1><u>Sign Up for Memberships</U><span>If you already have an account on our website, please <a href="user-login.php">login</a> to continue.</span></h1>
            
            <form method="post" action="member-dashboard.php" class="membership-signup">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
              <tr align="left">
                <td colspan="2">Your membership</td>
                </tr>
              </thead>
              <tr>
                <td>Membership type</td>
                <td align="left"><label>
                  <input type="radio" name="MembershipType" value="Founder's Membership Subscription (Lifetime Pay Once) $497.00" id="MembershipType_0">
                  <strong>Founder's Membership Subscription (Lifetime Pay Once) $497.00</strong>
<span class="input-info">Web Show, Archives, Youth Channel, once/month teleseminar coaching, social media course, mobile marketing course, any course Kieron teaches on kierontv, VIP seats at live event - ONLY pay once. No monthly subscription</span><br>
                </label>
                  
                  <label>
                    <input type="radio" name="MembershipType" value="radio" id="MembershipType_1">
                    <strong>Gold Membership Subscription$19.97 for each one month</strong>
                <span class="input-info">Monthly Subscription includes Web Show, Archives, Youth Channel and once/month Coaching Teleseminar</span><br>
                  </label>  
                <label>
                  <input type="radio" name="MembershipType" value="radio" id="MembershipType_2">
                  <strong>Gold Membership Subscription $199.70 for each one year</strong>
                  <span class="input-info">Monthly Subscription includes Web Show, Archives, Youth Channel and once/month Coaching Teleseminar</span><br>
                </label>
                <label>
                  <input type="radio" name="MembershipType" value="radio" id="MembershipType_3">
                  <strong>Silver Membership Subscription $9.97 for each one month</strong>
                  <span class="input-info">Monthly Subscription - includes Web show and Archives</span><br>
                </label>
                <label>
                  <input type="radio" name="MembershipType" value="radio" id="MembershipType_4">
                  <strong>Silver Membership Subscription $99.70 for each one year</strong>
                  <span class="input-info">Monthly Subscription - includes Web show and Archives</span></label>                                </td>
              </tr>
              <tfoot>
              </tfoot>
            </table>
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
              <tr align="left">
                <td colspan="2">Your Payment</td>
                </tr>
              </thead>
              <tr>
                <td>Payment System</td>
                <td align="left"><strong>PayPal</strong><br>
                Pay securely with your paypal account or credit/ debit card.</td>
              </tr>
              <tfoot>
              </tfoot>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
                <tr align="left">
                  <td colspan="2">Your account</td>
                </tr>
              </thead>
              <tr>
                <td>First and Last name:</td>
                <td align="left"><label for="textfield"></label>
                <input type="text" name="textfield" id="textfield" class="placeholder" placeholder="First name">&nbsp;&nbsp;<input type="text" name="textfield2" id="textfield2" class="placeholder" placeholder="Last name"></td>
              </tr>
              <tr>
                <th>Your email address
                <span class="input-info">a confirmation email will be sent to you at this address</span>
                </th>
                <th align="left"><input name="textfield3" type="text" id="textfield3" size="30"></th>
              </tr>
              <tr>
                <td>Phone number:</td>
                <td align="left"><input type="text" name="textfield4" id="textfield4"></td>
              </tr>
              <tr>
                <th>Choose a username<span class="input-info">It must be 6 or more characters in length may only contain letters, numbers, and underscores</span></th>
                <th align="left"><input type="text" name="textfield5" id="textfield5"></th>
              </tr>
              <tr>
                <td>Choose a password<span class="input-info">Must be 6 or more characters</span></td>
                <td align="left"><input type="text" name="textfield6" id="textfield6"><div class="error-msg"><span>This&nbsp;field&nbsp;is&nbsp;required.</span></div></td>
              </tr>
              <tr>
                <th>Confirm your password</th>
                <th align="left"><input type="text" name="textfield7" id="textfield7"></th>
              </tr>
              <tfoot>
              </tfoot>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
                <tr align="left">
                  <td colspan="2">Other pereferences</td>
                </tr>
              </thead>
              <tr>
                <td>Site Newsletters</td>
                <td align="left"><label><input type="checkbox" name="checkbox" id="checkbox">
                  Subscribe to Site Newsletters
</label></td>
              </tr>
              <tfoot>
              </tfoot>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
                <tr align="left">
                  <td colspan="2">User agreement</td>
                </tr>
              </thead>
              <tr>
                <th>Terms &amp; Conditions<span class="input-info">Do you agree with our<br>
<strong><a href="http://kierontv.com/about/privacy-security">Privacy &amp; Security Policy</a> and <a href="http://kierontv.com/about/terms-conditions">Terms &amp; Conditions</a></strong>?</span></th>
                <th align="left"><input type="checkbox" name="checkbox2" id="checkbox2"><div class="error-msg"><span>This&nbsp;field&nbsp;is&nbsp;required.</span></div>&nbsp;<label>I agree</label>
                  </th>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left"><input type="submit" name="button" id="button" value="Next" class="btn"></td>
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
