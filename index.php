<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bithumb API test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="cover.css">
	<script>
	function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 1000);
	}
	function checkTime(i) {
    if (i < 10) {i = "0" + i}; // 숫자가 10보다 작을 경우 앞에 0을 붙여줌
    return i;
	}
	</script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Mon', 20, 28, 38, 45],
      ['Tue', 31, 38, 55, 66],
      ['Wed', 50, 55, 77, 80],
      ['Thu', 77, 77, 66, 50],
      ['Fri', 68, 66, 22, 15]
      // Treat first row as data as well.
    ], true);

    var options = {
      legend:'none'
    };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
    </script>

</head>
<body onload="startTime()">
<div class="site-wrapper">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="inner cover">
				<div style="color:#666;font-size:50px; text-align:center;" id="clock"></div>
				<div id="chart_div" style="width: 900px; height: 500px;"></div>
				<div class="price">
					<p class="lead"><span id="time"></span></p>
					<p class="lead2"><span id="time2"></span></p>
				</div>
				<script>
				    var xhr = new XMLHttpRequest();
				    xhr.open('GET', './bitcoin.php');
				    xhr.onreadystatechange = function(){
				        if(xhr.readyState === 4 && xhr.status === 200){
				            document.getElementById('time').innerHTML = xhr.responseText;
				        }
				    }
				    xhr.send();

				    setInterval(function(){
				    xhr.open('GET', './bitcoin.php');
				    xhr.onreadystatechange = function(){
				        if(xhr.readyState === 4 && xhr.status === 200){
				            document.getElementById('time').innerHTML = xhr.responseText;
				        }
				    }
				    xhr.send(); 
				    }, 2000);

				    var xhr2 = new XMLHttpRequest();
				    xhr2.open('GET', './bitcoin2.php');
				    xhr2.onreadystatechange = function(){
				        if(xhr2.readyState === 4 && xhr2.status === 200){
				            document.getElementById('time2').innerHTML = xhr2.responseText;
				        }
				    }
				    xhr2.send();

				    setInterval(function(){
				    xhr2.open('GET', './bitcoin2.php');
				    xhr2.onreadystatechange = function(){
				        if(xhr2.readyState === 4 && xhr2.status === 200){
				            document.getElementById('time2').innerHTML = xhr2.responseText;
				        }
				    }
				    xhr2.send(); 
				    }, 2000);
				</script> 
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>