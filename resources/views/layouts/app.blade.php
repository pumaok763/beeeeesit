<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title-block')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" href="/css/uikit.min.css" />
        <script src="/js/uikit.min.js"></script>
        <script src="/js/uikit-icons.min.js"></script>

</head>
<body>


	@include('inc.header')


	<div class="container mt-5">
		<div class="row">
			<div class="col-8">
	@yield('content') <!--сюда будет встраиватся код где в файле будет прописано @section('content')-->
			</div>
			<div class="col-4">
	@include('inc.aside')	<!--подключение файла из другой папки(папка.фаил)-->
			</div>
		</div>
	</div>

	@include('inc.footer')
</body>
</html>