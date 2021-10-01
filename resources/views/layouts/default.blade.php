<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Laracarte</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Opens+Sans" rel="stylesheet">
        <!-- fontAwesome -->
       <link rel="stylesheet" type="text/css" herf="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
    body{

        font-family: 'Opens Sans', Helvetica, Arial, sans-serif;

    }

    footer{
        margin: 4em 0;
    } 

</style>

    </head>
    <body>

    @include('layouts/partials/_nav')

       @yield('content')
       @include('layouts/partials/_footer')

        <script src="//code.jquery.com/jquery.min.js"> </script>
         
         <!-- Latest compiled and minified JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


     </body>
</html>