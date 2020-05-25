
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-color:white">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url({{ asset('images/background.jpg') }});"></div>
	  				{{-- <h3>Catriona Henderson</h3> --}}
	  			</div>
            </div>
                @yield('links')
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('data')

      </div>
	</div>

    {{-- <script src= "{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src= "{{ asset('js/Jquery.min.js') }}"></script>
    <script src= "{{ asset('js/popper.js') }}"></script>
    <script src= "{{ asset('js/bootstrap.min.js') }}"></script>
    <script src= "{{ asset('js/mainAdmin.js') }}"></script>
  </body>
</html>