<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jcarouselassets/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="customselectassets/expandselect.js"></script>
</head>

<body>
<script>
				$(function(){
				$('#iddd').click(function(){
				 ExpandSelect('page-filterr', 4);
				});
				});
				</script>

			<a id="iddd" href="javascript:;">ad</a>
                <select name="page-filterr" id="page-filterr">
                	<option selected>Date</option>
                	<option>Title</option>
                	<option>Views</option>
                	<option>Long long option</option>
                </select>
</body>
</html>