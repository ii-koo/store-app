<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS-->
    <link href="{{ asset ('/css/style.css') }}" type="text/css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset ('/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    {{ View::make('components.header') }}
    @yield('content')
    {{ View::make('components.footer') }}

    <script src="{{ asset ('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                alert("Click Login Button.");
            });
        });
    </script>
  </body>
</html>
