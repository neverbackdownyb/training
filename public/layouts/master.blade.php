<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education</title>
	<link rel="stylesheet" href="css/education/app.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
</head>
<body>

@include('header')

@yield('body.content')


@include ('slide')
@include ('features')


	<script src="http://localhost/simple-blog/public/js/jquery.min.js"></script>
	<script src="http://localhost/simple-blog/public/js/bootstrap.min.js"></script>
	@yield('body.js')
</body>
</html>