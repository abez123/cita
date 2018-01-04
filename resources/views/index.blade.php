<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
		<div class="container">
		  <router-view></router-view>	
		</div>
		
        <Myfooter></Myfooter>
	</div>

<script src="{{asset('js/app.js')}}" type="text/javascript" charset="utf-8"></script>
</body>
</html>