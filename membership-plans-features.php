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
            
          <h1><u>Membership features and plans</U><span>Choose your plan, subscribe, and gain access !!</span></h1>
            
            <table border="0" cellspacing="0" cellpadding="0" class="membership">
              <thead>
              <tr>
                <td>What You Get</td>
                <td align="center">Silver Membership</td>
                <td align="center">Gold Membership</td>
                <td align="center">Founder’s Membership</td>
              </tr>
              </thead>
              <tr>
                <td>Watch kierontv.com live Monday-Friday</td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
              </tr>
              <tr>
                <th>Access to archives</th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
              </tr>
              <tr>
                <td>Access to the teen/youth coaching channel (this is a very special bonus and will be led by a very experienced trainer who focuses on youth mindset and building up self-esteem, courage and inner power)</td>
                <td align="center">-</td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
              </tr>
              <tr>
                <th>One hour group coaching call every month</th>
                <th align="center">-</th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
              </tr>
              <tr>
                <td>Only available for 200 people. You will only ever pay once</td>
                <td align="center">-</td>
                <td align="center">-</td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
              </tr>
              <tr>
                <th>Free tuition to any courses I personally teach online in addition to the daily kierontv.com web show (does not include any third party courses we may offer from time to time or private coaching).</th>
                <th align="center">-</th>
                <th align="center">-</th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
              </tr>
              <tr>
                <td>Free tuition to the Social Media Marketing and Mobile Marketing Courses (valued at $497 each)</td>
                <td align="center">-</td>
                <td align="center">-</td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
              </tr>
              <tr>
                <th>Special once a month coaching program</th>
                <th align="center">-</th>
                <th align="center">-</th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
              </tr>
              <tr>
                <td>VIP seating at any live event I host</td>
                <td align="center">-</td>
                <td align="center">-</td>
                <td align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></td>
              </tr>
              <tr>
                <th>One hour private group (Founding Members) session with Kieron at Live Events</th>
                <th align="center">-</th>
                <th align="center">-</th>
                <th align="center"><img src="images/icon-membership-feature-yes.png" alt="Available"></th>
              </tr>
              <tfoot>
              <tr>
                <td>&nbsp;</td>
                <td align="center">
                <strong>$9.97</strong>
                <span>per month</span>
                -or-
                <strong>$99.70</strong>
                <span>per year</span>
                (2&nbsp;months&nbsp;free) <a href="membership-signup.php" class="btn">SUBSCRIBE</a>
                </td>
                <td align="center">
                <strong>$19.97</strong>
                  <span>per month</span>
                  -or-
                  <strong>$199.70</strong>
                  <span>per year</span>
                  (2&nbsp;months&nbsp;free) <a href="membership-signup.php" class="btn">SUBSCRIBE</a></td>
                <td align="center"><strong>$497</strong>
                <span>one time charge</span>
                <br>
                (Only&nbsp;200&nbsp;Available)<a href="membership-signup.php" class="btn">SUBSCRIBE</a></td>
                </tr>
              </tfoot>
            </table>

            
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
