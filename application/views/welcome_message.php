<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Digital Clock In JavaScript</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- /* Code By Webdevtrick ( https://webdevtrick.com ) */ -->
	<style>
		.container {
			margin: 20px auto;
			border: 1px solid black;
			display: flex;
			justify-content: center;
		}

		.clock {
			color: #ff4747;
			font-size: 40px;
			font-family: Arial;

		}
	</style>
</head>

<body>
	<div class="container">
		<div id="DigitalCLOCK" class="clock" onload="showTime()"></div>
		<span onload="time()" id="span"></span>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function() {
				location.reload();
			}, 5000);
		})
	</script>
	<script>
		// Code By Webdevtrick ( https://webdevtrick.com )
		function showTime() {
			var date = new Date();
			var h = date.getHours();
			var m = date.getMinutes();
			var s = date.getSeconds();
			var session = "AM";

			if (h == 0) {
				h = 12;
			}

			if (h > 12) {
				h = h - 12;
				session = "PM";
			}

			h = (h < 10) ? "0" + h : h;
			m = (m < 10) ? "0" + m : m;
			s = (s < 10) ? "0" + s : s;

			var time = h + ":" + m + ":" + s + " " + session;
			document.getElementById("DigitalCLOCK").innerText = time;
			document.getElementById("DigitalCLOCK").textContent = time;

			setTimeout(showTime, 1000);

		}

		showTime();

		var span = document.getElementById('span');

		function time() {
			var d = new Date();
			var s = d.getSeconds();
			var m = d.getMinutes();
			var h = d.getHours();
			span.textContent =
				("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
		}

		setInterval(time, 1000);

		console.log(d)
		time();
	</script>
	<script>

	</script>

</body>

</html>