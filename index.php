<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" type="text/css" href="rangeslider.css">

<script type="text/javascript" src="jquery-1.11.3.js"></script>
<script type="text/javascript" src="rangeslider.js"></script>
</head>
<body>
<input type="range" min="10" max="1000" step="10" value="300">	
<input type="text" id="abc" value="">
<script type="text/javascript">
	$(document).ready(function(){ 

		    $('input[type="range"]').rangeslider({
		    	onSlide: function(position, value) {

		    			$("#abc").val(value);
		    		alert(1);
		    	},
		    	onInit: function() { alert(1); }

		    	});

	});

</script>
this is just test message
</body>
</html>