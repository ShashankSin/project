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
            
          <h1><u>Contact us</U><span>Are you already a member of KieronTV? Go to <a href="helpdesk.php" class="btn">Helpdesk</a> and submit a ticket if you need help.</span></h1>
            
            <form method="post" action="member-dashboard.php" class="membership-signup">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
              <thead>
                <tr align="left">
                  <td colspan="2">Send us message</td>
                </tr>
              </thead>
              <tr>
                <td><span class="input-required">*</span>First and Last name:</td>
                <td align="left"><label for="textfield"></label>
                <input type="text" name="textfield" id="textfield" class="placeholder" placeholder="First name">&nbsp;&nbsp;<input type="text" name="textfield2" id="textfield2" class="placeholder" placeholder="Last name"></td>
              </tr>
              <tr>
                <th><span class="input-required">*</span>Your email address
                </th>
                <th align="left"><input name="textfield3" type="text" id="textfield3" size="30"></th>
              </tr>
              <tr>
                <td>Phone number:</td>
                <td align="left"><input type="text" name="textfield4" id="textfield4"></td>
              </tr>
              <tr>
                <th><span class="input-required">*</span>Subject</th>
                <th align="left"><input type="text" name="textfield5" id="textfield5"></th>
              </tr>
              <tr>
                <td><span class="input-required">*</span>Message</td>
                <td align="left"><textarea name="textfield6" cols="40" rows="7" id="textfield6"></textarea>                  <div class="error-msg"><span>This&nbsp;field&nbsp;is&nbsp;required.</span></div></td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <th align="left"><input type="submit" name="button2" id="button2" value="Submit" class="btn"></th>
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
