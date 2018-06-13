<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('tab_title') - Boolshop </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    </head>
    <body>
        
        <div class="container">
            <div class="row">

                @yield('page_content')

            </div>
        </div>

    </body>
</html>
