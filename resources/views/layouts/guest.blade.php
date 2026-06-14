<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIAKAD IFB</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background:#f3f4f6;
        }

        .login-wrapper{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .login-card{
            width:100%;
            max-width:900px;
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,.15);
            display:flex;
        }

        .left-side{
            width:50%;
            background:#2563eb;
            color:white;
            padding:50px;
        }

        .left-side h1{
            font-size:40px;
            margin-bottom:20px;
        }

        .right-side{
            width:50%;
            padding:50px;
        }

        @media(max-width:768px){
            .login-card{
                flex-direction:column;
            }

            .left-side,
            .right-side{
                width:100%;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    {{ $slot }}

</div>

</body>
</html>