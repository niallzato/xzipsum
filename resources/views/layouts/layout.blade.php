<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta property="fb:page_id" content="">
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:description" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:type" content="website">

        <title>{{env('TITLE')}}</title>

                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/app.css">

        <script src="https://use.fontawesome.com/234599eae1.js"></script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row orange-background">
                <div class="col-xs-12">
                    <div class="text-center logo-text text-xlarge text-bold">
                        PIMP MY <br> TEXT
                    </div>      
                </div>
            </div>        
            @yield('content')
        </div>
        <script type="text/javascript">
            var para,capital,lower;
            $( document ).ready(function() {
                
               //$( "#post" ).click(function() {

               //    para = $( "#paragraphs" ).val();
               //    
               //    console.log('here');
               //    
               //    $.post( "/text", function( data ) {
               //      $( ".result" ).html( data );
               //    });
               //});

            });            
        </script>
    </body>
</html>