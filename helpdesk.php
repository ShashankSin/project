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
          
          <form class="page-actions">
                <div>
                <input name="" type="text" class="placeholder" placeholder="Search tickets ..."><input name="" type="submit" class="btn" value="">
                </div>
                <ins>SORT BY:</ins>
                
            <div class="select-wrapper">
                <select name="">
                	<option selected>New</option>
                	<option>Awaiting admin response</option>
                	<option>Awaiting user response</option>
                	<option>Closed</option>
                </select>
                
                <!--<input name="" type="text" value="COMMENTS" id="sort-input" disabled>-->
                
                	<ul id="sort-elements">
                    	<li>
                        <a href="javascript:" onClick="javascript:getElementById('sort-input').value='Date'">
                        Date
                        </a>
                        </li>
                    	<li><a href="javascript:" onClick="javascript:getElementById('sort-input').value='Title'">
                        Title
                        </a></li>
                    	<li><a href="javascript:" onClick="javascript:getElementById('sort-input').value='Views'">
                        Views</a>
                        </li>
                    	<li><a href="javascript:" onClick="javascript:getElementById('sort-input').value='Likes'">
                        Likes</a>
                        </li>
                    	<li><a href="javascript:" onClick="javascript:getElementById('sort-input').value='Comments'">
                        Comments
                        </a></li>
                    </ul>
                </div><span class="descending" title="Descending order"></span><!--<span class="ascending order" title="Ascending"></span>-->
          </form>
          <div class="tickets-wrapper">
          <h2>Tickets (displaying records 1-2 from 2)</h2>
          <h2>No ticket(s) have been created. <a href="#" class="btn">Create one now</a></h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="membership">
        <thead>
          <tr align="left">
            <td>Ticket #</td>
            <td>Subject</td>
            <td>Updated</td>
            <td>Status</td>
            <td>Message Sent</td>
          </tr>
        </thead>
        <tr>
          <td>VBO-207894</td>
          <td align="left"><a href="ticket.php">Ticket title one</a></td>
          <td align="left">3 days ago</td>
          <td align="left">Awaiting user response</td>
          <td align="left">4</td>
        </tr>
        <tr>
          <th>CUW-301710</th>
          <th align="left"><a href="ticket.php">Second ticket title</a></th>
          <th align="left">3 days ago</th>
          <th align="left">Awaiting admin response</th>
          <th align="left">5</th>
        </tr>
        <tfoot>
        </tfoot>
        </table>
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
