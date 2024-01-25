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
            
          <h1><u>Helpdesk</U><span>We answer customer tickets Mon-Fri, 10am - 5pm EST. You can also call us by phone if you have an urgent question.</span></h1>
          
          
          <form class="tickets-wrapper">
          <h2>Ticket title test (VBO-207894)<br>
            <br>
            <a href="#" class="btn">Reply</a>&nbsp;&nbsp;<a href="#" class="btn">Close ticket</a>&nbsp;&nbsp;<a href="#" class="btn">Refresh</a></h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
  <thead>
          <tr align="left">
            <td>rsquarejs (raju maharjan), 1 day(s) ago<span title="04/15/13, 10:40 PM"></span></td>
            </tr>
        </thead>
        <tr>
          <td>Thank you administrator for your reply.<span title="04/15/13, 10:40 PM"></span></td>
          </tr>
        <tfoot>
        </tfoot>
      </table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
  <thead>
    <tr align="left">
      <td>Administrator, <span title="04/12/13, 05:37 PM">2 day(s) ago</span></td>
    </tr>
  </thead>
  <tr>
    <td>You can help yourself by going to the particular page of the website.<span title="04/15/13, 10:40 PM"></span></td>
  </tr>
  <tr>
    <th><label for="textfield"><a href="#" class="btn">Reply</a></label></th>
  </tr>
  <tr>
    <td><textarea name="textfield" cols="70" rows="6" id="textfield"></textarea></td>
  </tr>
  <tr>
    <th><input name="" type="submit" class="btn" value="Submit">&nbsp;&nbsp;<input name="" type="reset" class="btn" value="Discard"></th>
  </tr>
  <tfoot>
  </tfoot>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
  <thead>
    <tr align="left">
      <td>username (name surname), <span title="04/11/13, 11:47 PM">3 day(3) ago</span></td>
    </tr>
  </thead>
  <tr>
    <td>Dear administrator, please help me in this regard.<span title="04/15/13, 10:40 PM"></span></td>
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
