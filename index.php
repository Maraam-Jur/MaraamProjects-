<!DOCTYPE html>
<html>
<head>
	<title>Geocoding Address </title>
</head>
<body>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script type="text/javascript">
	$.ajax({
		url:"https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAMMOc2P1L0ZJd3c8NGRFvSsH-toFISvEo ",
		type:"GET",
		success:function(date){
	        console.log(data);
		}

	})
</script>
</html>