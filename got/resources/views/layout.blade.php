<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game of Thrones</title>  
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.tiny.cloud/1/ty7nj76e0dh3yr7tjuyhdrerfmk65xecqwh0jqzfkntl9kg3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	@yield('scripts')
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="navbar navbar-dark navbar-expand-lg">
			<a class="navbar-brand" href="/" width="200" height="100">       
    			<img xlink:href="../../images/vector/logo.svg" src="../../images/vector/logo.svg" width="200" height="100"> 
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">   
				</span>
			</button>
			<div class="collapse navbar-collapse rightl" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="/">Home</a>
					<a class="nav-item nav-link" href="/blogs">Blogs</a>
					<a class="nav-item nav-link" href="/donate">Donate</a>
					@auth
						<a class="nav-item nav-link" href="/dashboard/pages">Admin Pages</a>
						<a class="nav-item nav-link" href="/dashboard/blogs">Admin Blog</a>
						<a class="dropdown-item nav-item nav-link" style="width:80px" href="{{ route('logout') }}"
							onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						
					@else
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
					@endauth
				</div>
			</div>
		</nav>
	</header>

	<div class="main">

	@yield('content')

	</div>

	<footer class="page-footerspecial-color-dark">
		<div class="container">
		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<p>About</p>
			</li>
			<li class="list-inline-item">
				<p>Content</p>
			</li>
			<li class="list-inline-item">
				<p>Legal</p>
			</li>
			<li class="list-inline-item">
				<p>Privacy Policy</p>
			</li>
		</ul>
		</div>
		<div class="footer-copyright text-center">© 2020 Copyright: Yentel De Hauwere </div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>