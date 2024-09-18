<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="robots" content="noindex, nofollow">
  		<meta property="og:image" content="{{ asset('images/icons/facebookimage.png') }}">
	    <title>{{config('app.name')}}</title>
	    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}">

	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.13.1/datatables.min.css"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	    @vite('public/css/style.css')
	</head>
	<body class="body">
		@yield('content')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	    <script src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>

	    @yield('scripts')

		<script>
		  	@if(Session::has('message'))
		  		toastr.options =
		  		{
		  			"closeButton" : true,
		  			"progressBar" : true
		  		}
		  		toastr.success("{{ session('message') }}");
		  	@endif
		  	@if(Session::has('error'))
				toastr.options =
				{
					"closeButton" : true,
					"progressBar" : true
				}
		  		toastr.error("{{ session('error') }}");
		  	@endif
		  	@if(Session::has('info'))
			  	toastr.options =
			  	{
			  		"closeButton" : true,
			  		"progressBar" : true
			  	}
		  		toastr.info("{{ session('info') }}");
		  	@endif
		  	@if(Session::has('warning'))
			  	toastr.options =
			  	{
			  		"closeButton" : true,
			  		"progressBar" : true
			  	}
		  		toastr.warning("{{ session('warning') }}");
		  	@endif
		</script>
	</body>
</html>