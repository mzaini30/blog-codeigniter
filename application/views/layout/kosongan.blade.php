<!DOCTYPE html>
<html>
<head>
	<title>Zen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/app/style.css">
	<link rel="alternate" type="application/rss+xml" title="Zen" href="{{ base_url() }}index.php/rss" />
</head>
<body>
	@yield('isi')
	<script type="text/javascript" src="{{ base_url() }}aset/vendor/jquery/jquery.min.js"></script>
	@yield('skrip')
	<script type="text/javascript" src="{{ base_url() }}aset/app/app.js"></script>
</body>
</html>