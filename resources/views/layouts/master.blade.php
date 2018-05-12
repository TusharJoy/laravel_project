
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Template for Bootstrap</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  </head>

  <body>

    @if($flash = session('message'))

        <div id="flash_message" class="alert alert-success" role='alert'>
            <strong> {{$flash}}</strong>
            
        </div>
    @endif

    @include('layouts.nav')

    <div class="container">
      <dir class="row">
            @yield('content')

            @include('layouts.sidebar')
      </dir>
      
    </div>
    @include('layouts.footer')
  </body>
</html>

