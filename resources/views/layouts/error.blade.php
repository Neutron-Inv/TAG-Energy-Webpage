<!doctype html>
<html> 
<head> 
	<meta charset="utf-8" />
	<title>@yield('title') | {{ config('app.name') }}</title>
  <link href="{{ load_asset('error-template/style.css') }}" rel="stylesheet"/>
  <link rel="apple-touch-icon" type="image/png" href="{{ load_asset('images/favicon/logo-180x180.png') }}" sizes="180x180">
  <link rel="icon" type="image/png" href="{{ load_asset('images/favicon/logo-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ load_asset('images/favicon/logo-16x16.png') }}" sizes="16x16">
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
</head> 
<body>
	<div id="level">
		<div id="content">
			<div id="gears">
				<div id="gears-static"></div>
				<div id="gear-system-1">
					<div id="gear15"></div>
					<div id="gear14"></div>
					<div id="gear13"></div>
				</div>
				<div id="gear-system-2">
					<div id="gear10"></div>
					<div id="gear3"></div>
				</div>
				<div id="gear-system-3">
					<div id="gear9"></div>
					<div id="gear7"></div>
				</div>
				<div id="gear-system-4">
					<div id="gear6"></div>
					<div id="gear4"></div>
				</div>
				<div id="gear-system-5">
					<div id="gear12"></div>
					<div id="gear11"></div>
					<div id="gear8"></div>
				</div>
				<div id="gear1"></div>
				<div id="gear-system-6">
					<div id="gear5"></div>
					<div id="gear2"></div>
				</div>
				<div id="chain-circle"></div>
				<div id="chain"></div>
				<div id="weight"></div>
			</div>
			@yield('content')
		</div>
	</div>
</body>
</html>