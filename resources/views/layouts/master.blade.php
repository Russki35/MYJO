<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">
    

    <title>Blog example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"  crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/blog.css')}}" rel="stylesheet">
  </head>

  <body>
    @include('layouts.nav')

    <div class="container">

      <div class="row">

      @yield('content')  

          
      @include('layouts.sidebar')
          

        

      </div>

    </div>
    

    

    @include('layouts.footer')
    	
  </body>
</html>
