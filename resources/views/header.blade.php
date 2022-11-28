<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Application</title>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" ></script>

    <!-- Datepicker -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <style>
        ul {
            display: inline-block;
            width: 100%;
            list-style: none;
            margin: 0 auto;
            margin-bottom: 10px;
            text-align: center;
        }
        ul li {
            display: inline-block;
        }
        h1.title {
            padding-top: 30px;
            margin-top: 20px;
            text-align:center; 
            width:100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Booking Application</b></h1>
        <ul>
            <li><a href="/booking">Booking</a></li>
            <li><a href="/event">Event</a></li>
            <li><a href="/seat">Seat</a></li>
        <ul>
        @yield('content')
        
    </div>
    
</body>
</html>