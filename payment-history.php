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
            
          <h1><u>Payment history</U><span>You are logged-in as rsquarejs. <a href="#">Logout</a> to signup as new user.</span></h1>
          
          
          <form class="tickets-wrapper">
          <h2>There are no confirmed payments for your account  <br>
            <br>
            <a href="add-renew-subscription.php" class="btn">Add a subscription</a></h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
  <thead>
          <tr align="left">
            <td>Amount paid<span title="04/15/13, 10:40 PM"></span></td>
            <td>For</td>
            <td>Date</td>
            <td>Expiration date</td>
            <td>Renew</td>
            </tr>
        </thead>
        <tr>
          <td><strong>$19.97</strong></td>
          <td><strong><a href="membership-plans-features.php">Gold Membership</a></strong><br>
            On monthly basis (For the month of April, 2013)</td>
          <td>31/03/2013</td>
          <td>30/04/2013</td>
          <td><a href="add-renew-subscription.php" class="btn">Renew</a></td>
        </tr>
        <tr>
          <th><strong>$19.97</strong></th>
          <th><strong><a href="membership-plans-features.php">Gold Membership</a></strong><br>
            On monthly basis (For the month of March, 2013)</th>
          <th>28/02/2013</th>
          <th>30/03/2013</th>
          <th>&nbsp;</th>
        </tr>
        <tr>
          <td><strong>$19.97</strong></td>
          <td><strong><a href="membership-plans-features.php">Gold Membership</a></strong><br>
            On monthly basis (For the month of February, 2013)</td>
          <td>31/01/2013</td>
          <td>28/02/2013</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th><strong>$19.97</strong></th>
          <th><strong><a href="membership-plans-features.php">Gold Membership</a></strong><br>
            On monthly basis (For the month of January, 2013)</th>
          <th>31/12/2012</th>
          <th>31/01/2013</th>
          <th>&nbsp;</th>
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
